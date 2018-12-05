<?php
/**
 * Created by PhpStorm.
 * User: dsabre
 * Date: 28/09/17
 * Time: 10.01
 */

namespace App\Utils\Services;

use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Process\Process;
use Symfony\Component\Yaml\Yaml;

class UtilService{
	
	use ContainerAwareTrait;
	
	const COOKIE_VERSION = 'remote_version';
	const URL_GITHUB = 'https://github.com/raniel86/startsymfonies2';
	
	const FILEPATH_USEFUL_LINKS = '../src/AppBundle/Resources/config/useful_links.yml';
	
	/**
	 * @var LoggerInterface
	 */
	private $logger;
	
	/**
	 * UtilService constructor.
	 *
	 * @param ContainerInterface $container
	 * @param LoggerInterface    $logger
	 */
	public function __construct(ContainerInterface $container, LoggerInterface $logger){
		$this->setContainer($container);
		$this->logger = $logger;
	}
	
	/**
	 * Return the local version number of the app
	 *
	 * @return string
	 */
	public function getLocalVersionNumber(){
		$version = file_get_contents($this->container->get('kernel')->getRootDir() . '/../.version_number');
		
		return trim($version);
	}
	
	/**
	 * @return string
	 */
	public function getUrlGitHub(){
		return self::URL_GITHUB;
	}
	
	/**
	 * Return all hosts in hosts configuration
	 *
	 * @return array|bool|string
	 */
	public function getHosts(){
		$file = $this->getConfig('hostsFile');
		
		$hosts = file_get_contents($file);
		$hosts = explode(PHP_EOL, $hosts);
		$hosts = array_diff($hosts, ['']);
		
		foreach($hosts as $k => $v){
			$v = trim($v);
			
			if(preg_match('/^#/', $v)){
				unset($hosts[$k]);
				continue;
			}
			
			$hosts[$k] = $v;
		}
		
		return array_slice($hosts, 2);
	}
	
	/**
	 * Return all php executables setted
	 *
	 * @return array
	 *
	 * @author Daniele Sabre 14/set/2018
	 */
	public function getPhpExecutables(){
		$phpExecutable = $this->container->get(SymfoniesService::class)->getPhpExecutable();
		
		// get other php executables
		$otherPhpExecutables = $this->getConfig('otherPhpExecutables');
		
		return array_merge([$phpExecutable], $otherPhpExecutables);
	}
	
	/**
	 * Return the theme to use for the navbar
	 *
	 * @return array
	 */
	public function getTheme(){
		$themes = [
			'blue'    => [
				'brightness' => 'dark',
				'color'      => 'primary',
				'body'       => null
			],
			'red'     => [
				'brightness' => 'dark',
				'color'      => 'danger',
				'body'       => null
			],
			'yellow'  => [
				'brightness' => 'light',
				'color'      => 'warning',
				'body'       => null
			],
			'cyan'    => [
				'brightness' => 'dark',
				'color'      => 'info',
				'body'       => null
			],
			'white'   => [
				'brightness' => 'light',
				'color'      => 'default',
				'body'       => null
			],
			'black'   => [
				'brightness' => 'dark',
				'color'      => 'dark',
				'body'       => null
			],
			'green'   => [
				'brightness' => 'dark',
				'color'      => 'success',
				'body'       => null
			],
			'gray'    => [
				'brightness' => 'dark',
				'color'      => 'secondary',
				'body'       => null
			],
			'symfony' => [
				'brightness' => 'light',
				'color'      => 'symfony',
				'body'       => null
			],
			'dark'    => [
				'brightness' => 'dark',
				'color'      => 'dark',
				'body'       => 'dark'
			]
		];
		
		$theme = $this->container->getParameter('theme');
		
		// check if the theme selected is random
		if(isset($themes[$theme])){
			return $themes[$theme];
		}
		else{
			shuffle($themes);
			
			return reset($themes);
		}
	}
	
	/**
	 * Return if a pc is a mac
	 *
	 * @param Request|null $request
	 *
	 * @return bool
	 */
	public function isMac(Request $request = null){
		if($request === null){
			$request = $this->container->get('request_stack')->getMasterRequest();
		}
		
		$userAgent = $request->server->get('HTTP_USER_AGENT');
		
		return (bool)strstr($userAgent, 'Macintosh');
	}
	
	/**
	 * Update startsymfonies if git executable is configured
	 *
	 * @return $this
	 */
	public function updateStartsymfonies(){
		$gitExecutable = $this->getConfig('gitExecutable');
		
		// stop if git executable is not defined
		if($gitExecutable === null){
			return $this;
		}
		
		$cwd = $this->container->get('kernel')->getRootDir() . '/..';
		$yarnExecutable = $this->getConfig('yarnExecutable');
		$phpExecutable = trim(file_get_contents($cwd . '/startsymfonies_php_executable.txt'));
		
		$commands = [
			sprintf('%s pull', $gitExecutable),
			sprintf('%s bin/console -q cache:clear &', $phpExecutable),
			sprintf('%s dev', $yarnExecutable)
		];
		
		foreach($commands as $command){
			$this->processRun(true, true, $command, $cwd);
		}
		
		// execute extra commands if file exists
		$extraCommandsPath = $cwd . '/startsymfonies_update_commands.txt';
		
		if(file_exists($extraCommandsPath)){
			$extraCommands = file_get_contents($extraCommandsPath);
			$extraCommands = explode(PHP_EOL, $extraCommands);
			
			foreach($extraCommands as $command){
				$this->processRun(true, true, $command, $cwd);
			}
		}
		
		return $this;
	}
	
	/**
	 * Return all useful link configured from a yaml file
	 *
	 * @return array
	 */
	public function getUsefulLinks(){
		$file = new File(self::FILEPATH_USEFUL_LINKS);
		
		// check for file content
		if($file->getSize() == 0){
			return null;
		}
		
		$fileContent = $file->openFile()->fread($file->getSize());
		
		return Yaml::parse($fileContent);
	}
	
	/**
	 * @param bool       $mustRun
	 * @param bool       $disableOutput
	 * @param string     $commandline
	 * @param null       $cwd
	 * @param array|null $env
	 * @param null       $input
	 * @param int        $timeout
	 *
	 * @param bool       $async
	 *
	 * @return Process
	 *
	 * @author Daniele Sabre 17/set/2018
	 */
	public function processRun($mustRun = false, $disableOutput = true, $commandline, $cwd = null, array $env = null, $input = null, $timeout = 60, $async = false){
		$process = new Process($commandline, $cwd, $env, $input, $timeout);
		
		// log command info
		$msg = sprintf('Executed command %s in %s', $commandline, $cwd);
		$this->logger->debug($msg);
		
		if($disableOutput){
			$process->disableOutput();
		}
		
		if(!$async){
			if($mustRun){
				$process->mustRun();
			}
			else{
				$process->run();
			}
			
			$msg = sprintf('Command exit code: %d', $process->getExitCode());
			$this->logger->debug($msg);
		}
		else{
			$process->start();
		}
		
		return $process;
	}
	
	/**
	 * @return string
	 */
	public function getUserRunning(){
		$ret = '';
		$process = new Process('whoami');
		
		try{
			$process->run();
			
			$ret = $process->getOutput();
			$ret = trim($ret);
		}
		catch(\Exception $exc){
			$this->container->get('logger')->error($exc);
		}
		
		return $ret;
	}
	
	/**
	 * @return Dotenv
	 */
	public function loadEnv(){
		$dotenv = new Dotenv();
		$dotenv->load($this->container->get('kernel')->getRootDir() . '/../.env');
		
		return $dotenv;
	}
	
	/**
	 * @return mixed
	 */
	public function getStartSymfoniesName(){
		return array_reverse(explode('/', $this->container->get('kernel')->getRootDir()))[1];
	}
	
	/**
	 * @return string
	 *
	 * @author Daniele Sabre 20/nov/2018
	 */
	public function getConfigPath(){
		return $this->container->get('kernel')->getRootDir() . '/../startsymfonies.config.json';
	}
	
	/**
	 * @param null|string $property
	 *
	 * @return mixed
	 *
	 * @author Daniele Sabre 19/nov/2018
	 */
	public function getConfig($property = null){
		$configPath = $this->getConfigPath();
		
		if(!file_exists($configPath)){
			return [];
		}
		
		$config = file_get_contents($configPath);
		$config = json_decode($config, true);
		
		return !$property ? $config : $config[$property];
	}
	
}