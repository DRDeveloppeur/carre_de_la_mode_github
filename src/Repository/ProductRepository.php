<?php

namespace App\Repository;

use App\Data\SearchData;
use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;

/**
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

    // /**
    //  * @return Product[] Returns an array of Product objects
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
    public function findOneBySomeField($value): ?Product
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
     * Undocumented function
     *
     * @return Product[]
     */
    public function findSearch(SearchData $search): array
    {
        $query = $this
            ->createQueryBuilder('p')
            ->select('c', 'p')
            ->select('m', 'p')
            ->select('sc', 'p')
            ->select('DISTINCT size', 'p')
            ->join('p.category', 'c')
            ->join('p.marque', 'm')
            ->join('p.subCategory', 'sc')
            ->join('p.stocks', 'size')
        ;
        if (!empty($search->q)) {
            $query = $query
                ->andWhere('p.name LIKE :q OR m.name LIKE :q OR c.name LIKE :q OR p.sexe LIKE :q')
                ->setParameter('q', "%{$search->q}%")
            ;
        }
        if (!empty($search->promo)) {
            $query = $query
                ->andWhere('p.discound <= 1')
            ;
        }
        if (!empty($search->categories)) {
            $query = $query
                ->andWhere('c.id IN (:categories)')
                ->setParameter('categories', $search->categories)
            ;
        }
        if (!empty($search->marques)) {
            $query = $query
                ->andWhere('m.id IN (:marques)')
                ->setParameter('marques', $search->marques)
            ;
        }
        if (!empty($search->subCategories)) {
            $query = $query
                ->andWhere('sc.id IN (:subCategories)')
                ->setParameter('subCategories', $search->subCategories)
            ;
        }
        if (!empty($search->sizes)) {
            $query = $query
                ->andWhere('size.id IN (:sizes)')
                ->setParameter('sizes', $search->sizes)
            ;
        }

        return $query->getQuery()->getResult();
    }
}
