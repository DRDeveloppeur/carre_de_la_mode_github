<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/informations")
 */
class InformationsController extends AbstractController
{
    /**
     * @Route("/qui-sommes-nous", name="informations_who")
     */
    public function whoAreWe(): Response
    {
        return $this->render('informations/qui-sommes-nous.html.twig', [
            'controller_name' => 'InformationsController',
        ]);
    }

    /**
     * @Route("/nos-boutiques", name="informations_weMarkets")
     */
    public function weMarkets(): Response
    {
        return $this->render('informations/nos-boutiques.html.twig');
    }

    /**
     * @Route("/nos-services", name="informations_weServices")
     */
    public function weServices(): Response
    {
        return $this->render('informations/nos-services.html.twig');
    }

    /**
     * @Route("/notre-blog", name="informations_ourBlog")
     */
    public function ourBlog(): Response
    {
        return $this->render('informations/notre-blog.html.twig');
    }

    /**
     * @Route("/cgv", name="informations_cgv")
     */
    public function cgv(): Response
    {
        return $this->render('informations/cgv.html.twig');
    }

    /**
     * @Route("/mentions-legales", name="informations_mLegales")
     */
    public function mLegales(): Response
    {
        return $this->render('informations/mentions-legales.html.twig');
    }

    /**
     * @Route("/faq", name="informations_faq")
     */
    public function faq(): Response
    {
        return $this->render('informations/faq.html.twig');
    }

    /**
     * @Route("/guide-taille", name="informations_sizeGuide")
     */
    public function sizeGuide(): Response
    {
        return $this->render('informations/guide-taille.html.twig');
    }

    /**
     * @Route("/contact", name="informations_contact")
     */
    public function contact(): Response
    {
        return $this->render('informations/contact.html.twig');
    }
}
