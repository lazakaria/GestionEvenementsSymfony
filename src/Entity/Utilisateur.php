<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\File\File;

use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UtilisateurRepository")
 * @Vich\Uploadable()
 */
class Utilisateur
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fonction;


    /**
        * @ORM\column (type="datetime" )
         */
        private $createdAt;


    /**
     * @ORM\column (type="datetime" )
     */
    private $updatedAt;


        /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;





        /**
        * @ORM\Column(type="string", length=255, )
        */
     
      private $image;

    /**


     * @Vich\UploadableField(mapping="utilisateur_images", fileNameProperty="image")


     */
        private $fichierImage;

        /**
         * @ORM\Column(type="string", length=255)
         */
        private $titre_utilisateur;

        /**
         * @ORM\Column(type="string", length=255)
         */
        private $auteur_utilisateur;

        /**
         * @ORM\Column(type="string", length=255)
         */
        private $abstract_utilisateur;

        /**
         * @ORM\Column(type="string", length=255)
         */
        private $mots_cles_utilisateur;

        /**
         * @ORM\Column(type="string", length=255)
         */
        private $fichier_utilisateur;
    /**


     * @Vich\UploadableField(mapping="utlisateur_pdf", fileNameProperty="fichier_utilisateur")


     */
    private $fichierpdf_utlisateur;



public function __construct()
{
$this->createdAt = new \DateTime();
    $this->updatedAt = new \DateTime();
}


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getFonction(): ?string
    {
        return $this->fonction;
    }

    public function setFonction(string $fonction): self
    {
        $this->fonction = $fonction;

        return $this;
    }
       
    public function getCreatedAt(): ?\DateTimeInterface
         {
             return $this->createdAt;
         }

         public function setCreatedAt(\DateTimeInterface $createdAt): self
         {
             $this->createdAt = $createdAt;

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

    

        public function getImage(): ?string 
        {
            return $this->image;
        }
 
        public function setImage(?string $image): self
         {
          $this->image= $image;
          return $this;
          }
 
          public function getFichierImage()
          {
              return $this->fichierImage;
          }

    /**
     * @param mixed $fichierImage
     * @throws \Exception
     */
   
          public function setFichierImage($fichierImage): void
           {
            $this->fichierImage= $fichierImage;
            if($fichierImage){
                $this->updatedAt = new \DateTime();
            }
 
 
            }




            public function getUpdatedAt(): ?\DateTimeInterface
            {
                return $this->updatedAt;
            }

            public function setUpdatedAt(\DateTimeInterface $updatedAt): self
            {
                $this->updatedAt = $updatedAt;

                return $this;
            }

            public function getTitreUtilisateur(): ?string
            {
                return $this->titre_utilisateur;
            }

            public function setTitreUtilisateur(string $titre_utilisateur): self
            {
                $this->titre_utilisateur = $titre_utilisateur;

                return $this;
            }

            public function getAuteurUtilisateur(): ?string
            {
                return $this->auteur_utilisateur;
            }

            public function setAuteurUtilisateur(string $auteur_utilisateur): self
            {
                $this->auteur_utilisateur = $auteur_utilisateur;

                return $this;
            }

            public function getAbstractUtilisateur(): ?string
            {
                return $this->abstract_utilisateur;
            }

            public function setAbstractUtilisateur(string $abstract_utilisateur): self
            {
                $this->abstract_utilisateur = $abstract_utilisateur;

                return $this;
            }

            public function getMotsClesUtilisateur(): ?string
            {
                return $this->mots_cles_utilisateur;
            }

            public function setMotsClesUtilisateur(string $mots_cles_utilisateur): self
            {
                $this->mots_cles_utilisateur = $mots_cles_utilisateur;

                return $this;
            }

            public function getFichierUtilisateur(): ?string
            {
                return $this->fichier_utilisateur;
            }

            public function setFichierUtilisateur(?string $fichier_utilisateur): self
            {
                $this->fichier_utilisateur = $fichier_utilisateur;

                return $this;
            }

            /**
             * @return mixed
             */
            public function getFichierpdfUtlisateur()
            {
                return $this->fichierpdf_utlisateur;
            }

            /**
             * @param mixed $fichierpdf_utlisateur
             * @throws \Exception
             */
            public function setFichierpdfUtlisateur($fichierpdf_utlisateur): void
            {
                $this->fichierpdf_utlisateur= $fichierpdf_utlisateur;
                if($fichierpdf_utlisateur){
                    $this->updatedAt = new \DateTime();
                }
            }



}
