<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginSuccessController extends AbstractController
{
    /**
     * @Route("/login/success", name="login_success")
     */
    public function index(): Response
    {
        return $this->render('login_success/index.html.twig', [
            'controller_name' => 'LoginSuccessController',
        ]);
    }
}
