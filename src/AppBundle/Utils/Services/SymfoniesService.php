<?php

namespace AppBundle\Utils\Services;

use AppBundle\AppBundle;
use AppBundle\Entity\Symfony;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class SymfoniesService{
	
	use ContainerAwareTrait;
	
	const SCAN_PROCESS_TIMEOUT = 300;
	
	/**
	 * SymfoniesService constructor.
	 *
	 * @param ContainerInterface $container
	 */
	public function __construct(ContainerInterface $container){
		$this->setContainer($container);
	}
	
	/**
	 * Scan the directories and save all symfonies found on db
	 */
	public function scan(){
		set_time_limit(0);
		
		$doctrine = $this->container->get('doctrine');
		$em = $doctrine->getManager();
		$repo = $doctrine->getRepository('AppBundle:Symfony');
		
		// get all symfonies
		$list = $this->getSymfonies();
		
		// remove startsymfonies2 from the list
		$list = array_filter($list, function($v, $k){
			return !strstr($v, AppBundle::START_SYMFONIES_NAME);
		}, ARRAY_FILTER_USE_BOTH);
		
		// insert symfonies in db if not exist
		foreach($list as $info){
			$info = explode('|', $info);
			$path = $info[0];
			$version = $info[1];
			
			// check if symfony exist
			if($symfony = $repo->findOneBy(['path' => $path])){
				// if exist, upgrade the version (it can be changed)
				$symfony->setVersion($version);
			}
			else{
				// if not exist add a new row in database
				$symfony = new Symfony();
				$symfony->setPath($path);
				$symfony->setVersion($version);
			}
			
			$em->persist($symfony);
			$em->flush();
		}
	}
	
	/**
	 * Get all symfonies found
	 *
	 * @return array
	 */
	private function getSymfonies(){
		$symfonies = [];
		
		foreach($this->getDirectories() as $directory){
			$symfonies = array_merge($symfonies, $this->getSymfoniesFromDir($directory));
		}
		
		// remove all path that contains 'vendor' word
		foreach($symfonies as $k => $symfony){
			if(preg_match('/vendor/', $symfony) > 0){
				unset($symfonies[$k]);
			}
		}
		
		return $symfonies;
	}
	
	/**
	 * Get all symfonies for a directory
	 *
	 * @param string $directory
	 *
	 * @return array
	 */
	private function getSymfoniesFromDir($directory){
		$phpExecutable = $this->container->get(SymfoniesService::class)->getPhpExecutable();
		
		$command = sprintf('%s/../commands/get_symfonies.py %s %s', __DIR__, $directory, $phpExecutable);
		
		$process = new Process($command, null, null, null, self::SCAN_PROCESS_TIMEOUT);
		$process->run();
		
		if(!$process->isSuccessful()){
			throw new ProcessFailedException($process);
		}
		
		$output = $process->getOutput();
		$output = explode(PHP_EOL, $output);
		$output = array_diff($output, ['']);
		
		foreach($output as $k => $v){
			$output[$k] = str_replace(['/app/console', '/bin/console'], '', $v);
		}
		
		$output = array_diff($output, [$this->getThisDir()]);
		
		return $output;
	}
	
	/**
	 * Get an array with all directories to scan for symfonies
	 *
	 * @return array
	 */
	private function getDirectories(){
		$dirs = $this->container->getParameter('directories_to_scan');
		
		return explode(',', $dirs);
	}
	
	/**
	 * @return string
	 */
	private function getThisDir(){
		return $this->container->getParameter('kernel.project_dir');
	}
	
	/**
	 * Start a symfony
	 *
	 * @param Symfony $symfony
	 *
	 * @return $this
	 */
	public function start(Symfony $symfony){
		$dirConsole = $symfony->getVersion(true) === 2 ? 'app' : 'bin';
		$phpExecutable = $this->container->get(SymfoniesService::class)->getPhpExecutable($symfony);
		
		$command = sprintf('%s %s/console -q server:start %s:%d &', $phpExecutable, $dirConsole, $symfony->getIp(), $symfony->getPort());
		
		$process = new Process($command, $symfony->getPath());
		$process->disableOutput();
		$process->mustRun();
		
		// set the symfony status active
		$symfony->setStatus(Symfony::STATUS_ACTIVE);
		$em = $this->container->get('doctrine')->getManager();
		$em->persist($symfony);
		$em->flush();
		
		return $this;
	}
	
	/**
	 * Start a symfony and update the database
	 *
	 * @param Symfony $symfony
	 *
	 * @return $this
	 * @throws \Exception
	 */
	public function startAndSave(Symfony $symfony, $ip, $port, $entry){
		$symfony->setIp($ip);
		$symfony->setPort($port);
		$symfony->setEntryPoint($entry);
		
		// check for a symfony already working on the same location
//		if($this->container->get('doctrine')->getRepository(Symfony::class)->findOneBy(['ip' => $symfony->getIp(), 'port' => $symfony->getPort()])){
//			throw new \Exception('There is already a symfony in the same location');
//		}
		
		$this->start($symfony);
		
		$em = $this->container->get('doctrine')->getManager();
		$em->persist($symfony);
		$em->flush();
		
		return $this;
	}
	
	/**
	 * Stop a symfony
	 *
	 * @param Symfony $symfony
	 *
	 * @return $this
	 */
	public function stop(Symfony $symfony){
		$dirConsole = $symfony->getVersion(true) === 2 ? 'app' : 'bin';
		$phpExecutable = $this->container->get(SymfoniesService::class)->getPhpExecutable($symfony);
		
		$commands = [
			// stop for symfony 2.*
			sprintf('%s %s/console -q server:stop %s:%d &', $phpExecutable, $dirConsole, $symfony->getIp(), $symfony->getPort()),
			
			// stop for symfony > 3.3.*
			sprintf('%s %s/console -q server:stop &', $phpExecutable, $dirConsole)
		];
		
		foreach($commands as $command){
			$process = new Process($command, $symfony->getPath());
			$process->disableOutput();
			$process->run();
			
			// this because is too fast and when the page is reloaded the
			// symfony is not completely stopped
			sleep(1);
		}
		
		// set the symfony status stopped
		$symfony->setStatus(Symfony::STATUS_STOPPED);
		$em = $this->container->get('doctrine')->getManager();
		$em->persist($symfony);
		$em->flush();
		
		return $this;
	}
	
	/**
	 * Stop a symfony and update the database
	 *
	 * @param Symfony $symfony
	 *
	 * @return $this
	 */
	public function stopAndSave(Symfony $symfony){
		return $this->stop($symfony)->deleteSymfonyInfo($symfony);
	}
	
	/**
	 * Delete the symfony info connection
	 *
	 * @param Symfony $symfony
	 *
	 * @return $this
	 */
	public function deleteSymfonyInfo(Symfony $symfony){
		$symfony->setIp(null);
		$symfony->setPort(null);
		$symfony->setEntryPoint(null);
		$symfony->setStatus(Symfony::STATUS_STOPPED);
		
		$em = $this->container->get('doctrine')->getManager();
		$em->persist($symfony);
		$em->flush();
		
		return $this;
	}
	
	/**
	 * @param Symfony $symfony
	 *
	 * @return $this
	 */
	public function restart(Symfony $symfony){
		$this->stop($symfony)->start($symfony);
		
		return $this;
	}
	
	/**
	 * Delete a symfony from db
	 *
	 * @param Symfony $symfony
	 *
	 * @return $this
	 */
	public function delete(Symfony $symfony){
		$this->stop($symfony);
		
		$em = $this->container->get('doctrine')->getManager();
		$em->remove($symfony);
		$em->flush();
		
		return $this;
	}
	
	/**
	 * Perform composer install on symfony directory
	 *
	 * @param Symfony $symfony
	 *
	 * @return $this
	 */
	public function composer(Symfony $symfony, $activity){
		set_time_limit(0);
		
		$command = sprintf('composer %s', $activity);

		$process = new Process($command, $symfony->getPath());
		$process->disableOutput();
		$process->mustRun();
		
		// if is an update we need to update the symfony version
		if($activity === 'update'){
			$version = $this->getVersion($symfony);
			$symfony->setVersion($version);
			
			$em = $this->container->get('doctrine')->getManager();
			$em->persist($symfony);
			$em->flush();
		}
		
		return $this;
	}
	
	/**
	 * Get the informations of a composer show command
	 *
	 * @param Symfony $symfony
	 *
	 * @return string
	 */
	public function composerShow(Symfony $symfony){
		$process = new Process('composer show', $symfony->getPath());
		$process->mustRun();
		
		$output = $process->getOutput();
		
		return explode(PHP_EOL, $output);
	}
	
	/**
	 * Return the symfony version
	 *
	 * @param Symfony $symfony
	 *
	 * @return string
	 */
	public function getVersion(Symfony $symfony){
		$dirConsole = $symfony->getVersion(true) === 2 ? 'app' : 'bin';
		$phpExecutable = $this->container->get(SymfoniesService::class)->getPhpExecutable($symfony);
		
		$command = sprintf('%s %s/console', $phpExecutable, $dirConsole);
		
		$process = new Process($command, $symfony->getPath());
		$process->mustRun();
		
		$output = $process->getOutput();
		
		if($symfony->getVersion(true) === 3){
			$output = explode(PHP_EOL, $output)[0];
			$output = explode(' (', $output)[0];
			$output = '3' . explode(' 3', $output)[1];
		}
		else{
			$output = explode(PHP_EOL, $output)[0];
			$output = explode(' - ', $output)[0];
			$output = '2' . explode(' 2', $output)[1];
		}
		
		return $output;
	}
	
	/**
	 * Perform cache and assets reset on symfony directory
	 *
	 * @param Symfony $symfony
	 *
	 * @return $this
	 */
	public function cacheAssetsReset(Symfony $symfony){
		$dirConsole = $symfony->getVersion(true) === 2 ? 'app' : 'bin';
		$phpExecutable = $this->container->get(SymfoniesService::class)->getPhpExecutable($symfony);
		
		$commands = [
			sprintf('%s %s/console -q cache:clear &', $phpExecutable, $dirConsole),
			sprintf('%s %s/console -q assets:install --symlink &', $phpExecutable, $dirConsole)
		];
		
		foreach($commands as $command){
			$process = new Process($command, $symfony->getPath());
			$process->disableOutput();
			$process->mustRun();
		}
		
		return $this;
	}
	
	/**
	 * Start all symfonies with an ip and a port
	 *
	 * @return $this
	 */
	public function startAll(){
		$symfonies = $this->container->get('doctrine')->getRepository(Symfony::class)->getActives();
		
		/** @var Symfony $symfony */
		foreach($symfonies as $symfony){
			$this->start($symfony);
		}
		
		return $this;
	}
	
	/**
	 * Stop all symfonies with an ip and a port
	 *
	 * @return $this
	 */
	public function stopAll(){
		$symfonies = $this->container->get('doctrine')->getRepository(Symfony::class)->getActives();
		
		/** @var Symfony $symfony */
		foreach($symfonies as $symfony){
			$this->stop($symfony);
		}
		
		return $this;
	}
	
	/**
	 * Delete all symfonies from db
	 *
	 * @return $this
	 */
	public function deleteAll(){
		$symfonies = $this->container->get('doctrine')->getRepository(Symfony::class)->findAll();
		
		/** @var Symfony $symfony */
		foreach($symfonies as $symfony){
			$this->delete($symfony);
		}
		
		return $this;
	}
	
	/**
	 * Return the next local ip available
	 *
	 * @return string
	 */
	public function getNextLocalIp(){
		$symfonyRepo = $this->container->get('doctrine')->getRepository(Symfony::class);
		$localPrefix = '127.0.0.';
		$i = 2;
		
		while($symfonyRepo->findOneBy(['ip' => $localPrefix . $i])){
			$i++;
		}
		
		return $localPrefix . $i;
	}
	
	/**
	 * Return the next local port available
	 *
	 * @return int
	 */
	public function getNextLocalPort(){
		$symfonyRepo = $this->container->get('doctrine')->getRepository(Symfony::class);
		$port = 8001;
		
		while($symfonyRepo->findOneBy(['port' => $port])){
			$port++;
		}
		
		return $port;
	}
	
	/**
	 * Return all active symfonies
	 *
	 * @return array
	 */
	public function getActives(){
		return $this->container->get('doctrine')->getRepository(Symfony::class)->getActives();
	}
	
	/**
	 * Return the links of a running symfony
	 *
	 * @param Symfony $symfony
	 * @param bool    $forceOne
	 *
	 * @return array|mixed
	 */
	public function getLinks(Symfony $symfony, $forceOne = false){
		if(!$symfony->getIp() || !$symfony->getPort()){
			return [];
		}
		
		$aliases = $this->getAliases($symfony);
		$links = [];
		$entryPoints = $symfony->getEntryPoint(true);
		if($entryPoints && !$aliases){
			foreach($entryPoints as $entryPoint){
				$links[] = 'http://' . $symfony->getIp() . ':' . $symfony->getPort() . $entryPoint;
			}
		}
		else{
			$links[] = 'http://' . $symfony->getIp() . ':' . $symfony->getPort();
		}
		
		$links = [
			'aliases' => $aliases,
			'link'    => $links
		];
		
		// if required, this remove the empty value (alias) and return the first
		// link in array
		if($forceOne){
			foreach($links as $k => $v){
				if($v === null || $v === []){
					unset($links[$k]);
				}
			}
			
			return reset($links)[0];
		}
		
		return $links;
	}
	
	/**
	 * Return an eventual alias for the symfony (excluded 127.0.0.1)
	 *
	 * @param Symfony $symfony
	 *
	 * @return null|string
	 */
	private function getAliases(Symfony $symfony){
		if($symfony->getIp() == '127.0.0.1'){
			return null;
		}
		
		$hosts = $this->container->get(UtilService::class)->getHosts();
		
		$aliases = [];
		foreach($hosts as $host){
			if(preg_match('/^' . $symfony->getIp() . '/', $host)){
				$host = str_replace($symfony->getIp(), '', $host);
				$host = trim($host);
				
				$entryPoints = $symfony->getEntryPoint(true);
				if($entryPoints){
					foreach($entryPoints as $entryPoint){
						$aliases[] = 'http://' . $host . ':' . $symfony->getPort() . $entryPoint;
					}
				}
				else{
					$aliases[] = 'http://' . $host . ':' . $symfony->getPort();
				}
			}
		}
		
		return $aliases;
	}
	
	/**
	 * Return the php path used
	 *
	 * @param Symfony|null $symfony
	 *
	 * @return string
	 *
	 * @author Daniele Sabre 10/set/2018
	 */
	public function getPhpExecutable(Symfony $symfony = null){
		$phpExecutable = $this->container->getParameter('php_executable');
		
		if($symfony !== null && $symfony->getPhpExecutable() !== null){
			return $symfony->getPhpExecutable();
		}
		
		return $phpExecutable;
	}
	
	/**
	 * @param Symfony $symfony
	 *
	 * @return bool
	 *
	 * @author Daniele Sabre 10/set/2018
	 */
	public function recheckSymfony(Symfony $symfony){
		try{
			$phpExecutable = $this->getPhpExecutable($symfony);
			
			// set commands
			$commands = [
				sprintf('%s bin/console', $phpExecutable),
				sprintf('%s app/console', $phpExecutable),
			];
			
			// loop over commands to check the version
			$output = null;
			foreach($commands as $command){
				$process = new Process($command, $symfony->getPath());
				$process->run();
				
				if($process->getExitCode() == 0){
					$output = $process->getOutput();
					
					break;
				}
			}
			
			// if output is null, all commands have failed
			if($output === null){
				throw new \Exception();
			}
			
			$version = trim(explode(PHP_EOL, $output)[0]);
			
			$matches = [];
			preg_match('/\d+.\d+.\d+/', $version, $matches);
			
			$version = trim($matches[0]);
			
			$symfony->setVersion($version)->setStatus(Symfony::STATUS_STOPPED);
			
			$em = $this->container->get('doctrine')->getManager();
			$em->persist($symfony);
			$em->flush();
		}
		catch(\Exception $exc){
			$msg = $exc->getMessage();
			$this->container->get('logger')->error($msg);
			
			return false;
		}
		
		return true;
	}
}
