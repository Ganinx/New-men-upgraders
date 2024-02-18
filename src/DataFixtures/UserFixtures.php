<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{

    private $hash;

    public function __construct(UserPasswordHasherInterface $hash)
    {
        $this->hash = $hash;
    }

    public function load(ObjectManager $manager): void
    {
         $admin = new User();
         $admin->setPassword($this->hash->hashPassword($admin,'admin'));
         $admin->setRoles(['ROLE_ADMIN']);
         $admin->setEmail("admin@admin.fr");
         $admin->setFirstName('admin');
         $admin->setLastName('admin');
         $manager->persist($admin);


        $user = new User();
        $user->setPassword($this->hash->hashPassword($user,'user'));
        $user->setRoles([]);
        $user->setEmail("test@test.fr");
        $user->setFirstName('user');
        $user->setLastName('user');
        $manager->persist($user);

        $manager->flush();
    }
}
