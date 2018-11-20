<?php

namespace App\Controller;

use App\Utils\Services\SymfoniesService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/action")
 */
class ActionController extends Controller{
	
//	/**
//	 * @Route("/prune")
//	 *
//	 * @param Request $request
//	 *
//	 * @return \Symfony\Component\HttpFoundation\RedirectResponse
//	 */
//	public function defaultAction(Request $request){
//		$action = $request->getRequestUri();
//		$action = str_replace('/action/', '', $action);
//		$action = ucwords($action, "-");
//		$action = str_replace('-', '', $action);
//		$action = lcfirst($action);
//
//		$this->get(SymfoniesService::class)->{$action}();
//
//		return $this->redirectToRoute('app_default_index', ['forced' => 1]);
//	}
}
