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

class UtilService{
	
	use ContainerAwareTrait;
	
	/**
	 * UtilService constructor.
	 */
	public function __construct(ContainerInterface $container){
		$this->setContainer($container);
	}
	
	/**
	 * Return the current version number of the app
	 *
	 * @return bool|string
	 */
	public function getCurrentVersionNumber(){
		return file_get_contents($this->container->get('kernel')->getRootDir() . '/../.version_number');
	}
}