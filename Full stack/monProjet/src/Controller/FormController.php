<?php

namespace App\Controller;

use App\Entity\Disc;

use App\Form\DiscType;
use App\Repository\ArtistRepository;
use Doctrine\ORM\EntityManager;
use App\Repository\DiscRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

/**
 * @Route("/form")
 */
class FormController extends AbstractController
{
    /**
     * @Route("/", name="app_form_index", methods={"GET"})
     */
    public function index(DiscRepository $discRepository, ArtistRepository $artistRepository): Response
    {
        return $this->render('form/index.html.twig', [
            'discs' => $discRepository->findAll(),
            'artists' => $artistRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_form_new", methods={"GET", "POST"})
     */
    public function new(Request $request, DiscRepository $discRepository): Response
    {
        $disc = new Disc();
        $form = $this->createForm(DiscType::class, $disc);

        #Lecture du formulaire
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $discRepository->add($disc, true);

            $this->addFlash(
                'success',
                'Disque ajouté avec succès !!'
            );

            return $this->redirectToRoute('app_form_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('form/new.html.twig', [
            'disc' => $disc,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_form_show", methods={"GET"})
     */
    public function show(Disc $disc): Response
    {
        return $this->render('form/show.html.twig', [
            'disc' => $disc,
        ]);
    }

    // /**
    //  * @Route("/{id}/edit", name="app_form_edit", methods={"GET", "POST"})
    //  */
    // public function edit(Request $request, Disc $disc, DiscRepository $discRepository): Response
    // {
    //     $form = $this->createForm(DiscType::class, $disc);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $discRepository->add($disc, true);

    //         return $this->redirectToRoute('app_form_index', [], Response::HTTP_SEE_OTHER);
    //     }

    //     return $this->renderForm('form/edit.html.twig', [
    //         'disc' => $disc,
    //         'form' => $form,
    //     ]);
    // }

        /**
         * @Route("/{id}/edit", name="app_form_edit", methods={"GET","POST"})
         * @param Request $request
         * @param Disc $disc
         * @return Response
         */
        public function edit(Request $request, Disc $disc, EntityManagerInterface $em): Response
        {
            // récupération de l'id du produit
            $idDisc = $disc->getId();
            $form = $this->createForm(DiscType::class, $disc);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                // récupération de la saisi sur l'upload
                $pictureFile = $form['picture']->getData();

                // vérification s'il y a un upload photo
                    if ($pictureFile) {
                        // renommage du fichier
                        // nom du fichier + extension
                        $newPicture = $idDisc . '.' . $pictureFile->guessExtension();
                    // assignation de la valeur à la propriété picture à l'aide du setter
                        $disc->setPicture($newPicture);
                        try {
                            // déplacement du fichier vers le répertoire de destination sur le serveur
                            $pictureFile->move(
                                $this->getParameter('photo_directory'),
                                $newPicture
                            );
                        } catch (FileException $e) {
                        // gestion de l'erreur si le déplacement ne s'est pas effectué
                        }
                    }
                $em->flush();

                $this->addFlash(
                    'success',
                    'Disque modifié avec succès !!'
                );

                return $this->redirectToRoute('app_form_index');
            }

            return $this->render('form/edit.html.twig', [
                'disc' => $disc,
                'form' => $form->createView(),
            ]);
        }
        
    /**
     * @Route("/{id}", name="app_form_delete", methods={"POST"})
     */
    public function delete(Request $request, Disc $disc, DiscRepository $discRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$disc->getId(), $request->request->get('_token'))) {
            $discRepository->remove($disc, true);
        }

        return $this->redirectToRoute('app_form_index', [], Response::HTTP_SEE_OTHER);
    }
}
