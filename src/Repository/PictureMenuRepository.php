<?php

namespace App\Repository;

use App\Entity\PictureMenu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PictureMenu|null find($id, $lockMode = null, $lockVersion = null)
 * @method PictureMenu|null findOneBy(array $criteria, array $orderBy = null)
 * @method PictureMenu[]    findAll()
 * @method PictureMenu[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PictureMenuRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PictureMenu::class);
    }

    // /**
    //  * @return PictureMenu[] Returns an array of PictureMenu objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PictureMenu
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
