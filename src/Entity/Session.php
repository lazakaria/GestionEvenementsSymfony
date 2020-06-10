<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SessionRepository")
 */
class Session
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre_session;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type_session;

    /**
     * @ORM\Column(type="time")
     */
    private $heure_session;

    /**
     * @ORM\Column(type="date")
     */
    private $date_session;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreSession(): ?string
    {
        return $this->titre_session;
    }

    public function setTitreSession(string $titre_session): self
    {
        $this->titre_session = $titre_session;

        return $this;
    }

    public function getTypeSession(): ?string
    {
        return $this->type_session;
    }

    public function setTypeSession(string $type_session): self
    {
        $this->type_session = $type_session;

        return $this;
    }

    public function getHeureSession(): ?\DateTimeInterface
    {
        return $this->heure_session;
    }

    public function setHeureSession(\DateTimeInterface $heure_session): self
    {
        $this->heure_session = $heure_session;

        return $this;
    }

    public function getDateSession(): ?\DateTimeInterface
    {
        return $this->date_session;
    }

    public function setDateSession(\DateTimeInterface $date_session): self
    {
        $this->date_session = $date_session;

        return $this;
    }
}
