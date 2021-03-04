<?php

namespace App\Controller\Pages;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class page404Controller extends AbstractController
{
    /**
     * @Route("/pages/page404", name="pages_page404")
     */
    public function index(): Response
    {
        return $this->render('pages/page404/index.html.twig', [
            'controller_name' => 'page404Controller',
        ]);
    }
}
