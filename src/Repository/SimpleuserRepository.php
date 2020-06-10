<?php

namespace App\Repository;

use App\Entity\Simpleuser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Simpleuser|null find($id, $lockMode = null, $lockVersion = null)
 * @method Simpleuser|null findOneBy(array $criteria, array $orderBy = null)
 * @method Simpleuser[]    findAll()
 * @method Simpleuser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SimpleuserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Simpleuser::class);
    }

    // /**
    //  * @return Simpleuser[] Returns an array of Simpleuser objects
    //  */
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
    public function findOneBySomeField($value): ?Simpleuser
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
