<?php

namespace App\Entity;

use App\Repository\ArtisanRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArtisanRepository::class)]
class Artisan extends User
{
    #[ORM\Column]
    private ?bool $etatCompte = null;

    #[ORM\OneToMany(mappedBy: 'idArtisan', targetEntity: Product::class, orphanRemoval: true)]
    private Collection $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }



    public function isEtatCompte(): ?bool
    {
        return $this->etatCompte;
    }

    public function setEtatCompte(bool $etatCompte): static
    {
        $this->etatCompte = $etatCompte;

        return $this;
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
            $product->setIdArtisan($this);
        }

        return $this;
    }

    public function removeProduct(Product $product): static
    {
        if ($this->products->removeElement($product)) {
            // set the owning side to null (unless already changed)
            if ($product->getIdArtisan() === $this) {
                $product->setIdArtisan(null);
            }
        }

        return $this;
    }


}
