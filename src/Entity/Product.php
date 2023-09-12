<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
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
    private $productName;

    /**
     * @ORM\Column(type="text")
     */
    private $productInfo;

    /**
     * @ORM\Column(type="decimal", precision=8, scale=2)
     */
    private $productPrice;

    /**
     * @ORM\Column(type="decimal", precision=8, scale=2, nullable=true)
     */
    private $retailPrice;

    /**
     * @ORM\Column(type="integer")
     */
    private $weight;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $productNumber;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="products")
     */
    private $category;

    /**
     * @ORM\ManyToOne(targetEntity=Company::class, inversedBy="products")
     */
    private $company;

    /**
     * @ORM\Column (type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @ORM\ManyToOne(targetEntity=Region::class, inversedBy="products")
     */
    private $region;

    /**
     * @ORM\ManyToMany(targetEntity=Vine::class, inversedBy="products")
     */
    private $vine;

    public function __construct()
    {
        $this->vine = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductName(): ?string
    {
        return $this->productName;
    }

    public function setProductName(string $productName): self
    {
        $this->productName = $productName;

        return $this;
    }

    public function getProductInfo(): ?string
    {
        return $this->productInfo;
    }

    public function setProductInfo(string $productInfo): self
    {
        $this->productInfo = $productInfo;

        return $this;
    }

    public function getProductPrice(): ?string
    {
        return $this->productPrice;
    }

    public function setProductPrice(string $productPrice): self
    {
        $this->productPrice = $productPrice;

        return $this;
    }

    public function getRetailPrice(): ?string
    {
        return $this->retailPrice;
    }

    public function setRetailPrice(?string $retailPrice): self
    {
        $this->retailPrice = $retailPrice;

        return $this;
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function setWeight(int $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getProductNumber(): ?string
    {
        return $this->productNumber;
    }

    public function setProductNumber(?string $productNumber): self
    {
        $this->productNumber = $productNumber;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getCompany(): ?Company
    {
        return $this->company;
    }

    public function setCompany(?Company $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getRegion(): ?Region
    {
        return $this->region;
    }

    public function setRegion(?Region $region): self
    {
        $this->region = $region;

        return $this;
    }

    /**
     * @return Collection<int, Vine>
     */
    public function getVine(): Collection
    {
        return $this->vine;
    }

    public function addVine(Vine $vine): self
    {
        if (!$this->vine->contains($vine)) {
            $this->vine[] = $vine;
        }

        return $this;
    }

    public function removeVine(Vine $vine): self
    {
        $this->vine->removeElement($vine);

        return $this;
    }
}
