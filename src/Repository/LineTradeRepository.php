<?php

namespace App\Repository;

use App\Entity\LineTrade;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LineTrade>
 *
 * @method LineTrade|null find($id, $lockMode = null, $lockVersion = null)
 * @method LineTrade|null findOneBy(array $criteria, array $orderBy = null)
 * @method LineTrade[]    findAll()
 * @method LineTrade[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LineTradeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LineTrade::class);
    }

//    /**
//     * @return LineTrade[] Returns an array of LineTrade objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?LineTrade
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
