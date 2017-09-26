<?php

namespace AppBundle\Twig\Extension;

use AppBundle\Entity\Country;
use AppBundle\Entity\Language;
use SJ\Platform31Bundle\Security\User\WsUser;
use SJ\Platform31Bundle\Utils\Response\Catalog\ProductData;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\HttpFoundation\File\File;

class Utils extends \Twig_Extension{
	
	use ContainerAwareTrait;
	
	/**
	 * Utils constructor.
	 */
	public function __construct(Container $container){
		$this->setContainer($container);
	}
	
	public function getFunctions(){
		return [];
	}
	
	public function getFilters(){
		return [
			new \Twig_SimpleFilter('array_replace', array($this, 'arrayReplace')),
		];
	}
	
	/**
	 * Edit an array key with the passed value
	 *
	 * @param array      $arr
	 * @param int|string $key
	 * @param mixed      $val
	 *
	 * @return array
	 */
	public function arrayReplace(array $arr, $key, $val){
		$arr[$key] = $val;
		
		return $arr;
	}
}

