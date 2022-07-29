<?php

namespace App\Controller;

use App\Repository\DiscRepository;
use App\Repository\ArtistRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="app_accueil")
     */
    // public function index(): Response
    // {
    //     return $this->render('accueil/index.html.twig', [
    //         'controller_name' => 'AccueilController',
    //     ]);
    // }
    
    public function index(DiscRepository $discRepository, ArtistRepository $artistRepository)
    {
        return $this->render('accueil/index.html.twig', [
            'discs' => $discRepository->findAll("promo"),
            'artists' => $artistRepository->findAll(),
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