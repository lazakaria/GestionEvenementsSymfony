<?php

namespace App\Repository;

use App\Entity\Comite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Comite|null find($id, $lockMode = null, $lockVersion = null)
 * @method Comite|null findOneBy(array $criteria, array $orderBy = null)
 * @method Comite[]    findAll()
 * @method Comite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ComiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Comite::class);
    }

    // /**
    //  * @return Comite[] Returns an array of Comite objects
    //  */
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
    public function findOneBySomeField($value): ?Comite
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
