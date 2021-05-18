<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginFailureController extends AbstractController
{
    /**
     * @Route("/login/failure", name="login_failure")
     */
    public function index(): Response
    {
        return $this->render('login_failure/index.html.twig', [
            'controller_name' => 'LoginFailureController',
        ]);
    }
}
