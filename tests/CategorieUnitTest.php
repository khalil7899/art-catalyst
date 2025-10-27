<?php

namespace App\Tests;

use App\Entity\Categorie;
use PHPUnit\Framework\TestCase;

class CategorieUnitTest extends TestCase
{
    /**
     * Teste si les getters retournent correctement les valeurs définies
     * avec les setters, assurant que l'objet est dans l'état attendu (TRUE).
     */
    public function testIsTrue()
    {
        // Supposons que la classe Categorie est dans App\Entity
        $categorie = new Categorie();

        $categorie->setNom('nom')
                  ->setDescription('description')
                  ->setSlug('slug');

        $this->assertTrue($categorie->getNom() === 'nom');
        $this->assertTrue($categorie->getDescription() === 'description');
        $this->assertTrue($categorie->getSlug() === 'slug');
    }

    /**
     * Teste si l'objet ne contient PAS certaines valeurs, assurant ainsi
     * la fiabilité des tests (FALSE).
     */
    public function testIsFalse()
    {
        // Supposons que la classe Categorie est dans App\Entity
        $categorie = new Categorie();

        $categorie->setNom('nom')
                  ->setDescription('description')
                  ->setSlug('slug');

        $this->assertFalse($categorie->getNom() === 'false');
        $this->assertFalse($categorie->getDescription() === 'false');
        $this->assertFalse($categorie->getSlug() === 'false');
    }

    public function testIsEmpty()
    {
        $categorie = new Categorie();


        $this->assertEmpty($categorie->getNom());
        $this->assertEmpty($categorie->getDescription());
        $this->assertEmpty($categorie->getSlug());
    }
}
