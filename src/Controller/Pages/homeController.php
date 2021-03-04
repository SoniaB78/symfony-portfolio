<?php

namespace App\Controller\Pages;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/pages/home", name="pages_home")
     */
    public function index(): Response
    {
        return $this->render('Pages/home/index.html.twig', [
            'controller_name' => 'homeController',
        ]);
    }
}
