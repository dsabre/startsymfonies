<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller{
	
	/**
	 * @Route("/")
	 * @Route("{route}")
	 */
	public function index($route = null){
		return $this->render('default/index.html.twig');
	}
}
