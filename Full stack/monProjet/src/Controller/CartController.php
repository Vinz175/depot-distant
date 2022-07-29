<?php

namespace App\Controller;

use App\Entity\Disc;
use App\Repository\DiscRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CartController extends AbstractController
{
    /**
     * @Route("/cart", name="app_cart")
     */
    public function index(SessionInterface $session, DiscRepository $discRepository)
    {
            $cart = $session->get("cart", []);

            // On "fabrique" les données
            $dataCart = [];
            $total = 0;

            foreach($cart as $id => $quantite){
                $disc = $discRepository->find($id);
                $dataCart[] = [
                    "disc" => $disc,
                    "quantite" => $quantite
                ];
                $total += $disc->getPrice() * $quantite;
            }

            return $this->render('cart/index.html.twig', compact("dataCart", "total"));
        
    }

    /**
     * @Route("/add/{id}", name="cart_add")
     */
    public function add(Disc $disc, SessionInterface $session)
    {
        // On récupere le panier actuel
        $cart = $session->get("cart", []);
        $id = $disc->getId();
        if (!empty($cart[$id])) {
            $cart[$id]++;
        }
        else{
            $cart[$id] = 1;
        }

        //On sauvegarde le panier dans la session
        $session->set("cart", $cart);

    // Message d'ajout    
        $this->addFlash(
            'success',
            $disc->getTitle().' ajouté au panier !!'
        );

        // return $this->redirectToRoute("app_cart");
        return $this->redirectToRoute("app_form_index");
        // $session->set("panier", 3);
        // dd($session->get("panier"));
    }

    /**
     * @Route("/remove/{id}", name="cart_remove")
     */
    public function remove(Disc $disc, SessionInterface $session)
    {
        // On récupere le panier actuel
        $cart = $session->get("cart", []);
        $id = $disc->getId();

        if (!empty($cart[$id])) {
            if($cart[$id] > 1) {
                $cart[$id]--;
            }
            else{
                unset($cart[$id]);
            }

        }
        //On sauvegarde le panier dans la session
        $session->set("cart", $cart);
        
        return $this->redirectToRoute("app_cart");
    }

    /**
     * @Route("/delete/{id}", name="cart_delete")
     */
    public function delete(Disc $disc, SessionInterface $session)
    {
        // On récupere le panier actuel
        $cart = $session->get("cart", []);
        $id = $disc->getId();

        if (!empty($cart[$id])) {
                unset($cart[$id]);
            }

        //On sauvegarde le panier dans la session
        $session->set("cart", $cart);
        
        return $this->redirectToRoute("app_cart");
    }

    /**
     * @Route("/delete", name="cart_delete_all")
     */
    public function deleteAll(SessionInterface $session)
    {
        $session->set("cart", []);
        //$session->remove("cart");
      
        return $this->redirectToRoute("app_cart");
    }

}