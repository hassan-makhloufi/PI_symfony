<?php

namespace App\Entity;

use App\Repository\TradeRequestRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TradeRequestRepository::class)]
class TradeRequest
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'fromRequestTrades')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $fromUser = null;

    #[ORM\ManyToOne(inversedBy: 'toRequestTrades')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $toUser = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Product $fromProduct = null;

    #[ORM\ManyToOne(inversedBy: 'toRequestTreades')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Product $toProduct = null;

    #[ORM\Column(length: 255)]
    private ?string $state = null;

    #[ORM\Column]
    private ?int $fromQuantity = null;

    #[ORM\Column]
    private ?int $toQuantity = null;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFromUser(): ?User
    {
        return $this->fromUser;
    }

    public function setFromUser(?User $fromUser): static
    {
        $this->fromUser = $fromUser;

        return $this;
    }

    public function getToUser(): ?User
    {
        return $this->toUser;
    }

    public function setToUser(?User $toUser): static
    {
        $this->toUser = $toUser;

        return $this;
    }

    public function getFromProduct(): ?Product
    {
        return $this->fromProduct;
    }

    public function setFromProduct(?Product $fromProduct): static
    {
        $this->fromProduct = $fromProduct;

        return $this;
    }

    public function getToProduct(): ?Product
    {
        return $this->toProduct;
    }

    public function setToProduct(?Product $toProduct): static
    {
        $this->toProduct = $toProduct;

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

    public function getFromQuantity(): ?int
    {
        return $this->fromQuantity;
    }

    public function setFromQuantity(int $fromQuantity): static
    {
        $this->fromQuantity = $fromQuantity;

        return $this;
    }

    public function getToQuantity(): ?int
    {
        return $this->toQuantity;
    }

    public function setToQuantity(int $toQuantity): static
    {
        $this->toQuantity = $toQuantity;

        return $this;
    }




}
