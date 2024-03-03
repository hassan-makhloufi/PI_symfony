<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;


    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\Column(length: 255)]
    private ?string $short_description = null;

    #[ORM\Column(length: 255)]
    private ?string $long_description = null;

    #[ORM\ManyToOne(inversedBy: 'products')]
    private ?Category $category = null;

    #[ORM\ManyToOne(inversedBy: 'products')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $adder = null;

    #[ORM\OneToMany(targetEntity: TradeRequest::class, mappedBy: 'toProduct', orphanRemoval: true)]
    private Collection $toRequestTreades;

    #[ORM\Column(nullable: true)]
    private ?bool $traded = null;

    public function __construct()
    {
        $this->toRequestTreades = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getShortDescription(): ?string
    {
        return $this->short_description;
    }

    public function setShortDescription(string $short_description): static
    {
        $this->short_description = $short_description;

        return $this;
    }

    public function getLongDescription(): ?string
    {
        return $this->long_description;
    }

    public function setLongDescription(string $long_description): static
    {
        $this->long_description = $long_description;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): static
    {
        $this->category = $category;

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

    /**
     * @return Collection<int, TradeRequest>
     */
    public function getToRequestTreades(): Collection
    {
        return $this->toRequestTreades;
    }

    public function addToRequestTreade(TradeRequest $toRequestTreade): static
    {
        if (!$this->toRequestTreades->contains($toRequestTreade)) {
            $this->toRequestTreades->add($toRequestTreade);
            $toRequestTreade->setToProduct($this);
        }

        return $this;
    }

    public function removeToRequestTreade(TradeRequest $toRequestTreade): static
    {
        if ($this->toRequestTreades->removeElement($toRequestTreade)) {
            // set the owning side to null (unless already changed)
            if ($toRequestTreade->getToProduct() === $this) {
                $toRequestTreade->setToProduct(null);
            }
        }

        return $this;
    }

    public function isTraded(): ?bool
    {
        return $this->traded;
    }

    public function setTraded(?bool $traded): static
    {
        $this->traded = $traded;

        return $this;
    }
    public function  canUseForTrade(User $user){
        $can = true;
        foreach ($user->getFromRequestTrades() as $requestTrade){
            if($requestTrade->getFromProduct()->getId()==$this->getId()){
                $can=false;
            }
        }
        return $can;
    }
    public function canTradeWith(User $user){
        $can = true;
        foreach ($user->getFromRequestTrades() as $requestTrade){
            if($requestTrade->getToProduct()->getId()==$this->getId()){
                $can=false;
            }
        }
        return $can;
    }

}
