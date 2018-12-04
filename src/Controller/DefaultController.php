<?php

namespace App\Controller;

use App\Utils\Services\UtilService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller{
	
	/**
	 * @Route("/raw-config")
	 */
	public function rawConfigAction(){
		$configPath = $this->get(UtilService::class)->getConfigPath();
		
		$content = file_get_contents($configPath);
		$content = json_decode($content, true);
		
		return new JsonResponse($content);
	}
	
	/**
	 * @Route("/")
	 * @Route("{route}")
	 */
	public function index($route = null){
		return $this->render('default/index.html.twig');
	}
}
