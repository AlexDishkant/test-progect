<?php

namespace App\Entity;

use App\Repository\CatalogRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CatalogRepository::class)
 */
class Catalog
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    private $name;

    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getName(): ?int
    {
        return $this->name;
    }

    public function getDescription(): ?int
    {
        return $this->description;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
