<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\AppUser;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        foreach ($this->getUserData() as [$firstName, $lastName, $email, $password, $roles, $isActive, $userName]) {
            $user = new AppUser();
            $user->setFirstName($firstName);
            $user->setLastName($lastName);
            $user->setEmail($email);
            $user->setPassword($this->passwordEncoder->encodePassword($user, $password));
            $user->setRoles($roles);
            $user->setIsActive($isActive);
            $user->setUsername($userName);

            $manager->persist($user);
        }

        $manager->flush();
    }

    private function getUserData(): array
    {
        return [
            ['Jane', 'Doe', 'jane_admin@symfony.com', 'kitten', ['ROLE_BO_ADMIN'], 1, 'admin'],
            ['Tom', 'Doe', 'tom_admin@symfony.com', 'kitten', ['ROLE_SUPER_ADMIN'], 1, 'super_admin'],
            ['John', 'Doe', 'john_user@symfony.com', 'kitten', ['ROLE_BO_MANAGER'], 1, 'manager', 'kitten'],
        ];
    }
}
