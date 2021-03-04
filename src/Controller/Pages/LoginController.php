<?php

namespace App\Controller\Pages;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    // /**
    //  * @Route("/pages/login", name="pages_login")
    //  */
    public function index(): Response
    {
        return $this->render('Pages/login/index.html.twig', [
            'controller_name' => 'loginController',
        ]);
    }
}
