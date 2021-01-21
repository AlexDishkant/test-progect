<?php

namespace App\Entity;

use App\Repository\ProductRepository;
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

    private $name;

    private $price;


    public function __construct ($name, $price, $description, Catalog $Catalog)
    {
        $this->setName($name);
        $this->setPrice($price);
        $this->setDescription($description);
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function getName(): ?int
    {
        return $this->name;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName (Product $name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setCatalog(Catalog $catalog)
    {
        $this->catalog = $catalog;
    }
}
