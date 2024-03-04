<?php

namespace App\Repository;

use App\Entity\LineLivraison;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LineLivraison>
 *
 * @method LineLivraison|null find($id, $lockMode = null, $lockVersion = null)
 * @method LineLivraison|null findOneBy(array $criteria, array $orderBy = null)
 * @method LineLivraison[]    findAll()
 * @method LineLivraison[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LineLivraisonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LineLivraison::class);
    }

//    /**
//     * @return LineLivraison[] Returns an array of LineLivraison objects
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

//    public function findOneBySomeField($value): ?LineLivraison
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
