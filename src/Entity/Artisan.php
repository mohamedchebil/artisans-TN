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

    #[ORM\Column(length: 255)]
    private ?string $typeProduit = null;







    public function isEtatCompte(): ?bool
    {
        return $this->etatCompte;
    }

    public function setEtatCompte(bool $etatCompte): static
    {
        $this->etatCompte = $etatCompte;

        return $this;
    }

    public function getTypeProduit(): ?string
    {
        return $this->typeProduit;
    }

    public function setTypeProduit(string $typeProduit): static
    {
        $this->typeProduit = $typeProduit;

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




}
