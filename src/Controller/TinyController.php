<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TinyController extends AbstractController
{
    #[Route('/tiny', name: 'app_tiny')]
    public function index(): Response
    {
        return $this->render('tiny/index.html.twig', [
            'controller_name' => 'TinyController',
        ]);
    }
}
