<?php

namespace App\Repository;

use App\Entity\Dishe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Dishe|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dishe|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dishe[]    findAll()
 * @method Dishe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DisheRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dishe::class);
    }

    // /**
    //  * @return Dishe[] Returns an array of Dishe objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Dishe
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
