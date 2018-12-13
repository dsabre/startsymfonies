<?php

namespace App\Utils\Services;

use App\Entity\Symfony;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Process\Exception\ProcessFailedException;

class SymfoniesService{
	
	use ContainerAwareTrait;
	
	const SCAN_PROCESS_TIMEOUT = 300;
	const VERSION_LATEST = 'latest';
	const START_SYMFONIES_NAME = 'startsymfonies3';
	
	/**
	 * @var LoggerInterface
	 */
	private $logger;
	
	/**
	 * SymfoniesService constructor.
	 *
	 * @param ContainerInterface $container
	 * @param LoggerInterface    $logger
	 */
	public function __construct(ContainerInterface $container, LoggerInterface $logger){
		$this->setContainer($container);
		$this->logger = $logger;
		
		$this->container->get(UtilService::class)->loadEnv();
	}
	
	/**
	 * Scan the directories and save all symfonies found on db
	 *
	 * @param null|string $directory Specify the single dir to scan
	 *
	 * @return $this
	 */
	public function scan($directory = null){
		set_time_limit(0);
		
		$doctrine = $this->container->get('doctrine');
		$em = $doctrine->getManager();
		$repo = $doctrine->getRepository(Symfony::class);
		
		// get all symfonies
		$list = $this->getSymfonies($directory ? [$directory] : null);
		
		$startSymfoniesName = $this->container->get(UtilService::class)->getStartSymfoniesName();
		
		// remove startsymfonies2 from the list
		$list = array_filter($list, function($v, $k) use ($startSymfoniesName){
			return !strstr($v, $startSymfoniesName);
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
		}
		
		$em->flush();
		
		return $this;
	}
	
	/**
	 * Get all symfonies found
	 *
	 * @param array|null $directories
	 *
	 * @return array
	 */
	private function getSymfonies(array $directories = null){
		$symfonies = [];
		$directories = $directories === null ? $this->getDirectories() : $directories;
		
		foreach($directories as $directory){
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
		$phpExecutables = $this->container->get(UtilService::class)->getPhpExecutables();
		$phpExecutables = implode(',,', $phpExecutables);
		
		$command = sprintf('%s/../commands/get_symfonies.py %s %s', __DIR__, $directory, $phpExecutables);
		
		$process = $this->container->get(UtilService::class)->processRun(false, false, $command, null, null, null, self::SCAN_PROCESS_TIMEOUT);
		
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
	public function getDirectories(){
		return $this->container->get(UtilService::class)->getConfig('directoriesToScan');
	}
	
	/**
	 * Get an array with all others php
	 *
	 * @return array
	 */
	public function getOtherPhps(){
		return $this->container->get(UtilService::class)->getConfig('otherPhpExecutables');
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
	 * @return SymfoniesService
	 */
	public function start(Symfony $symfony){
		$dirConsole = $symfony->getVersion(true) === 2 ? 'app' : 'bin';
		$phpExecutable = $this->getPhpExecutable($symfony);
		
		$command = sprintf('%s %s/console -q server:start %s:%d > /dev/null 2>&1', $phpExecutable, $dirConsole, $symfony->getIp(), $symfony->getPort());
		
		$this->container->get(UtilService::class)->processRun(true, true, $command, $symfony->getPath(), null, null, 60, true);
		
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
	 * @param Symfony       $symfony
	 *
	 * @param               $ip
	 * @param               $port
	 * @param               $entry
	 *
	 * @return SymfoniesService
	 */
	public function startAndSave(Symfony $symfony, $ip, $port, $entry){
		$symfony->setIp($ip);
		$symfony->setPort($port);
		$symfony->setEntryPoint($entry);
		
		// check for a symfony already working on the same location
		//		if($this->container->get('doctrine')->getRepository(Symfony::class)->findOneBy(['ip' => $symfony->getIp(), 'port' => $symfony->getPort()])){
		//			throw new \Exception('There is already a symfony in the same location');
		//		}
		
		return $this->start($symfony);
		
		//		$em = $this->container->get('doctrine')->getManager();
		//		$em->persist($symfony);
		//		$em->flush();
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
		$phpExecutable = $this->getPhpExecutable($symfony);
		
		$commands = [
			// stop for symfony 2.*
			sprintf('%s %s/console -q server:stop %s:%d &', $phpExecutable, $dirConsole, $symfony->getIp(), $symfony->getPort()),
			
			// stop for symfony > 3.3.*
			sprintf('%s %s/console -q server:stop &', $phpExecutable, $dirConsole)
		];
		
		foreach($commands as $command){
			$this->container->get(UtilService::class)->processRun(false, true, $command, $symfony->getPath());
			
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
	 * @param bool    $stop
	 *
	 * @return $this
	 */
	public function delete(Symfony $symfony, $stop = true){
		if($stop){
			$this->stop($symfony);
		}
		
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
		
		$phpExecutable = $this->getPhpExecutable($symfony);
		$composer = $this->container->get(UtilService::class)->getConfig('composerExecutable');
		
		$command = sprintf('%s %s %s', $phpExecutable, $composer, $activity);
		
		$this->container->get(UtilService::class)->processRun(true, true, $command, $symfony->getPath());
		
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
		$phpExecutable = $this->getPhpExecutable($symfony);
		$composer = $this->container->getParameter('composer_executable');
		
		$command = sprintf('%s %s show', $phpExecutable, $composer);
		
		$process = $this->container->get(UtilService::class)->processRun(true, false, $command, $symfony->getPath());
		
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
		$phpExecutable = $this->getPhpExecutable($symfony);
		
		$command = sprintf('%s %s/console', $phpExecutable, $dirConsole);
		
		$process = $this->container->get(UtilService::class)->processRun(true, false, $command, $symfony->getPath());
		
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
		$phpExecutable = $this->getPhpExecutable($symfony);
		
		$commands = [
			sprintf('%s %s/console -q cache:clear &', $phpExecutable, $dirConsole),
			sprintf('%s %s/console -q assets:install --symlink &', $phpExecutable, $dirConsole)
		];
		
		foreach($commands as $command){
			$this->container->get(UtilService::class)->processRun(true, true, $command, $symfony->getPath());
		}
		
		return $this;
	}
	
	/**
	 * Start all symfonies with an ip and a port
	 *
	 * @param bool $byStatus
	 *
	 * @return $this
	 */
	public function startAll($byStatus = false){
		$symfonies = $this->container->get('doctrine')->getRepository(Symfony::class)->findAll();
		
		/** @var Symfony $symfony */
		foreach($symfonies as $k => $symfony){
			if($symfony->getIp() === null || $symfony->getPort() === null){
				continue;
			}
			
			if($byStatus && $symfony->getStatus() !== Symfony::STATUS_ACTIVE){
				continue;
			}
			
			$this->start($symfony);
		}
		
		return $this;
	}
	
	/**
	 * System prune
	 *
	 * @param null|string $directory
	 *
	 * @return $this
	 *
	 * @author Daniele Sabre 26/ott/2018
	 */
	public function prune($directory = null){
		$doctrine = $this->container->get('doctrine');
		$em = $doctrine->getManager();
		$symfonies = $doctrine->getRepository(Symfony::class)->findBy(['ip' => null]);
		
		$symfonies = array_filter($symfonies, function(Symfony $symfony) use ($directory){
			$directory = str_replace('/', '\\/', $directory);
			
			return preg_match('/^' . $directory . '/', $symfony->getPath());
		});
		
		/** @var Symfony $symfony */
		foreach($symfonies as $symfony){
			$em->remove($symfony);
		}
		
		$em->flush();
		
		return $this;
	}
	
	/**
	 * Stop all symfonies with an ip and a port
	 *
	 * @return $this
	 */
	public function stopAll(){
		$symfonies = $this->container->get('doctrine')->getRepository(Symfony::class)->findAll();
		
		/** @var Symfony $symfony */
		foreach($symfonies as $k => $symfony){
			if($symfony->getIp() === null || $symfony->getPort() === null){
				continue;
			}
			
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
	 * @return null|array
	 */
	private function getAliases(Symfony $symfony){
		$aliases = [];
		
		$entryPoints = $symfony->getEntryPoint(true);
		
		if($symfony->getIp() == '127.0.0.1'){
			$host = 'localhost';
			
			if($entryPoints){
				foreach($entryPoints as $entryPoint){
					$aliases[] = 'http://' . $host . ':' . $symfony->getPort() . $entryPoint;
				}
			}
			else{
				$aliases[] = 'http://' . $host . ':' . $symfony->getPort();
			}
		}
		
		$hosts = $this->container->get(UtilService::class)->getHosts();
		
		foreach($hosts as $host){
			if(preg_match('/^' . $symfony->getIp() . '\t/', $host)){
				$host = str_replace($symfony->getIp(), '', $host);
				$host = trim($host);
				
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
		$phpExecutable = $this->container->get(UtilService::class)->getConfig('phpExecutable');
		
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
				$process = $this->container->get(UtilService::class)->processRun(false, false, $command, $symfony->getPath());
				
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
			
			$symfony->setVersion($version);
			
			if($symfony->getStatus() !== Symfony::STATUS_ACTIVE){
				$symfony->setStatus(Symfony::STATUS_STOPPED);
			}
			
			$em = $this->container->get('doctrine')->getManager();
			$em->persist($symfony);
			$em->flush();
		}
		catch(\Exception $exc){
			$msg = $exc->getMessage();
			$this->logger->error($msg);
			
			return false;
		}
		
		return true;
	}
	
	//	/**
	//	 * @param bool $createView
	//	 *
	//	 * @return \Symfony\Component\Form\FormInterface|\Symfony\Component\Form\FormView
	//	 *
	//	 * @author Daniele Sabre 17/set/2018
	//	 */
	//	public function getNewSymfonyForm($createView = true){
	//		$form = $this->container->get('form.factory')->create(NewSymfonyType::class, null, [
	//			'action'         => $this->container->get('router')->generate('app_default_newsymfony'),
	//			'phpExecutables' => $this->container->get(UtilService::class)->getPhpExecutables()
	//		]);
	//
	//		return $createView ? $form->createView() : $form;
	//	}
	
	/**
	 * @param string $path
	 * @param string $phpExecutable
	 *
	 * @return Symfony
	 * @throws \Exception
	 *
	 * @author Daniele Sabre 19/nov/2018
	 */
	public function newSymfonyFromPath($path, $phpExecutable){
		set_time_limit(0);
		
		// create the symfony object
		$symfony = new Symfony();
		$symfony->setPath($path);
		$symfony->setPhpExecutable($phpExecutable);
		
		if(!$this->recheckSymfony($symfony)){
			throw new \Exception();
		}
		
		return $symfony;
	}
	
	/**
	 * @param string $path
	 * @param string $name
	 * @param string $version
	 * @param string $phpExecutable
	 *
	 * @return SymfoniesService
	 *
	 * @throws \Exception
	 *
	 * @author Daniele Sabre 17/set/2018
	 */
	public function newSymfony($path, $name, $version, $phpExecutable){
		set_time_limit(0);
		
		$symfonyExecutable = $this->container->getParameter('symfony_executable');
		$composerExecutable = $this->container->getParameter('composer_executable');
		$utilService = $this->container->get(UtilService::class);
		
		$path = rtrim($path, '/');
		
		// set command
		if($version === self::VERSION_LATEST || (bool)preg_match('/^4\./', $version)){
			$commands = [
				[
					'command' => sprintf('%s %s -q create-project symfony/skeleton %s', $phpExecutable, $composerExecutable, $name),
					'path'    => $path
				],
				[
					'command' => sprintf('%s %s -q require server --dev', $phpExecutable, $composerExecutable),
					'path'    => $path . '/' . $name
				]
			];
			
			$version = '4.0.0';
		}
		else{
			$commands = [
				[
					'command' => sprintf('%s -q new %s %s', $symfonyExecutable, $name, $version),
					'path'    => $path
				]
			];
		}
		
		// launch symfony creation
		foreach($commands as $infoCommand){
			$command = trim($infoCommand['command']);
			$cwd = trim($infoCommand['path']);
			
			$utilService->processRun(true, true, $command, $cwd);
		}
		
		// create the symfony object
		$symfony = new Symfony();
		$symfony->setPath($path . '/' . $name);
		$symfony->setVersion($version);
		$symfony->setPhpExecutable($phpExecutable);
		
		if(!$this->recheckSymfony($symfony)){
			throw new \Exception();
		}
		
		return $this;
	}
	
	/**
	 * @param Symfony $symfony
	 *
	 * @return array
	 *
	 * @author Daniele Sabre 07/nov/2018
	 */
	public function toArray(Symfony $symfony){
		$symfony->setPhpExecutable($this->getPhpExecutable($symfony));
		
		$symfony->ok = $symfony->isOk();
		$symfony->links = $this->getLinks($symfony);
		$symfony->gitBranches = $this->getSymfonyGitBranches($symfony);
		$symfony->currentGitBranch = $this->getSymfonyCurrentGitBranch($symfony);
		$symfony->faviconUrl = $this->getFaviconUrl($symfony);
		
		return $symfony->toArray();
	}
	
	/**
	 * @param Symfony $symfony
	 *
	 * @return string
	 *
	 * @author Daniele Sabre 10/dic/2018
	 */
	public function getFaviconUrl(Symfony $symfony){
		$url = sprintf('http://%s:%d/favicon.ico?%d', $symfony->getIp(), $symfony->getPort(), time());
		$exists = false;
		
		try{
			$exists = (bool)file_get_contents($url);
		}
		catch(\Exception $exc){
		}
		
		return $exists ? $url : '/favicon.ico';
	}
	
	/**
	 * @param Symfony $symfony
	 *
	 * @return string
	 *
	 * @author Daniele Sabre 06/dic/2018
	 */
	public function getSymfonyCurrentGitBranch(Symfony $symfony){
		$utilService = $this->container->get(UtilService::class);
		$git = $utilService->getConfig('gitExecutable');
		
		$command = sprintf("%s branch | grep \* | cut -d ' ' -f2", $git);
		$process = $utilService->processRun(true, false, $command, $symfony->getPath());
		$branch = $process->getOutput();
		
		return trim($branch);
	}
	
	/**
	 * @param Symfony $symfony
	 *
	 * @return array|string
	 *
	 * @author Daniele Sabre 26/nov/2018
	 */
	public function getSymfonyGitBranches(Symfony $symfony){
		$utilService = $this->container->get(UtilService::class);
		
		$git = $utilService->getConfig('gitExecutable');
		
		if(!$git){
			return [];
		}
		
		$command = sprintf("%s branch --list |sed 's/*//g' |sed 's/ //g'", $git);
		$process = $utilService->processRun(true, false, $command, $symfony->getPath());
		$branches = $process->getOutput();
		$branches = explode(PHP_EOL, $branches);
		
		foreach($branches as $k => $branch){
			if(empty($branch)){
				unset($branches[$k]);
			}
		}
		
		return $branches;
	}
	
	/**
	 * @param Symfony $symfony
	 * @param string  $gitBranch
	 *
	 * @return Symfony
	 *
	 * @author Daniele Sabre 06/dic/2018
	 */
	public function gitPullSymfony(Symfony $symfony, $gitBranch = 'master'){
		set_time_limit(0);
		
		$utilService = $this->container->get(UtilService::class);
		
		$gitExecutable = $utilService->getConfig('gitExecutable');
		$composerExecutable = $utilService->getConfig('composerExecutable');
		$phpExecutable = $this->getPhpExecutable($symfony);
		$cwd = $symfony->getPath();
		$dirConsole = $symfony->getVersion(true) === 2 ? 'app' : 'bin';
		
		$commands = [
			sprintf('%s checkout -q %s', $gitExecutable, $gitBranch),
			sprintf('%s pull -q', $gitExecutable),
			sprintf('%s %s install', $phpExecutable, $composerExecutable),
			sprintf('%s bin/console -q cache:clear &', $phpExecutable),
			sprintf('%s %s/console -q assets:install --symlink &', $phpExecutable, $dirConsole)
		];
		
		foreach($commands as $command){
			$utilService->processRun(true, true, $command, $cwd);
		}
		
		$this->recheckSymfony($symfony);
		
		return $symfony;
	}
	
}
