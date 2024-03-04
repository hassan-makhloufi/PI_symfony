<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Product>
 *
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }
    public function getProductsAddedByUser($id){
        return $this->findBy([
            'adder'=>$id
        ]);
    }
    public function filterProduct($q,$category_id,$pageNumber,$pageLimit){
        $query = $this->createQueryBuilder('p');
        if($category_id){
            $query->where('p.category = :cat_id')->setParameter('cat_id',$category_id);
        }

        $firstResult = ($pageNumber-1)*$pageLimit;
        $numberOfRows = count($query->getQuery()->execute());
        $query = $query->setFirstResult($firstResult)->setMaxResults($pageLimit)->getQuery();
        return [
            'products'=>$query->execute(),
            'numberOfPages'=>ceil($numberOfRows/$pageLimit)
        ];
    }
    public function getProductsWithPagination($pageNumber,$pageLimit){
         if(!$pageNumber ){
            $pageNumber = 1;
         }

         $firstResult = ($pageNumber-1)*$pageLimit;
        return [
           'products'=>$this->createQueryBuilder('p')->setFirstResult($firstResult)->setMaxResults($pageLimit)->getQuery()->execute(),
            'numberOfPages'=>ceil($this->count()/$pageLimit)
        ];

    }

//    /**
//     * @return Product[] Returns an array of Product objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Product
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
