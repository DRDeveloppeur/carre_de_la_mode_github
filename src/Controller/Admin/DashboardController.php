<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Entity\Marque;
use App\Entity\Picture;
use App\Entity\Product;
use App\Entity\Size;
use App\Entity\SubCategory;
use App\Entity\Tag;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        // return parent::index();
        // $routeBuilder = $this->get(CrudUrlGenerator::class)->build();
        // $url = $routeBuilder->setController(ProductCrudController::class)->generateUrl();

        // return $this->redirect($url);
        return $this->render("bundles/EasyAdminBundle/welcome.html.twig", [
            'user' => []
        ]);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Carré De La Mode');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToRoute('Back to site', 'fas fa-globe-europe', 'home');
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::section('BDD');
        yield MenuItem::linkToCrud('Marques', 'fas fa-list', Marque::class);
        yield MenuItem::linkToCrud('Categories', 'fas fa-tag', Category::class);
        yield MenuItem::linkToCrud('Sub Categories', 'fas fa-tags', SubCategory::class);
        yield MenuItem::linkToCrud('Produits', 'fas fa-barcode', Product::class);
        yield MenuItem::linkToCrud('Images produit', 'far fa-images', Picture::class);
        yield MenuItem::linkToCrud('Taille', 'fas fa-shoe-prints', Size::class);
        yield MenuItem::linkToCrud('Tag', 'fas fa-tag', Tag::class);
        yield MenuItem::linkToCrud('Utilisateur', 'fas fa-users', User::class);
    }
}
