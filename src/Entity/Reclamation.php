<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $message = null;

    #[ORM\ManyToOne(inversedBy: 'reclamations')]
    private ?Product $product = null;

    #[ORM\ManyToOne(inversedBy: 'reclamations')]
    private ?Forum $forum = null;

    #[ORM\ManyToOne(inversedBy: 'reclamations')]
    private ?Comment $comment = null;

    #[ORM\Column(length: 255)]
    private ?string $link = null;

    #[ORM\ManyToOne(inversedBy: 'reclamations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $author = null;

    #[ORM\OneToMany(targetEntity: ReclamationResponse::class, mappedBy: 'reclamation', orphanRemoval: true)]
    private Collection $reclamationResponses;

    public function __construct()
    {
        $this->reclamationResponses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): static
    {
        $this->message = $message;

        return $this;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): static
    {
        $this->product = $product;

        return $this;
    }

    public function getForum(): ?Forum
    {
        return $this->forum;
    }

    public function setForum(?Forum $forum): static
    {
        $this->forum = $forum;

        return $this;
    }

    public function getComment(): ?Comment
    {
        return $this->comment;
    }

    public function setComment(?Comment $comment): static
    {
        $this->comment = $comment;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): static
    {
        $this->link = $link;

        return $this;
    }

    public function getAuthor(): ?User
    {
        return $this->author;
    }

    public function setAuthor(?User $author): static
    {
        $this->author = $author;

        return $this;
    }
    public function getType(){
        if($this->getProduct()){
         return "product";
        }
        if($this->getForum()){
            return "forum";
        }
        if($this->getComment()){
            return "comment";
        }



    }

    /**
     * @return Collection<int, ReclamationResponse>
     */
    public function getReclamationResponses(): Collection
    {
        return $this->reclamationResponses;
    }

    public function addReclamationResponse(ReclamationResponse $reclamationResponse): static
    {
        if (!$this->reclamationResponses->contains($reclamationResponse)) {
            $this->reclamationResponses->add($reclamationResponse);
            $reclamationResponse->setReclamation($this);
        }

        return $this;
    }

    public function removeReclamationResponse(ReclamationResponse $reclamationResponse): static
    {
        if ($this->reclamationResponses->removeElement($reclamationResponse)) {
            // set the owning side to null (unless already changed)
            if ($reclamationResponse->getReclamation() === $this) {
                $reclamationResponse->setReclamation(null);
            }
        }

        return $this;
    }
    public function getResponse(){
        return $this->getReclamationResponses()[0];
    }
}
