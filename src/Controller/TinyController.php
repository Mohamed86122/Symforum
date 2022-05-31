<?php

namespace App\Controller;

use App\Entity\Question;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;


class TinyController extends AbstractController
{
   /**
    *  @Route("/", name="app_homepage")
    */
    public function index(): Response
    {
        return $this->render('tiny/index.html.twig', [  
            
        ]);
    }
}
