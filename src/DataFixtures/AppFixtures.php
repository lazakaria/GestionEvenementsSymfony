<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Utilisateur;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user= new Utilisateur();
        $user-> setNom ('LANCAR');
        $user-> setPrenom ('zak');
        $user-> setFonction ('Etudiant');
         $manager ->persist($user);


         $user= new Utilisateur();
        $user-> setNom ('LA');
        $user-> setPrenom ('za');
        $user-> setFonction ('Etu');
         $manager ->persist($user);

         $manager->flush();

    }
}
