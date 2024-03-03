<?php

namespace App\Repository;

use App\Entity\TradeRequest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TradeRequest>
 *
 * @method TradeRequest|null find($id, $lockMode = null, $lockVersion = null)
 * @method TradeRequest|null findOneBy(array $criteria, array $orderBy = null)
 * @method TradeRequest[]    findAll()
 * @method TradeRequest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TradeRequestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TradeRequest::class);
    }

//    /**
//     * @return TradeRequest[] Returns an array of TradeRequest objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TradeRequest
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
