<?php

namespace App\Entity;

use App\Repository\ProductFiltersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductFiltersRepository::class)
 */
class ProductFilters
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    private $product_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduct_id(): ?int
    {
        return $this->product_id;
    }
}
