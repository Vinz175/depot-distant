<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
/**
 * @Route("/profil")
 * @method render(string $string, array $array)
 */
class ProfilController extends AbstractController
{
    /**
     * @Route("/detail", name="profil")
     */
    public function detail(UserRepository $users) :Response
    {
        // $info = ['lastname' => 'Loper', 'firstname' => 'Dave', 'email' => 'daveloper@code.dom', 'birthdate' => '01/01/1970'];

        // affichage de la page d'accueil
        return $this->render('profil/detail.html.twig', [
            'informations' => $users->findAll()
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_profil_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, User $user, UserRepository $userrepo): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userrepo->add($user, true);

            return $this->redirectToRoute('app_disc_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('profil/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }
}
