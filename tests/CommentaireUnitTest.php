<?php

namespace App\Tests;

use App\Entity\Blogpost;
use App\Entity\Commentaire;
use App\Entity\Peinture;
use PHPUnit\Framework\TestCase;
use DateTime;

class CommentaireUnitTest extends TestCase
{
    /**
     * Teste que les getters retournent les bonnes valeurs après l'utilisation des setters.
     */
    public function testIsTrue(): void
    {
        $commentaire = new Commentaire();
        $dateTime = new DateTime();
        $blogpost = new Blogpost();
        $peinture = new Peinture();

        // Utilisation des setters
        $commentaire->setAuteur('auteur')
            ->setEmail('email@test.com')
            ->setCreatedAt($dateTime)
            ->setContenu('contenu')
            ->setBlogpost($blogpost)
            ->setPeinture($peinture);

        // Assertions pour vérifier que les getters retournent les valeurs attendues
        $this->assertTrue($commentaire->getAuteur() === 'auteur');
        $this->assertTrue($commentaire->getEmail() === 'email@test.com');
        $this->assertTrue($commentaire->getCreatedAt() === $dateTime);
        $this->assertTrue($commentaire->getContenu() === 'contenu');
        $this->assertTrue($commentaire->getBlogpost() === $blogpost);
        $this->assertTrue($commentaire->getPeinture() === $peinture);
    }

    /**
     * Teste que les getters retournent des valeurs différentes de celles qui ne devraient PAS correspondre.
     */
    public function testIsFalse(): void
    {
        $commentaire = new Commentaire();
        $dateTime = new DateTime();
        $blogpost = new Blogpost();
        $peinture = new Peinture();

        // Utilisation des setters
        $commentaire->setAuteur('auteur')
            ->setEmail('email@test.com')
            ->setCreatedAt($dateTime)
            ->setContenu('contenu')
            ->setBlogpost($blogpost)
            ->setPeinture($peinture);

        // Assertions pour vérifier que les valeurs retournées ne sont PAS fausses
        $this->assertFalse($commentaire->getAuteur() === 'false');
        $this->assertFalse($commentaire->getEmail() === 'emailf@test.com');
        $this->assertFalse($commentaire->getCreatedAt() === new DateTime('yesterday'));
        $this->assertFalse($commentaire->getContenu() === 'false');
        $this->assertFalse($commentaire->getBlogpost() === new Blogpost());
        $this->assertFalse($commentaire->getPeinture() === new Peinture());
    }

    /**
     * Teste que les propriétés sont vides ou nulles par défaut (si non initialisées).
     */
    public function testIsEmpty(): void
    {
        $commentaire = new Commentaire();

        // Assertions pour vérifier que les valeurs par défaut sont vides ou nulles
        $this->assertEmpty($commentaire->getAuteur());
        $this->assertEmpty($commentaire->getEmail());
        $this->assertEmpty($commentaire->getCreatedAt());
        $this->assertEmpty($commentaire->getContenu());
        $this->assertEmpty($commentaire->getBlogpost());
        $this->assertEmpty($commentaire->getPeinture());
    }
}
