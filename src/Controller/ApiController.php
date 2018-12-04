<?php

namespace App\Controller;

use App\Entity\Symfony;
use App\Utils\Services\SymfoniesService;
use App\Utils\Services\UtilService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api")
 */
class ApiController extends Controller{
	
	/**
	 * @Route("/get-symfonies")
	 * @Route("/get-symfonies/{symfony}")
	 *
	 * @param Symfony|null $symfony
	 *
	 * @return JsonResponse
	 */
	public function getSymfonies(Symfony $symfony = null){
		$symfoniesService = $this->get(SymfoniesService::class);
		
		if($symfony === null){
			$symfonies = $this->getDoctrine()->getRepository(Symfony::class)->getAll();
		}
		else{
			$symfonies = [$symfony];
		}
		
		foreach($symfonies as $k => $symfony){
			$symfonies[$k] = $symfoniesService->toArray($symfony);
		}
		
		return new JsonResponse($symfonies);
	}
	
	/**
	 * @Route("/scan")
	 * @param LoggerInterface $logger
	 *
	 * @return JsonResponse
	 */
	public function scan(LoggerInterface $logger){
		try{
			$this->get(SymfoniesService::class)->scan();
			
			return new JsonResponse();
		}
		catch(\Exception $exc){
			$logger->error($exc);
			
			return new JsonResponse($exc->getMessage(), 500);
		}
	}
	
	/**
	 * @Route("/prune")
	 * @param LoggerInterface $logger
	 *
	 * @return JsonResponse
	 */
	public function prune(LoggerInterface $logger){
		try{
			$this->get(SymfoniesService::class)->prune();
			
			return new JsonResponse();
		}
		catch(\Exception $exc){
			$logger->error($exc);
			
			return new JsonResponse($exc->getMessage(), 500);
		}
	}
	
	/**
	 * @Route("/get-system-info")
	 *
	 * @return JsonResponse
	 */
	public function getSystemInfo(){
		$utilService = $this->get(UtilService::class);
		
		$config = $utilService->getConfig();
		
		$config['configured'] = !empty($config);
		$config['userRunning'] = $utilService->getUserRunning();
		
		return new JsonResponse($config);
	}
	
	/**
	 * @Route("/get-php-executables")
	 * @param LoggerInterface $logger
	 *
	 * @return JsonResponse
	 */
	public function getPhpExecutables(LoggerInterface $logger){
		try{
			return new JsonResponse($this->get(UtilService::class)->getPhpExecutables());
		}
		catch(\Exception $exc){
			$logger->error($exc);
			
			return new JsonResponse($exc->getMessage(), 500);
		}
	}
	
	/**
	 * @Route("/set-php-executables/{symfony}")
	 *
	 * @param Symfony         $symfony
	 * @param Request         $request
	 * @param LoggerInterface $logger
	 *
	 * @return JsonResponse
	 */
	public function setPhpExecutables(Symfony $symfony, Request $request, LoggerInterface $logger){
		try{
			$data = json_decode($request->getContent(), true);
			
			$symfony->setPhpExecutable($data['phpExecutable']);
			
//			$em = $this->getDoctrine()->getManager();
//			$em->persist($symfony);
//			$em->flush();
			
			$this->get(SymfoniesService::class)->recheckSymfony($symfony);
			
			return new JsonResponse($this->get(SymfoniesService::class)->toArray($symfony));
		}
		catch(\Exception $exc){
			$logger->error($exc);
			
			return new JsonResponse($exc->getMessage(), 500);
		}
	}
	
	/**
	 * @Route("/recheck/{symfony}")
	 *
	 * @param Symfony         $symfony
	 * @param LoggerInterface $logger
	 *
	 * @return JsonResponse
	 */
	public function recheck(Symfony $symfony, LoggerInterface $logger){
		try{
			$this->get(SymfoniesService::class)->recheckSymfony($symfony);
			
			return new JsonResponse($this->get(SymfoniesService::class)->toArray($symfony));
		}
		catch(\Exception $exc){
			$logger->error($exc);
			
			return new JsonResponse($exc->getMessage(), 500);
		}
	}
	
	/**
	 * @Route("/switch-starred/{symfony}")
	 * @param Symfony         $symfony
	 * @param LoggerInterface $logger
	 *
	 * @return JsonResponse
	 */
	public function switchStarred(Symfony $symfony, LoggerInterface $logger){
		try{
			$starred = !$symfony->getStarred();
			$symfony->setStarred($starred);
			
			$symfony->setPhpExecutable($this->get(SymfoniesService::class)->getPhpExecutable($symfony));
			
			$em = $this->getDoctrine()->getManager();
			$em->persist($symfony);
			$em->flush();
			
			return new JsonResponse($this->get(SymfoniesService::class)->toArray($symfony));
		}
		catch(\Exception $exc){
			$logger->error($exc);
			
			return new JsonResponse($exc->getMessage(), 500);
		}
	}
	
	/**
	 * @Route("/start-all")
	 * @param LoggerInterface $logger
	 *
	 * @return JsonResponse
	 */
	public function startAll(LoggerInterface $logger){
		try{
			$this->get(SymfoniesService::class)->startAll();
			
			return new JsonResponse();
		}
		catch(\Exception $exc){
			$logger->error($exc);
			
			return new JsonResponse($exc->getMessage(), 500);
		}
	}
	
	/**
	 * @Route("/stop-all")
	 * @param LoggerInterface $logger
	 *
	 * @return JsonResponse
	 */
	public function stopAll(LoggerInterface $logger){
		try{
			$this->get(SymfoniesService::class)->stopAll();
			
			return new JsonResponse();
		}
		catch(\Exception $exc){
			$logger->error($exc);
			
			return new JsonResponse($exc->getMessage(), 500);
		}
	}
	
	/**
	 * @Route("/start/{symfony}", methods={"POST"})
	 * @param Symfony         $symfony
	 * @param Request         $request
	 * @param LoggerInterface $logger
	 *
	 * @return JsonResponse
	 */
	public function start(Symfony $symfony, Request $request, LoggerInterface $logger){
		try{
			$ip = $symfony->getIp();
			$port = $symfony->getPort();
			
			$data = json_decode($request->getContent(), true);
			
			$ip = !empty($data['ip']) ? $data['ip'] : $ip;
			$port = !empty($data['port']) ? $data['port'] : $port;
			
			if(!empty($data['entry'])){
				$entry = $data['entry'];
				
				// generate a json for each entry inserted
				$entry = explode(PHP_EOL, $entry);
				foreach($entry as $k => $v){
					$entry[$k] = trim($v);
				}
				$entry = json_encode($entry);
			}
			else{
				$entry = $symfony->getEntryPoint();
			}
			
			$this->get(SymfoniesService::class)->startAndSave($symfony, $ip, $port, $entry);
			
			$symfonyArray = $this->get(SymfoniesService::class)->toArray($symfony);
			
			return new JsonResponse($symfonyArray);
		}
		catch(\Exception $exc){
			$logger->error($exc);
			
			return new JsonResponse($exc->getMessage(), 500);
		}
	}
	
	/**
	 * @Route("/edit/{symfony}", methods={"POST"})
	 * @param Symfony         $symfony
	 * @param Request         $request
	 * @param LoggerInterface $logger
	 *
	 * @return JsonResponse
	 */
	public function edit(Symfony $symfony, Request $request, LoggerInterface $logger){
		try{
			$data = json_decode($request->getContent(), true);
			
			$entry = $data['entry'];
			
			// generate a json for each entry inserted
			$entry = explode(PHP_EOL, $entry);
			foreach($entry as $k => $v){
				$entry[$k] = trim($v);
			}
			$entry = json_encode($entry);
			
			$symfony->setEntryPoint($entry);
			
			$em = $this->getDoctrine()->getManager();
			$em->persist($symfony);
			$em->flush();
			
			return new JsonResponse($this->get(SymfoniesService::class)->toArray($symfony));
		}
		catch(\Exception $exc){
			$logger->error($exc);
			
			return new JsonResponse($exc->getMessage(), 500);
		}
	}
	
	/**
	 * @Route("/restart/{symfony}")
	 * @param Symfony         $symfony
	 * @param LoggerInterface $logger
	 *
	 * @return JsonResponse
	 */
	public function restart(Symfony $symfony, LoggerInterface $logger){
		try{
			$this->get(SymfoniesService::class)->restart($symfony);
			
			return new JsonResponse($this->get(SymfoniesService::class)->toArray($symfony));
		}
		catch(\Exception $exc){
			$logger->error($exc);
			
			return new JsonResponse($exc->getMessage(), 500);
		}
	}
	
	/**
	 * @Route("/stop/{symfony}")
	 * @param Symfony         $symfony
	 * @param LoggerInterface $logger
	 *
	 * @return JsonResponse
	 */
	public function stop(Symfony $symfony, LoggerInterface $logger){
		try{
			$this->get(SymfoniesService::class)->stop($symfony);
			
			return new JsonResponse($this->get(SymfoniesService::class)->toArray($symfony));
		}
		catch(\Exception $exc){
			$logger->error($exc);
			
			return new JsonResponse($exc->getMessage(), 500);
		}
	}
	
	/**
	 * @Route("/cache-assets-reset/{symfony}")
	 * @param Symfony         $symfony
	 * @param LoggerInterface $logger
	 *
	 * @return JsonResponse
	 */
	public function cacheAssetsReset(Symfony $symfony, LoggerInterface $logger){
		try{
			$this->get(SymfoniesService::class)->cacheAssetsReset($symfony);
			
			return new JsonResponse($this->get(SymfoniesService::class)->toArray($symfony));
		}
		catch(\Exception $exc){
			$logger->error($exc);
			
			return new JsonResponse($exc->getMessage(), 500);
		}
	}
	
	/**
	 * @Route("/delete-info/{symfony}")
	 *
	 * @param Symfony         $symfony
	 * @param LoggerInterface $logger
	 *
	 * @return JsonResponse
	 */
	public function deleteInfo(Symfony $symfony, LoggerInterface $logger){
		try{
			$this->get(SymfoniesService::class)->deleteSymfonyInfo($symfony);
			
			return new JsonResponse($this->get(SymfoniesService::class)->toArray($symfony));
		}
		catch(\Exception $exc){
			$logger->error($exc);
			
			return new JsonResponse($exc->getMessage(), 500);
		}
	}
	
	/**
	 * @Route("/remove/{symfony}")
	 *
	 * @param Symfony         $symfony
	 * @param LoggerInterface $logger
	 *
	 * @return JsonResponse
	 */
	public function remove(Symfony $symfony, LoggerInterface $logger){
		try{
			$this->get(SymfoniesService::class)->delete($symfony);
			
			return new JsonResponse($this->get(SymfoniesService::class)->toArray($symfony));
		}
		catch(\Exception $exc){
			$logger->error($exc);
			
			return new JsonResponse($exc->getMessage(), 500);
		}
	}
	
	/**
	 * @Route("/delete-all")
	 *
	 * @param LoggerInterface $logger
	 *
	 * @return JsonResponse
	 */
	public function deleteAll(LoggerInterface $logger){
		try{
			$this->get(SymfoniesService::class)->prune();
			$this->get(SymfoniesService::class)->deleteAll();
			
			return new JsonResponse();
		}
		catch(\Exception $exc){
			$logger->error($exc);
			
			return new JsonResponse($exc->getMessage(), 500);
		}
	}
	
	/**
	 * @Route("/composer/{activity}/{symfony}")
	 *
	 * @param string          $activity
	 * @param Symfony         $symfony
	 * @param LoggerInterface $logger
	 *
	 * @return JsonResponse
	 */
	public function composerActivity($activity, Symfony $symfony, LoggerInterface $logger){
		try{
			if($activity !== 'show'){
				$this->get(SymfoniesService::class)->composer($symfony, $activity);
				
				return new JsonResponse($this->get(SymfoniesService::class)->toArray($symfony));
			}
			else{
				$response = $this->get(SymfoniesService::class)->composerShow($symfony);
				
				return new JsonResponse($response);
			}
		}
		catch(\Exception $exc){
			$logger->error($exc);
			
			return new JsonResponse($exc->getMessage(), 500);
		}
	}
	
	/**
	 * @Route("/add-symfony-from-path")
	 *
	 * @param Request         $request
	 * @param LoggerInterface $logger
	 *
	 * @return JsonResponse
	 */
	public function addSymfonyFromPath(Request $request, LoggerInterface $logger){
		try{
			$symfoniesService = $this->get(SymfoniesService::class);
			
			$data = json_decode($request->getContent(), true);
			$path = trim($data['path']);
			$phpExecutable = trim($data['phpExecutable']);
			
			$symfony = $symfoniesService->newSymfonyFromPath($path, $phpExecutable);
			
			return new JsonResponse($symfoniesService->toArray($symfony));
		}
		catch(\Exception $exc){
			$logger->error($exc);
			
			return new JsonResponse($exc->getMessage(), 500);
		}
	}
}
