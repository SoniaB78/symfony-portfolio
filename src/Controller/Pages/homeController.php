<?php

namespace App\Controller\Pages;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class homeController extends AbstractController
{
    /**
     * @Route("/pages/home", name="pages_home")
     */
    public function index(): Response
    {
        return $this->render('pages/home/index.html.twig', [
            'controller_name' => 'homeController',
        ]);
    }
}
