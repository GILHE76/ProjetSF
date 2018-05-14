<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
 */
class Users
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $useName;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $useFirstname;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $useBirthdate;

    public function getId()
    {
        return $this->id;
    }

    public function getUseName(): ?string
    {
        return $this->useName;
    }

    public function setUseName(string $useName): self
    {
        $this->useName = $useName;

        return $this;
    }

    public function getUseFirstname(): ?string
    {
        return $this->useFirstname;
    }

    public function setUseFirstname(?string $useFirstname): self
    {
        $this->useFirstname = $useFirstname;

        return $this;
    }

    public function getUseBirthdate(): ?\DateTimeInterface
    {
        return $this->useBirthdate;
    }

    public function setUseBirthdate(?\DateTimeInterface $useBirthdate): self
    {
        $this->useBirthdate = $useBirthdate;

        return $this;
    }
}
