<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class AppFixtures extends Fixture
{
private $encoder;

public function __construct(UserPasswordEncoderInterface $encoder)
{
    $this->encoder = $encoder;
}
    public function load(ObjectManager $manager)
    {
        $user  = new User();
        $user->setEmail('jcfauquenot@gmail.com');
        $password = $this->encoder->encodePassword($user, 'pass_1234');
        $user->setPassword($password);
        $user->setRoles(['admin']);

        $manager->persist($user);
        $manager->flush();
    }
}