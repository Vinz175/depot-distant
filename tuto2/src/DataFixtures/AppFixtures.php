<?php

namespace App\DataFixtures;

use App\Entity\Artist;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        ////////// remplir 50 noms d'artistes //////////
        // for ($i = 0; $i < 50; $i++){
        // $product = new Product();
        // $manager->persist($product);
        // $artist = new artist();
        // $artist -> setName("Artist #1" . $i)
        //     ->setUrl("www.");

        // $manager ->persist($artist);}
        $manager->flush();
    }
}
