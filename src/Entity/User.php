<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface,PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]

    private ?int $id = null;
    #[NotBlank(null,'the email cannot be empty',null,null)]
    #[Email(null,'please enter a valid email',null,null)]
    #[ORM\Column(length: 255)]
    private ?string $email = null;
    #[NotBlank(null,'the firstname field cannot be empty',null,null)]
    #[ORM\Column(length: 255)]
    private ?string $firstname = null;
    #[NotBlank(null,'the firstname field cannot be empty',null,null)]
    #[ORM\Column(length: 255)]
    private ?string $lastname = null;

    #[ORM\Column]
    private ?bool $isAdmin = null;

    #[ORM\Column(length: 255)]
    #[NotBlank(null,'the password field cannot be empty',null,null)]
    private ?string $password = null;
    public ? string $confirmPassword=null;

    #[ORM\OneToMany(targetEntity: Product::class, mappedBy: 'adder', orphanRemoval: true)]
    private Collection $products;

    #[ORM\OneToMany(targetEntity: TradeRequest::class, mappedBy: 'fromUser', orphanRemoval: true)]
    private Collection $fromRequestTrades;

    #[ORM\OneToMany(targetEntity: TradeRequest::class, mappedBy: 'toUser', orphanRemoval: true)]
    private Collection $toRequestTrades;

    public function __construct()
    {
        $this->products = new ArrayCollection();
        $this->fromRequestTrades = new ArrayCollection();
        $this->toRequestTrades = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): static
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): static
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function isIsAdmin(): ?bool
    {
        return $this->isAdmin;
    }

    public function setIsAdmin(bool $isAdmin): static
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }
    public function getRoles(): array
    {
        if($this->isAdmin){
            return ['admin'];
        }
        return ['user'];
        // TODO: Implement getRoles() method.
    }
    public function eraseCredentials(): void
    {
        // TODO: Implement eraseCredentials() method.
    }
    public function getUserIdentifier(): string
    {
        return $this->email;
        // TODO: Implement getUserIdentifier() method.
    }

    /**
     * @return Collection<int, Product>
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(Product $product): static
    {
        if (!$this->products->contains($product)) {
            $this->products->add($product);
            $product->setAdder($this);
        }

        return $this;
    }

    public function removeProduct(Product $product): static
    {
        if ($this->products->removeElement($product)) {
            // set the owning side to null (unless already changed)
            if ($product->getAdder() === $this) {
                $product->setAdder(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, TradeRequest>
     */
    public function getFromRequestTrades(): Collection
    {
        return $this->fromRequestTrades;
    }

    public function addFromRequestTrade(TradeRequest $fromRequestTrade): static
    {
        if (!$this->fromRequestTrades->contains($fromRequestTrade)) {
            $this->fromRequestTrades->add($fromRequestTrade);
            $fromRequestTrade->setFromUser($this);
        }

        return $this;
    }

    public function removeFromRequestTrade(TradeRequest $fromRequestTrade): static
    {
        if ($this->fromRequestTrades->removeElement($fromRequestTrade)) {
            // set the owning side to null (unless already changed)
            if ($fromRequestTrade->getFromUser() === $this) {
                $fromRequestTrade->setFromUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, TradeRequest>
     */
    public function getToRequestTrades(): Collection
    {
        return $this->toRequestTrades;
    }

    public function addToRequestTrade(TradeRequest $toRequestTrade): static
    {
        if (!$this->toRequestTrades->contains($toRequestTrade)) {
            $this->toRequestTrades->add($toRequestTrade);
            $toRequestTrade->setToUser($this);
        }

        return $this;
    }

    public function removeToRequestTrade(TradeRequest $toRequestTrade): static
    {
        if ($this->toRequestTrades->removeElement($toRequestTrade)) {
            // set the owning side to null (unless already changed)
            if ($toRequestTrade->getToUser() === $this) {
                $toRequestTrade->setToUser(null);
            }
        }

        return $this;
    }
}
