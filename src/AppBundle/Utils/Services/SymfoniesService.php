<?php

namespace AppBundle\Utils\Services;

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
		
		// insert symfonies in db if not exist
		foreach($this->getSymfonies() as $info){
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
		$symofnies = [];
		
		foreach($this->getDirectories() as $directory){
			$symofnies = array_merge($symofnies, $this->getSymfoniesFromDir($directory));
		}
		
		return $symofnies;
	}
	
	/**
	 * Get all symfonies for a directory
	 *
	 * @param string $directory
	 *
	 * @return array
	 */
	private function getSymfoniesFromDir($directory){
		$command = sprintf('%s/../commands/get_symfonies.py %s', __DIR__, $directory);
		
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
		
		$command = sprintf('%s %s/console -q server:start %s:%d &', $this->container->getParameter('php_executable'), $dirConsole, $symfony->getIp(), $symfony->getPort());
		
		$process = new Process($command, $symfony->getPath());
		$process->disableOutput();
		$process->mustRun();
		
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
		if($this->container->get('doctrine')->getRepository(Symfony::class)->findOneBy(['ip' => $symfony->getIp(), 'port' => $symfony->getPort()])){
			throw new \Exception('There is already a symfony in the same location');
		}
		
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
		
		$commands = [
			// stop for symfony 2.*
			sprintf('%s %s/console -q server:stop %s:%d &', $this->container->getParameter('php_executable'), $dirConsole, $symfony->getIp(), $symfony->getPort()),
			
			// stop for symfony > 3.3.*
			sprintf('%s %s/console -q server:stop &', $this->container->getParameter('php_executable'), $dirConsole)
		];
		
		foreach($commands as $command){
			$process = new Process($command, $symfony->getPath());
			$process->disableOutput();
			$process->run();
		}
		
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
		$this->stop($symfony);
		
		$symfony->setIp(null);
		$symfony->setPort(null);
		$symfony->setEntryPoint(null);
		
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
		
		return $process->getOutput();
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
		
		$command = sprintf('%s %s/console', $this->container->getParameter('php_executable'), $dirConsole);
		
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
		
		$commands = [
			sprintf('%s %s/console -q cache:clear &', $this->container->getParameter('php_executable'), $dirConsole),
			sprintf('%s %s/console -q assets:install --symlink &', $this->container->getParameter('php_executable'), $dirConsole)
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
			$this->stopAndSave($symfony);
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
	 *
	 * @return array
	 */
	public function getLinks(Symfony $symfony, $forceOne = false){
		if(!$symfony->getIp() || !$symfony->getPort()){
			return [];
		}
		
		$links = [
			'aliases' => $this->getAliases($symfony),
			'link'    => [
				'http://' . $symfony->getIp() . ':' . $symfony->getPort() . $symfony->getEntryPoint()
			]
		];
		
		// if required, this remove the null value (alias) and return the first
		// link in array
		if($forceOne){
			$links = array_diff($links, [null]);
			
			return reset($links);
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
				
				$aliases[] = 'http://' . $host . ':' . $symfony->getPort() . $symfony->getEntryPoint();
			}
		}
		
		return $aliases;
	}
}