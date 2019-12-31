<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ServicesRepository")
 */
class Services
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
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Medecins", mappedBy="service")
     */
    private $medecins;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Specialites", mappedBy="services")
     */
    private $specialites;

    public function __construct()
    {
        $this->medecins = new ArrayCollection();
        $this->specialites = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return Collection|Medecins[]
     */
    public function getMedecins(): Collection
    {
        return $this->medecins;
    }

    public function addMedecin(Medecins $medecin): self
    {
        if (!$this->medecins->contains($medecin)) {
            $this->medecins[] = $medecin;
            $medecin->setService($this);
        }

        return $this;
    }

    public function removeMedecin(Medecins $medecin): self
    {
        if ($this->medecins->contains($medecin)) {
            $this->medecins->removeElement($medecin);
            // set the owning side to null (unless already changed)
            if ($medecin->getService() === $this) {
                $medecin->setService(null);
            }
        }

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
            $specialite->setServices($this);
        }

        return $this;
    }

    public function removeSpecialite(Specialites $specialite): self
    {
        if ($this->specialites->contains($specialite)) {
            $this->specialites->removeElement($specialite);
            // set the owning side to null (unless already changed)
            if ($specialite->getServices() === $this) {
                $specialite->setServices(null);
            }
        }

        return $this;
    }
    public function __toString(){
        return $this->libelle;
    }
}
