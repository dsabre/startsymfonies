<?php

namespace App\Controller;

use App\Utils\Services\SymfoniesService;
use App\Utils\Services\UtilService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/action")
 */
class ActionController extends Controller{
	
	/**
	 * @Route("/save-configuration", methods={"POST"})
	 * @param Request $request
	 *
	 * @return \Symfony\Component\HttpFoundation\RedirectResponse
	 */
	public function saveConfigurationAction(Request $request){
		$configuration = $request->get('configuration');
		
		$configuration['checkUpdates'] = isset($configuration['checkUpdates']) && $configuration['checkUpdates'] === 'on';
		
		$newConfig = json_encode($configuration, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
		$configPath = $this->get(UtilService::class)->getConfigPath();
		
		$fileSystem = new Filesystem();
		$fileSystem->dumpFile($configPath, $newConfig);
		
		return $this->redirectToRoute('settings', ['forced' => 1]);
	}
	
	/**
	 * @Route("/update-startsymfonies")
	 */
	public function updateStartsymfoniesAction(){
		$this->get(UtilService::class)->updateStartsymfonies();
		
		return $this->redirectToRoute('settings', ['forced' => 1]);
	}
	
	/**
	 * @Route("/set-theme/{theme}")
	 *
	 * @param string $theme
	 *
	 * @return \Symfony\Component\HttpFoundation\RedirectResponse
	 */
	public function setTheme($theme){
		$configuration = $this->get(UtilService::class)->getConfig();
		
		$configuration['theme'] = $theme;
		
		$newConfig = json_encode($configuration, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
		$configPath = $this->get(UtilService::class)->getConfigPath();
		
		$fileSystem = new Filesystem();
		$fileSystem->dumpFile($configPath, $newConfig);
		
		return $this->redirectToRoute('settings', ['forced' => 1]);
	}
	
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
