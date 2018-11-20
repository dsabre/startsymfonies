<?php

namespace App\Repository;

use App\Entity\Symfony;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Symfony|null find($id, $lockMode = null, $lockVersion = null)
 * @method Symfony|null findOneBy(array $criteria, array $orderBy = null)
 * @method Symfony[]    findAll()
 * @method Symfony[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SymfonyRepository extends ServiceEntityRepository{
	
	public function __construct(RegistryInterface $registry){
		parent::__construct($registry, Symfony::class);
	}
	
	/**
	 * Return all symfonies ordinated
	 *
	 * @return Symfony[]
	 */
	public function getAll(){
		return $this->findBy([], ['starred' => 'DESC', 'path' => 'ASC', 'ip' => 'DESC']);
	}
	
	/**
	 * Return all active symfonies
	 *
	 * @return array
	 */
	public function getActives(){
		$q = $this->createQueryBuilder('s');
		$q
			->where('s.status = 1');
		
		return $q->getQuery()->getResult();
	}
	
	/**
	 * Return all active symfonies
	 *
	 * @return array
	 */
	public function getInactives(){
		$q = $this->createQueryBuilder('s');
		$q
			->where('s.status = 0');
		
		return $q->getQuery()->getResult();
	}
	
	/**
	 * Return the symfony with the max local ip
	 *
	 * @return Symfony
	 */
	public function getMaxLocalSymfonyByIp(){
		$symfonies = $this->getActives();
		
		if(!$symfonies){
			return null;
		}
		
		$maxIp = 0;
		$ret = null;
		$localIpPrefix = '127.0.0.';
		
		/** @var Symfony $symfony */
		foreach($symfonies as $symfony){
			$ip = $symfony->getIp();
			
			if(!preg_match('/^' . $localIpPrefix . '\d/', $ip)){
				continue;
			}
			
			$ip = (int)str_replace($localIpPrefix, '', $ip);
			
			if($ip > $maxIp){
				$maxIp = $ip;
				$ret = $symfony;
			}
		}
		
		return $ret;
	}
	
	/**
	 * Return the symfony with the max local port
	 *
	 * @return Symfony
	 */
	public function getMaxLocalSymfonyByPort(){
		$q = $this->createQueryBuilder('s');
		$q
			->where('s.port IS NOT NULL')
			->orderBy('s.port', 'DESC')
			->setMaxResults(1);
		
		$results = $q->getQuery()->getResult();
		
		return count($results) > 0 ? $results[0] : null;
	}
	
	//    /**
	//     * @return Symfony[] Returns an array of Symfony objects
	//     */
	/*
	public function findByExampleField($value)
	{
		return $this->createQueryBuilder('s')
			->andWhere('s.exampleField = :val')
			->setParameter('val', $value)
			->orderBy('s.id', 'ASC')
			->setMaxResults(10)
			->getQuery()
			->getResult()
		;
	}
	*/
	
	/*
	public function findOneBySomeField($value): ?Symfony
	{
		return $this->createQueryBuilder('s')
			->andWhere('s.exampleField = :val')
			->setParameter('val', $value)
			->getQuery()
			->getOneOrNullResult()
		;
	}
	*/
}
