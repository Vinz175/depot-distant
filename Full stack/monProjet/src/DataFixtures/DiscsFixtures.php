<?php

namespace App\DataFixtures;

use App\Entity\Artist;
use App\Entity\Disc;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class DiscsFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {

        include 'records.php';
        $artistRepo = $manager->getRepository(Artist::class);

        foreach ($artist as $art){
            $artistDB = new Artist();
            $artistDB->setId($art['id']);
            $artistDB->setName($art['name']);
            $artistDB->setUrl($art['url']);

            $manager->persist($artistDB);

             // empêcher l'auto incrément
            $metadata = $manager->getClassMetaData(Artist::class);
            $metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
        }
        $manager->flush();

        foreach ($disc as $d) {
            $discDB = new Disc();
            $discDB
            ->setTitle($d['title'])
            ->setLabel($d['label'])
            ->setPicture($d['picture']);
            $artist = $artistRepo->find($d['artist_id']);
            $discDB->setArtist($artist);
            $manager->persist($discDB);
        }

        $manager->flush();
    }
}
