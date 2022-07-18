<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="app_accueil")
     */
    public function index(): Response
    {
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

    /**
     * @Route("/mention", name="app_mention")
     */
    public function mention(): Response
    {
        return $this->render('accueil/mention.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

    /**
     * @Route("/horaires", name="app_horaires")
     */
    public function horaires(): Response
    {
        return $this->render('accueil/horaires.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

    /**
     * @Route("/plan", name="app_plan")
     */
    public function plan(): Response
    {
        return $this->render('accueil/plan.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

}