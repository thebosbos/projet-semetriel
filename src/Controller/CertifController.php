<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CertifController extends AbstractController
{
    #[Route('/certif', name: 'app_certif')]
    public function index(): Response
    {
        return $this->render('certif/index.html.twig', [
            'controller_name' => 'CertifController',
        ]);
    }
}
