<?php

namespace App\Entity;

use App\Repository\LineLivraisonRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LineLivraisonRepository::class)]
class LineLivraison
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?TradeRequest $tradeRequest = null;

    #[ORM\ManyToOne]
    private ?User $addedBy = null;

    #[ORM\ManyToOne(inversedBy: 'lineLivraisons')]
    private ?Livraison $livraison = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTradeRequest(): ?TradeRequest
    {
        return $this->tradeRequest;
    }

    public function setTradeRequest(?TradeRequest $tradeRequest): static
    {
        $this->tradeRequest = $tradeRequest;

        return $this;
    }

    public function getAddedBy(): ?User
    {
        return $this->addedBy;
    }

    public function setAddedBy(?User $addedBy): static
    {
        $this->addedBy = $addedBy;

        return $this;
    }
    public function getProduct(){
        if($this->getAddedBy()->getId()==$this->tradeRequest->getFromUser()->getId()){
            return $this->tradeRequest->getFromProduct();
        }
        else{
            return $this->tradeRequest->getToProduct();
        }

    }
    public function getQuantity(){
        if($this->getAddedBy()->getId()==$this->tradeRequest->getFromUser()->getId()){
            return $this->tradeRequest->getFromQuantity();
        }
        else{
            return $this->tradeRequest->getToQuantity();
        }

    }

    public function getLivraison(): ?Livraison
    {
        return $this->livraison;
    }

    public function setLivraison(?Livraison $livraison): static
    {
        $this->livraison = $livraison;

        return $this;
    }
}
