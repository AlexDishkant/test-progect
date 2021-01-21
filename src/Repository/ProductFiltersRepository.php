<?php

namespace App\Repository;

use App\Entity\ProductFilters;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ProductFilters|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductFilters|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductFilters[]    findAll()
 * @method ProductFilters[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductFiltersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductFilters::class);
    }

    // /**
    //  * @return ProductFilters[] Returns an array of ProductFilters objects
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
    public function findOneBySomeField($value): ?ProductFilters
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
