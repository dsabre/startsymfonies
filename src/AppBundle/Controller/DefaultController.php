<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Symfony;
use AppBundle\Utils\Services\SymfoniesService;
use AppBundle\Utils\Services\UtilService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller{
	
	/**
	 * @param bool $updateAvailable
	 *
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	private function getIndexResponse($updateAvailable){
		$symfonies = $this->getDoctrine()->getRepository(Symfony::class)->getAll();
		$nextLocalIp = $this->get(SymfoniesService::class)->getNextLocalIp();
		$nextLocalPort = $this->get(SymfoniesService::class)->getNextLocalPort();
		
		return $this->render('AppBundle:Default:index.html.twig', [
			'symfonies'       => $symfonies,
			'nextLocalIp'     => $nextLocalIp,
			'nextLocalPort'   => $nextLocalPort,
			'updateAvailable' => $updateAvailable
		]);
	}
	
	/**
	 * @Route("/")
	 */
	public function indexAction(){
		$utilService = $this->get(UtilService::class);
		
		$response = $this->getIndexResponse(false);
		
		$currentVer = $utilService->getCurrentVersionNumber($response);
		$localVer = $utilService->getLocalVersionNumber();
		
		// if local version is different from the current remote version, show
		// an info message
		if(!is_null($currentVer) && $currentVer !== $localVer){
			// if autoupdate is available, perform the operation now
			if($this->getParameter('autoupdate')){
				$response = $this->redirectToRoute('update_startsymfonies2');
			}
			else{
				$response = $this->getIndexResponse(true);
			}
		}
		
		return $response;
	}
	
	/**
	 * @Route("/scan", name="scan")
	 */
	public function scanAction(){
		$this->get(SymfoniesService::class)->scan();
		
		$this->addFlash('success', 'Scan completed');
		
		return $this->redirectToRoute('app_default_index');
	}
	
	/**
	 * @Route("/start/{symfony}", name="start")
	 * @Method({"POST"})
	 */
	public function startAction(Symfony $symfony, Request $request){
		try{
			$ip = $request->get('ip');
			$port = $request->get('port');
			$entry = $request->get('entry');
			
			// generate a json for each entry inserted
			$entry = explode(PHP_EOL, $entry);
			foreach($entry as $k => $v){
				$entry[$k] = trim($v);
			}
			$entry = json_encode($entry);
			
			$this->get(SymfoniesService::class)->startAndSave($symfony, $ip, $port, $entry);
			
			$this->addFlash('success', 'Symfony started correctly');
		}
		catch(\Exception $exc){
			$msg = $exc->getMessage();
			$this->addFlash('error', $msg);
		}
		
		return $this->redirectToRoute('app_default_index');
	}
	
	/**
	 * @Route("/restart/{symfony}", name="restart")
	 */
	public function restartAction(Symfony $symfony){
		try{
			$this->get(SymfoniesService::class)->restart($symfony);
			
			$this->addFlash('success', 'Symfony restarted correctly');
		}
		catch(\Exception $exc){
			$msg = $exc->getMessage();
			$this->addFlash('error', $msg);
		}
		
		return $this->redirectToRoute('app_default_index');
	}
	
	/**
	 * @Route("/stop/{symfony}", name="stop")
	 */
	public function stopAction(Symfony $symfony){
		$this->get(SymfoniesService::class)->stop($symfony);
		
		$this->addFlash('success', 'Symfony stopped correctly');
		
		return $this->redirectToRoute('app_default_index');
	}
	
	/**
	 * @Route("/delete/{symfony}", name="delete")
	 */
	public function deleteAction(Symfony $symfony){
		$this->get(SymfoniesService::class)->delete($symfony);
		
		$this->addFlash('success', 'Symfony deleted correctly');
		
		return $this->redirectToRoute('app_default_index');
	}
	
	/**
	 * @Route("/delete-info/{symfony}", name="delete-info")
	 */
	public function deleteInfoAction(Symfony $symfony){
		$this->get(SymfoniesService::class)->stopAndSave($symfony);
		
		$this->addFlash('success', 'Symfony info removed correctly');
		
		return $this->redirectToRoute('app_default_index');
	}
	
	/**
	 * @Route("/delete/all", name="delete_all")
	 */
	public function deleteAllAction(Symfony $symfony){
		$this->get(SymfoniesService::class)->deleteAll();
		
		$this->addFlash('success', 'Symfonies deleted correctly');
		
		return $this->redirectToRoute('app_default_index');
	}
	
	/**
	 * @Route("/composer/{activity}/{symfony}", name="composer")
	 */
	public function composerAction($activity, Symfony $symfony){
		if($activity !== 'show'){
			$this->get(SymfoniesService::class)->composer($symfony, $activity);
			
			$this->addFlash('success', 'Composer ' . $activity . ' executed correctly');
			
			return $this->redirectToRoute('app_default_index');
		}
		else{
			$response = $this->get(SymfoniesService::class)->composerShow($symfony);
			return new JsonResponse($response);
		}
	}
	
	/**
	 * @Route("/cache-assets-reset/{symfony}", name="cache_assets_reset")
	 */
	public function cacheAssetsResetAction(Symfony $symfony){
		$this->get(SymfoniesService::class)->cacheAssetsReset($symfony);
		
		$this->addFlash('success', 'Cache and assets resetted correctly');
		
		return $this->redirectToRoute('app_default_index');
	}
	
	/**
	 * @Route("/start-all", name="start_all")
	 */
	public function startAllAction(){
		$this->get(SymfoniesService::class)->startAll();
		
		$this->addFlash('success', 'Symfonies started');
		
		return $this->redirectToRoute('app_default_index');
	}
	
	/**
	 * @Route("/stop-all", name="stop_all")
	 */
	public function stopAllAction(){
		$this->get(SymfoniesService::class)->stopAll();
		
		$this->addFlash('success', 'All symfonies stopped');
		
		return $this->redirectToRoute('app_default_index');
	}
	
	/**
	 * @Route("/star-control/{symfony}")
	 */
	public function starControlAction(Symfony $symfony){
		$symfony->setStarred(!$symfony->getStarred());
		
		$em = $this->getDoctrine()->getManager();
		$em->persist($symfony);
		$em->flush();
		
		return new JsonResponse('OK');
	}
	
	/**
	 * @Route("/recheck-version", name="recheck_version")
	 */
	public function recheckVersionAction(){
		$response = $this->redirectToRoute('app_default_index');
		
		$this->get(UtilService::class)->getCurrentVersionNumber($response, true);
		
		return $response;
	}
	
	/**
	 * @Route("/update-startsymfonies2", name="update_startsymfonies2")
	 */
	public function updateStartsymfonies2Action(){
		$response = $this->redirectToRoute('app_default_index');
		
		$this->get(UtilService::class)->updateStartsymfonies2($response);
		
		return $response;
	}
}
