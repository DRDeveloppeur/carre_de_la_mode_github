<?php

namespace App\DataFixtures;

use App\Entity\Marque;
use App\Entity\Size;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i=1; $i < 60; $i++) { 
            $size = new Size();
            $size->setSize($i);
            $size->setStock(1);
            $manager->persist($size);
        }

        // for ($i=0; $i < 10; $i++) { 
        //     $user = new User();
        //     $user->setEmail($faker->email);
        //     $user->setRoles($faker->randomElements(['ROLE_USER','ROLE_ADMIN']));
        //     $user->setPassword($faker->password);
        //     $cvl = $user->setCivility($faker->randomElement(["Mr.", "Mme."]));
        //     ($cvl === "Mr.") ? $genre = "male" : $genre = "female";
        //     $user->setFirstname($faker->firstname($genre));
        //     $user->setLastname($faker->lastname($genre));
        //     $user->setAddress($faker->streetAddress);
        //     $user->setCity($faker->city);
        //     $user->setPostalcode(intval($faker->postcode));
        //     $user->setCountry($faker->country);
        //     $user->setCellphone($faker->mobileNumber);
        //     $user->setBirth($faker->dateTimeBetween('-90 years', '-18 years', null));
        //     $user->setSubscribenews($faker->randomElement([true, false]));
        //     $user->setCreatedAt(new \DateTimeImmutable());

        //     $manager->persist($user);
        // }

        $manager->flush();
    }
}
