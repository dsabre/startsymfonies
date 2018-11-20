<?php
/**
 * Created by PhpStorm.
 * User: dsabre
 * Date: 28/09/17
 * Time: 10.01
 */

namespace AppBundle\Utils\Services;

use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Process\Process;
use Symfony\Component\Yaml\Yaml;

class UtilService{
	
	use ContainerAwareTrait;
	
	const URL_VERSION = 'https://raw.githubusercontent.com/raniel86/startsymfonies2/master/.version_number';
	const COOKIE_VERSION = 'remote_version';
	const URL_GITHUB = 'https://github.com/raniel86/startsymfonies2';
	
	const FILEPATH_USEFUL_LINKS = '../src/AppBundle/Resources/config/useful_links.yml';
	
	/**
	 * UtilService constructor.
	 */
	public function __construct(ContainerInterface $container){
		$this->setContainer($container);
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
	 * @return bool
	 *
	 * @author Daniele Sabre 20/nov/2018
	 */
	public function isCheckVersion(){
		return false; // disabling check
		return (bool)$this->container->getParameter('check_version');
	}
	
	/**
	 * Return the current version number of the app
	 *
	 * @param Response $response
	 * @param bool     $forceGet
	 *
	 * @return string|null
	 */
	public function getCurrentVersionNumber(Response $response, $forceGet = false){
		// check if the version checker is active
		if(!$this->isCheckVersion()){
			return null;
		}
		
		// get current version from cookie
		$curVersion = $this->container->get('request_stack')->getMasterRequest()->cookies->get(self::COOKIE_VERSION);
		
		if(!$curVersion || $forceGet){
			// get current version from remote github url
			$curVersion = file_get_contents(self::URL_VERSION . '?' . uniqid());
			$expire = strtotime('now + 12 hours');
			$response->headers->setCookie(new Cookie(self::COOKIE_VERSION, $curVersion, $expire));
		}
		
		return trim($curVersion);
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
		$file = $this->container->getParameter('hosts_file');
		
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
		
		return $hosts;
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
		$otherPhpExecutables = $this->container->getParameter('other_php_executables');
		$otherPhpExecutables = !empty($otherPhpExecutables) ? explode(',', $otherPhpExecutables) : [];
		
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
	 * @return string|null
	 */
	public function getGitExecutable(){
		return $this->container->getParameter('git_executable');
	}
	
	/**
	 * Update startsymfonies2 if git executable is configured
	 *
	 * @param Response $response
	 *
	 * @return $this
	 */
	public function updateStartsymfonies2(Response $response){
		$gitExecutable = $this->getGitExecutable();
		
		// stop if git executable is not defined
		if($gitExecutable === null){
			return $this;
		}
		
		$cwd = $this->container->get('kernel')->getRootDir() . '/..';
		
		$phpExecutable = $this->container->get(SymfoniesService::class)->getPhpExecutable();
		
		$commands = [
			sprintf('%s pull', $gitExecutable),
			sprintf('%s bin/console -q cache:clear &', $phpExecutable),
			sprintf('%s bin/console -q assets:install --symlink &', $phpExecutable)
		];
		
		foreach($commands as $command){
			$this->processRun(true, true, $command, $cwd);
		}
		
		$this->getCurrentVersionNumber($response, true);
		
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
	 * @param array|null $options
	 *
	 * @return Process
	 *
	 * @author Daniele Sabre 17/set/2018
	 */
	public function processRun($mustRun = false, $disableOutput = true, $commandline, $cwd = null, array $env = null, $input = null, $timeout = 60, array $options = null){
		$logger = $this->container->get('logger');
		
		$process = new Process($commandline, $cwd, $env, $input, $timeout, $options);
		
		// log command info
		$msg = sprintf('Executed command %s in %s', $commandline, $cwd);
		$logger->debug($msg);
		
		if($disableOutput){
			$process->disableOutput();
		}
		
		if($mustRun){
			$process->mustRun();
		}
		else{
			$process->run();
		}
		
		$msg = sprintf('Command exit code: %d', $process->getExitCode());
		$logger->debug($msg);
		
		return $process;
	}
	
	/**
	 * @return string
	 *
	 * @author Daniele Sabre 29/ott/2018
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
	
}