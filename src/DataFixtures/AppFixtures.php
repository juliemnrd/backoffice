<?php

namespace App\DataFixtures;

use App\Entity\Doctor;
use App\Entity\Profession;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $prof=[];
        for ($i = 0; $i < 20; $i ++) {
            $profession = new Profession();
            $profession->setSpecialty('Profession'.$i);
            $manager->persist($profession);
            $prof[] = $profession;
        }
        for ($i = 0; $i < 20; $i++) {
            $doctor = new Doctor();
            $doctor->setFirstName('doctor '.$i);
            $doctor->setLastName('doc '.$i);
            $doctor->setIsValidate(0);
            $doctor->setProfession($prof[mt_rand(1,19)]);
            $manager->persist($doctor);
        }

        $doctor = new Doctor();
          $doctor->setFirstName('Atha');
          $doctor->setLastName('Luego');
          $doctor->setIsValidate(0);
          $doctor->setProfession($prof[12]);
        $manager->persist($doctor);

        $manager->flush();
    }
}
?>