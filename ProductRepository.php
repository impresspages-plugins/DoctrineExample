<?php
/**
 * @package   ImpressPages
 */


/**
 * Created by PhpStorm.
 * User: maskas
 * Date: 16.2.28
 * Time: 22.32
 */

namespace Plugin\DoctrineExample;


use Doctrine\ORM\EntityRepository;
use Plugin\DoctrineExample\Entity\Product;

class ProductRepository extends EntityRepository
{
    protected $em;

    public function __construct()
    {
        $em = \Plugin\Doctrine\Service::getEntityManager();
        $this->em = $em;
        parent::__construct($em, $em->getClassMetadata(Product::class));
    }

    public function addProduct($title)
    {
        $product = new Product();
        $product->setTitle($title);
        $this->em->persist($product);
        $this->em->flush($product);
        return $product;
    }

    public function removeById($productId)
    {
        $product = $this->findOneBy(['id' => $productId]);
        if ($product) {
            $this->em->remove($product);
            $this->em->flush($product);
        }
    }



    /**
     * This method is unused by this example and is here just to show how to create custom queries.
     * @return Product[]
     */
    public function getSpecific()
    {
        $qb = $this->em->createQueryBuilder();
        $results = $qb->select('p')
            ->from(Product::class, 'p')
            ->orderBy('p.title', 'ASC')->getQuery()->execute();
        return $results;
    }
}
