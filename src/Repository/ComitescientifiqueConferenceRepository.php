<?php

namespace App\Repository;

use App\Entity\ComitescientifiqueConference;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ComitescientifiqueConference|null find($id, $lockMode = null, $lockVersion = null)
 * @method ComitescientifiqueConference|null findOneBy(array $criteria, array $orderBy = null)
 * @method ComitescientifiqueConference[]    findAll()
 * @method ComitescientifiqueConference[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ComitescientifiqueConferenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ComitescientifiqueConference::class);
    }

    // /**
    //  * @return ComitescientifiqueConference[] Returns an array of ComitescientifiqueConference objects
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
    public function findOneBySomeField($value): ?ComitescientifiqueConference
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
