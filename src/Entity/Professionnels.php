<?php
namespace App\Entity;
class Professionnels
{
    protected $name;
    protected $categorie;
    protected $siret;
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }
    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie): void
    {
        $this->categorie = $categorie;
    }
    /**
     * @return mixed
     */
    public function getSiret()
    {
        return $this->siret;
    }
    /**
     * @param mixed $siret
     */
    public function setSiret($siret): void
    {
        $this->siret = $siret;
    }
}