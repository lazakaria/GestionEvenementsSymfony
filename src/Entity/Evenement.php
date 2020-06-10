<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EvenementRepository")
 */
class Evenement
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
    private $titreEvenement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeEvenement;

    /**
     * @ORM\Column(type="datetime")
     */
    private $debutEvenement;

    /**
     * @ORM\Column(type="datetime")
     */
    private $finEvenement;

  #  /**
   #  * @ORM\ManyToMany(targetEntity="App\Entity\Comite", mappedBy="evenement")
    # */
    #private $comites;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieu_evenement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $soustitre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $datedebut;

    /**
     * @ORM\Column(type="date")
     */
    private $datefin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieu;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbrjour;

    public function __construct()
    {
        $this->comites = new ArrayCollection();
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreEvenement(): ?string
    {
        return $this->titreEvenement;
    }

    public function setTitreEvenement(string $titreEvenement): self
    {
        $this->titreEvenement = $titreEvenement;

        return $this;
    }

    public function getTypeEvenement(): ?string
    {
        return $this->typeEvenement;
    }

    public function setTypeEvenement(string $typeEvenement): self
    {
        $this->typeEvenement = $typeEvenement;

        return $this;
    }

    public function getDebutEvenement(): ?\DateTimeInterface
    {
        return $this->debutEvenement;
    }

    public function setDebutEvenement(\DateTimeInterface $debutEvenement): self
    {
        $this->debutEvenement = $debutEvenement;

        return $this;
    }

    public function getFinEvenement(): ?\DateTimeInterface
    {
        return $this->finEvenement;
    }

    public function setFinEvenement(\DateTimeInterface $finEvenement): self
    {
        $this->finEvenement = $finEvenement;

        return $this;
    }

    /**
     * @return Collection|Comite[]
     */
    public function getComites(): Collection
    {
        return $this->comites;
    }

    public function addComite(Comite $comite): self
    {
        if (!$this->comites->contains($comite)) {
            $this->comites[] = $comite;
            $comite->addEvenement($this);
        }

        return $this;
    }

    public function removeComite(Comite $comite): self
    {
        if ($this->comites->contains($comite)) {
            $this->comites->removeElement($comite);
            $comite->removeEvenement($this);
        }

        return $this;
    }

    public function getLieuEvenement(): ?string
    {
        return $this->lieu_evenement;
    }

    public function setLieuEvenement(string $lieu_evenement): self
    {
        $this->lieu_evenement = $lieu_evenement;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getSoustitre(): ?string
    {
        return $this->soustitre;
    }

    public function setSoustitre(string $soustitre): self
    {
        $this->soustitre = $soustitre;

        return $this;
    }

    public function getDatedebut(): ?string
    {
        return $this->datedebut;
    }

    public function setDatedebut(string $datedebut): self
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    public function getDatefin(): ?\DateTimeInterface
    {
        return $this->datefin;
    }

    public function setDatefin(\DateTimeInterface $datefin): self
    {
        $this->datefin = $datefin;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getNbrjour(): ?int
    {
        return $this->nbrjour;
    }

    public function setNbrjour(int $nbrjour): self
    {
        $this->nbrjour = $nbrjour;

        return $this;
    }


}
