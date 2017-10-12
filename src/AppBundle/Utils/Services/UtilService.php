<?php
/**
 * Created by PhpStorm.
 * User: dsabre
 * Date: 28/09/17
 * Time: 10.01
 */

namespace AppBundle\Utils\Services;

use AppBundle\Entity\Symfony;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Process\Process;

class UtilService{
	
	use ContainerAwareTrait;
	
	const URL_VERSION = 'https://raw.githubusercontent.com/raniel86/startsymfonies2/master/.version_number';
	const COOKIE_VERSION = 'remote_version';
	const URL_GITHUB = 'https://github.com/raniel86/startsymfonies2';
	const DEFAULT_THEME = 'blue';
	
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
	 * Return the current version number of the app
	 *
	 * @param Response $response
	 *
	 * @return string
	 */
	public function getCurrentVersionNumber(Response $response, $forceGet = false){
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
	 * Return the theme to use for the navbar
	 *
	 * @return array
	 */
	public function getTheme(){
		$themes = [
			'red'    => [
				'brightness' => 'dark',
				'color'      => 'danger',
			],
			'yellow' => [
				'brightness' => 'light',
				'color'      => 'warning',
			],
			'cyan'   => [
				'brightness' => 'dark',
				'color'      => 'info',
			],
			'blue'   => [
				'brightness' => 'dark',
				'color'      => 'primary',
			],
			'white'  => [
				'brightness' => 'light',
				'color'      => 'default',
			],
			'black'  => [
				'brightness' => 'dark',
				'color'      => 'dark'
			],
			'green'  => [
				'brightness' => 'dark',
				'color'      => 'success'
			],
		];
		
		$theme = $this->container->getParameter('theme');
		
		return isset($themes[$theme]) ? $themes[$theme] : $themes[self::DEFAULT_THEME];
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
		$command = sprintf('%s pull', $gitExecutable);
		
		$process = new Process($command, $cwd);
		$process->disableOutput();
		$process->mustRun();
		
		$this->getCurrentVersionNumber($response, true);
		
		return $this;
	}
	
}