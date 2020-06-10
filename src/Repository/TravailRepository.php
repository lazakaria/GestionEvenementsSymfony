<?php

namespace App\Repository;

use App\Entity\Travail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Travail|null find($id, $lockMode = null, $lockVersion = null)
 * @method Travail|null findOneBy(array $criteria, array $orderBy = null)
 * @method Travail[]    findAll()
 * @method Travail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TravailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Travail::class);
    }

    // /**
    //  * @return Travail[] Returns an array of Travail objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Travail
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
