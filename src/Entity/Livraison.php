<?php

namespace App\Entity;

use App\Repository\LivraisonRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LivraisonRepository::class)]
class Livraison
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $country = null;

    #[ORM\Column(length: 255)]
    private ?string $state = null;

    #[ORM\Column(length: 255)]
    private ?string $adress = null;

    #[ORM\OneToMany(targetEntity: LineLivraison::class, mappedBy: 'livraison')]
    private Collection $lineLivraisons;

    #[ORM\ManyToOne(inversedBy: 'livraisons')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $adder = null;

    #[ORM\Column(length: 255)]
    private ?string $etat = null;

    public function __construct()
    {
        $this->lineLivraisons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): static
    {
        $this->country = $country;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(string $state): static
    {
        $this->state = $state;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): static
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * @return Collection<int, LineLivraison>
     */
    public function getLineLivraisons(): Collection
    {
        return $this->lineLivraisons;
    }

    public function addLineLivraison(LineLivraison $lineLivraison): static
    {
        if (!$this->lineLivraisons->contains($lineLivraison)) {
            $this->lineLivraisons->add($lineLivraison);
            $lineLivraison->setLivraison($this);
        }

        return $this;
    }

    public function removeLineLivraison(LineLivraison $lineLivraison): static
    {
        if ($this->lineLivraisons->removeElement($lineLivraison)) {
            // set the owning side to null (unless already changed)
            if ($lineLivraison->getLivraison() === $this) {
                $lineLivraison->setLivraison(null);
            }
        }

        return $this;
    }

    public function getAdder(): ?User
    {
        return $this->adder;
    }

    public function setAdder(?User $adder): static
    {
        $this->adder = $adder;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;

        return $this;
    }
}
