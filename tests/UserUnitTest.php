<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    /**
     * Teste si les getters retournent correctement les valeurs définies
     * avec les setters, assurant que l'objet est dans l'état attendu (TRUE).
     */
    public function testIsTrue()
    {
        // Supposons que la classe User est dans App\Entity
        $user = new User();

        $user->setEmail('true@test.com')
             ->setPrenom('prenom')
             ->setNom('nom')
             ->setPassword('password')
             ->setAPropos('a propos')
             ->setInstagram('instagram');

        $this->assertTrue($user->getEmail() === 'true@test.com');
        $this->assertTrue($user->getPrenom() === 'prenom');
        $this->assertTrue($user->getNom() === 'nom');
        $this->assertTrue($user->getPassword() === 'password');
        $this->assertTrue($user->getAPropos() === 'a propos');
        $this->assertTrue($user->getInstagram() === 'instagram');
    }

    /**
     * Teste si l'objet ne contient PAS certaines valeurs, assurant ainsi
     * la fiabilité des tests (FALSE).
     */
    public function testIsFalse()
    {
        // Supposons que la classe User est dans App\Entity
        $user = new User();

        $user->setEmail('true@test.com')
             ->setPrenom('prenom')
             ->setNom('nom')
             ->setPassword('password')
             ->setAPropos('a propos')
             ->setInstagram('instagram');

        $this->assertFalse($user->getEmail() === 'false@test.com');
        $this->assertFalse($user->getPrenom() === 'false');
        $this->assertFalse($user->getNom() === 'false');
        $this->assertFalse($user->getPassword() === 'false');
        $this->assertFalse($user->getAPropos() === 'false');
        $this->assertFalse($user->getInstagram() === 'false');
    }

    public function testIsEmpty()
    {
        // Supposons que la classe User est dans App\Entity
        $user = new User();

        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getPrenom());
        $this->assertEmpty($user->getNom());
        $this->assertEmpty($user->getPassword());
        $this->assertEmpty($user->getAPropos());
        $this->assertEmpty($user->getInstagram());
    }
}
