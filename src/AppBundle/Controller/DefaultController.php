<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Symfony;
use AppBundle\Utils\Services\SymfoniesService;
use AppBundle\Utils\Services\UtilService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller{
	
	/**
	 * @Route("/")
	 */
	public function indexAction(){
		$response = $this->render('AppBundle:Default:index.html.twig', [
			'symfonies'   => $this->getDoctrine()->getRepository('AppBundle:Symfony')->getAll(),
			'nextLocalIp' => $this->get(SymfoniesService::class)->getNextLocalIp()
		]);
		
		$utilService = $this->get(UtilService::class);
		$currentVer = $utilService->getCurrentVersionNumber($response);
		$localVer = $utilService->getLocalVersionNumber();
		
		// if local version is different from the current remote version, show
		// an info message
		if($currentVer !== $localVer){
			$msg = sprintf('An update is available, download or clone it from <a href="%s" target="_blank">GitHub</a>', UtilService::URL_GITHUB);
			$this->addFlash('info', $msg);
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
			$this->get(SymfoniesService::class)->stop($symfony);
			$this->get(SymfoniesService::class)->start($symfony);
			
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
		$this->get(SymfoniesService::class)->stopAndSave($symfony);
		
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
	 * @Route("/start-all", name="start-all")
	 */
	public function startAllAction(){
		$this->get(SymfoniesService::class)->startAll();
		
		$this->addFlash('success', 'Symfonies started');
		
		return $this->redirectToRoute('app_default_index');
	}
	
	/**
	 * @Route("/stop-all", name="stop-all")
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
}
