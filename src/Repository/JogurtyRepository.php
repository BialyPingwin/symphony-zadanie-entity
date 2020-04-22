<?php

namespace App\Repository;

use App\Entity\Jogurty;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Jogurty|null find($id, $lockMode = null, $lockVersion = null)
 * @method Jogurty|null findOneBy(array $criteria, array $orderBy = null)
 * @method Jogurty[]    findAll()
 * @method Jogurty[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JogurtyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Jogurty::class);
    }

    // /**
    //  * @return Jogurty[] Returns an array of Jogurty objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Jogurty
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
