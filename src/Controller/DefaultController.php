<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class DefaultController extends AbstractController

{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        return $this->render('security/login.html.twig', [
            'last_username' => '',
            'error' => '',
        ]);
    }
}