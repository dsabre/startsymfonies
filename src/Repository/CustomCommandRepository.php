<?php

namespace App\Repository;

use App\Entity\CustomCommand;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CustomCommand|null find($id, $lockMode = null, $lockVersion = null)
 * @method CustomCommand|null findOneBy(array $criteria, array $orderBy = null)
 * @method CustomCommand[]    findAll()
 * @method CustomCommand[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CustomCommandRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CustomCommand::class);
    }

//    /**
//     * @return CustomCommand[] Returns an array of CustomCommand objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CustomCommand
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
