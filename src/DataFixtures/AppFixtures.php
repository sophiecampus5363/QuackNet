<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {


        $user = new User();
        $user->setUsername('DonaldDuck');
        $user->setRoles('User');
        $user->setPassword('19870524');
        $user->setemail('sophie.nanterre@gmail.com');
        $user->setFirstname('Sophie');
        $user->setLasname('Jacquot');
        $manager->persist($user);


        $manager->flush();
    }
}
