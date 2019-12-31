<?php

namespace App\Entity;

use DateTimeInterface;
use App\Entity\Services;
use App\Entity\Specialites;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity(repositoryClass="App\Repository\MedecinsRepository")
 * @UniqueEntity("email",
 * message = "The email '{{ value }}' is already using.")
 */
class Medecins
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=8)
     */
    private $matricule;

    /**
     * @ORM\Column(type="string", length=255)
     * 
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull
     */
    private $nom;

    /**
     * @ORM\Column(type="date")
     */
    private $datedenaiss;

    /**
     * @ORM\Column(type="string", length=255)
     * 
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=12)
     * @Assert\Regex("/^(78||77||76||70)[0-9]{7}$/")
     */
    private $telephone;

    /**
     * @ORM\Column(type="string")     * 
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email."
     * )
     * 
     */
    private $email;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Services", inversedBy="medecins")
     * @ORM\JoinColumn(nullable=false)
     */
    private $service;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Specialites", inversedBy="medecins")
     */
    private $specialites;

    public function __construct()
    {
        $this->specialites = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

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

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDatedenaiss(): ?\DateTimeInterface
    {
        return $this->datedenaiss;
    }

    public function setDatedenaiss(\DateTimeInterface $datedenaiss): self
    {
        $this->datedenaiss = $datedenaiss;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getService(): ?Services
    {
        return $this->service;
    }

    public function setService(?Services $service): self
    {
        $this->service = $service;

        return $this;
    }

    /**
     * @return Collection|Specialites[]
     */
    public function getSpecialites(): Collection
    {
        return $this->specialites;
    }

    public function addSpecialite(Specialites $specialite): self
    {
        if (!$this->specialites->contains($specialite)) {
            $this->specialites[] = $specialite;
        }

        return $this;
    }

    public function removeSpecialite(Specialites $specialite): self
    {
        if ($this->specialites->contains($specialite)) {
            $this->specialites->removeElement($specialite);
        }

        return $this;
    }
    
        
}
