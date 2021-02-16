<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main_home")
     */
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_home' => 'Page d\'acceuil',
        ]);
    }

    /**
     * @Route("/article", name="article")
     */
    public function article(): Response
    {
        return $this->render('main/article.html.twig', [
            'controller_article' => 'Page article',
        ]);
    }

    /**
     * @Route("/dashboard/admin", name="dash_admin")
     */
    public function dash_admin(): Response
    {
        return $this->render('main/dash_admin.html.twig', [
            'controller_dash_admin' => 'Page administrateur',
        ]);
    }

    /**
     * @Route("/dashboard", name="dash_client")
     */
    public function dash_client(): Response
    {
        return $this->render('main/dash_client.html.twig', [
            'controller_dash_client' => 'Page client',
        ]);
    }

    /**
     * @Route("/faq", name="faq")
     */
    public function faq(): Response
    {
        return $this->render('main/faq.html.twig', [
            'controller_faq' => 'Page faq',
        ]);
    }
}
