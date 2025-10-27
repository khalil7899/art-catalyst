<?php

namespace App\Tests;

use App\Entity\Blogpost;
use PHPUnit\Framework\TestCase;
use DateTime;

class BlogpostUnitTest extends TestCase
{
    /**
     * Teste que les getters retournent les bonnes valeurs après l'utilisation des setters.
     */
    public function testIsTrue(): void
    {
        $blogpost = new Blogpost();
        $dateTime = new DateTime();

        // Utilisation des setters
        $blogpost
            ->setTitre('titre')
            ->setCreatedAt($dateTime)
            ->setContenu('contenu')
            ->setSlug('slug');

        // Assertions pour vérifier que les getters retournent les valeurs attendues
        $this->assertTrue($blogpost->getTitre() === 'titre');
        $this->assertTrue($blogpost->getCreatedAt() === $dateTime);
        $this->assertTrue($blogpost->getContenu() === 'contenu');
        $this->assertTrue($blogpost->getSlug() === 'slug');
    }

    /**
     * Teste que les getters retournent des valeurs différentes de celles qui ne devraient PAS correspondre.
     */
    public function testIsFalse(): void
    {
        $blogpost = new Blogpost();
        $dateTime = new DateTime();

        // Utilisation des setters
        $blogpost
            ->setTitre('titre')
            ->setCreatedAt($dateTime)
            ->setContenu('contenu')
            ->setSlug('slug');

        // Assertions pour vérifier que les valeurs retournées ne sont PAS fausses
        $this->assertFalse($blogpost->getTitre() === 'false');
        $this->assertFalse($blogpost->getCreatedAt() === new DateTime('tomorrow'));
        $this->assertFalse($blogpost->getContenu() === 'false');
        $this->assertFalse($blogpost->getSlug() === 'false');
    }

    /**
     * Teste que les propriétés sont vides ou nulles par défaut (si non initialisées).
     */
    public function testIsEmpty(): void
    {
        $blogpost = new Blogpost();

        // Assertions pour vérifier que les valeurs par défaut sont vides ou nulles
        $this->assertEmpty($blogpost->getTitre());
        $this->assertEmpty($blogpost->getCreatedAt());
        $this->assertEmpty($blogpost->getContenu());
        $this->assertEmpty($blogpost->getSlug());
    }
}
