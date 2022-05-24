<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $artist1 = new Artist();

        $artist1->setName("Queens Of The Stone Age");
        $artist1->setUrl("https://qotsa.com/");
        
        $manager->persist($artist1);
        $manager->flush();
    }
}
