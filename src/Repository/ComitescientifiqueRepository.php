<?php

namespace App\Repository;

use App\Entity\Comitescientifique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Comitescientifique|null find($id, $lockMode = null, $lockVersion = null)
 * @method Comitescientifique|null findOneBy(array $criteria, array $orderBy = null)
 * @method Comitescientifique[]    findAll()
 * @method Comitescientifique[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ComitescientifiqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Comitescientifique::class);
    }

    // /**
    //  * @return Comitescientifique[] Returns an array of Comitescientifique objects
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
    public function findOneBySomeField($value): ?Comitescientifique
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
