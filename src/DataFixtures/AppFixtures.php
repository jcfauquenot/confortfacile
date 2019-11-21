<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user  = new User();
        $user->setEmail('jcfauquenot@gmail.com');
        $user->setPassword('best');
        $user->setRoles(['admin']);

        $manager->persist($user);
        $manager->flush();
    }
}