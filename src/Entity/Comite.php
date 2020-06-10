<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ComiteRepository")
 */
class Comite
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
    private $type_comite;

    /**
     * @ORM\Column(type="text")
     */
    private $membres_comite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $post_membre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description_membre;

   #   /**
    #* @ORM\ManyToMany(targetEntity="App\Entity\Evenement", inversedBy="comites")
     #*/
   # private $evenement;

    public function __construct()
    {
        $this->evenement = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeComite(): ?string
    {
        return $this->type_comite;
    }

    public function setTypeComite(string $type_comite): self
    {
        $this->type_comite = $type_comite;

        return $this;
    }

    public function getMembresComite(): ?string
    {
        return $this->membres_comite;
    }

    public function setMembresComite(string $membres_comite): self
    {
        $this->membres_comite = $membres_comite;

        return $this;
    }

    /**
     * @return Collection|Evenement[]
     */
    public function getEvenement(): Collection
    {
        return $this->evenement;
    }

    public function addEvenement(Evenement $evenement): self
    {
        if (!$this->evenement->contains($evenement)) {
            $this->evenement[] = $evenement;
        }

        return $this;
    }

    public function removeEvenement(Evenement $evenement): self
    {
        if ($this->evenement->contains($evenement)) {
            $this->evenement->removeElement($evenement);
        }

        return $this;
    }

    public function getPostMembre(): ?string
    {
        return $this->post_membre;
    }

    public function setPostMembre(string $post_membre): self
    {
        $this->post_membre = $post_membre;

        return $this;
    }

    public function getDescriptionMembre(): ?string
    {
        return $this->description_membre;
    }

    public function setDescriptionMembre(string $description_membre): self
    {
        $this->description_membre = $description_membre;

        return $this;
    }
}
