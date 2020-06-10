<?php

namespace App\Repository;

use App\Entity\SpeakerConference;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SpeakerConference|null find($id, $lockMode = null, $lockVersion = null)
 * @method SpeakerConference|null findOneBy(array $criteria, array $orderBy = null)
 * @method SpeakerConference[]    findAll()
 * @method SpeakerConference[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SpeakerConferenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SpeakerConference::class);
    }

    // /**
    //  * @return SpeakerConference[] Returns an array of SpeakerConference objects
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
    public function findOneBySomeField($value): ?SpeakerConference
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
