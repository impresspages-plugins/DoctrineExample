<?php

namespace Plugin\DoctrineExample;



use Plugin\DoctrineExample\Entity\Product;

class AdminController
{
    public function index()
    {

        ipAddCss('assets/admin.css');
        ipAddJs('assets/admin.js');

        $productRepository = new ProductRepository();
        $products = $productRepository->findAll();

        $params = [
            'products' => $products
        ];
        $view = ipView('view/index.php', $params);
        return $view;
    }

    public function addRandomProduct()
    {
        ipRequest()->mustBePost();
        $productRepository = new ProductRepository();
        $productRepository->addProduct(Helper::getRandomTitle());
    }

    public function deleteProduct()
    {
        ipRequest()->mustBePost();
        $productId = ipRequest()->getPost('id');
        $productRepository = new ProductRepository();
        $productRepository->removeById($productId);
    }
}
