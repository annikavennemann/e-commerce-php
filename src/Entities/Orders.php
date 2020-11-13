<?php
namespace NeueFische\Entities;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="orders")
 */
class Order {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer") 
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

// oder vllt eine eigene Entity?

    /** 
     * @ORM\Column(type="array") 
     */
    protected $item; 

    /** 
     * @ORM\Column(type="integer") 
     */
    protected $price;

    /** 
     * @ORM\Column(type="string") 
     */
    protected $description;

    /** 
     * @ORM\Column(type="string") 
     */
    protected $usability;

    public function getId(): int {
        return $this->id;
    }
    public function setId(int $id) {
        $this->id = $id;
    }

    public function getName(): string {
        return $this->name;
    }
    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getPrice(): float {
        return $this->price;
    }
    public function setPrice(string $price): void {
        $this->price = $price;
    }

    public function getDescription(): string {
        return $this->description;
    }
    public function setDescription(string $description): void {
        $this->description = $description;
    }


    public function getUsability(): string {
        return $this->usability;
    }
    public function setUsability(string $usability): void {
        $this->usability = $usability;
    }

}