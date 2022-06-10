<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
    /**
     * @Route("/", name="app_first")
     */
    public function index(): Response
    {
        //die("vous etes dans le controller /first"); tester si on rentre dans le controller
        return $this->render('first/index.html.twig', [
            // 'controller_name' => 'FirstController',
            "name" => "Vinc",
            "firstname" => "Toto",
        ]);

        
    }
}
