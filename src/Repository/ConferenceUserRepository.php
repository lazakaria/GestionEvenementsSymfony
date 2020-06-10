<?php

namespace App\Repository;

use App\Entity\ConferenceUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ConferenceUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method ConferenceUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method ConferenceUser[]    findAll()
 * @method ConferenceUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConferenceUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ConferenceUser::class);
    }

    // /**
    //  * @return ConferenceUser[] Returns an array of ConferenceUser objects
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
    public function findOneBySomeField($value): ?ConferenceUser
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
