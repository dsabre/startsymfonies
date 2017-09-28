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
use Symfony\Component\HttpFoundation\Response;

class UtilService{
	
	use ContainerAwareTrait;
	
	const URL_VERSION = 'https://raw.githubusercontent.com/raniel86/startsymfonies2/master/.version_number';
	const COOKIE_VERSION = 'version';
	const URL_GITHUB = 'https://github.com/raniel86/startsymfonies2';
	
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
	public function getCurrentVersionNumber(Response $response){
		// get current version from cookie
		$curVersion = $this->container->get('request_stack')->getMasterRequest()->cookies->get(self::COOKIE_VERSION);
		
		if(!$curVersion){
			// get current version from remote github url
			$curVersion = file_get_contents(self::URL_VERSION);
			$response->headers->setCookie(new Cookie(self::COOKIE_VERSION, $curVersion));
		}
		
		return trim($curVersion);
	}
}