<?php

namespace App\Entity;

use App\Repository\VineRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VineRepository::class)
 */
class Vine
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $grapeVarietyName;

    /**
     * @ORM\OneToMany(targetEntity=Product::class, mappedBy="vine")
     */
    private $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGrapeVarietyName(): ?string
    {
        return $this->grapeVarietyName;
    }

    public function setGrapeVarietyName(string $grapeVarietyName): self
    {
        $this->grapeVarietyName = $grapeVarietyName;

        return $this;
    }

    /**
     * @return Collection<int, Product>
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(Product $product): self
    {
        if (!$this->products->contains($product)) {
            $this->products[] = $product;
            $product->setVine($this);
        }

        return $this;
    }

    public function removeProduct(Product $product): self
    {
        if ($this->products->removeElement($product)) {
            // set the owning side to null (unless already changed)
            if ($product->getVine() === $this) {
                $product->setVine(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->grapeVarietyName;
    }
}
