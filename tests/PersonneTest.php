<?php
namespace App\Tests\Entity;
use App\Entity\Personne;
use PHPUnit\Framework\TestCase;
class PersonneTest extends TestCase
{
    /**
     * Test sur les getters et setters du service
     */
    public function testNom()
    {
        $personne = new Personne();
        $nom = "Nom 1";
        $personne->setNom($nom);
        $this->assertEquals("Nom 1", $personne->getNom());
    }
    /**
     * Test sur les getters et setters du titre
     */
    public function testPrenom()
    {
        $personne = new Personne();
        $nom = "Prenom 1";
        $personne->setPrenom($nom);
        $this->assertEquals("Prenom 1", $personne->getPrenom());
    }
}