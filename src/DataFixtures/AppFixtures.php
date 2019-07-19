<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {


        $user = new User();
        $user->setUsername('DonaldDuck');
        $user->setRoles(['ROLE_USER']);
        $user->setPassword('$argon2i$v=19$m=65536,t=6,p=1$QXBFQlhYcFdPSVhxZnNlbw$o44v3ZHvsNUJz8pjdQilrXHJKA707aiLy1sPm2G1FrA');
        $user->setemail('sophie.nanterre@gmail.com');
        $user->setFirstname('Sophie');
        $user->setLastname('Jacquot');
        $manager->persist($user);


        $manager->flush();


        $user = new User();
        $user->setUsername('Coincoin');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword('$argon2i$v=19$m=65536,t=6,p=1$QXBFQlhYcFdPSVhxZnNlbw$o44v3ZHvsNUJz8pjdQilrXHJKA707aiLy1sPm2G1FrA');
        $user->setemail('coincoin@gmail.com');
        $user->setFirstname('Adeline');
        $user->setLastname('Coincoin');
        $manager->persist($user);


        $manager->flush();
    }
}
