<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogueController extends AbstractController
{
    /**
     * @Route("/catalogue", name="catalogue")
     */
    public function index(ProductRepository $product): Response
    {
        dd($product);
        // $products = $product->getAll();

        return $this->render('catalogue/index.html.twig', [
            'controller_name' => 'CatalogueController',
        ]);
    }

    
    /**
     * @Route("/catalogue/{category}", name="catalogue_category")
     */
    public function productsByCategory(ProductRepository $productRep, CategoryRepository $categoryRep, $category): Response
    {
        $category = $categoryRep->findOneBy(['name' => $category]);
        $products = $productRep->findBy(['category' => $category]);

        return $this->render('catalogue/index.html.twig', [
            'controller_name' => 'CatalogueController',
            'products' => $products,
        ]);
    }
}
