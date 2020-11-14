<?php
namespace NeueFische\Entities;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity
 * @ORM\Table(name="ordered_items")
 */
class OrderedItem {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer") 
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /** 
     * @ORM\Column(type="integer") 
     */
    protected $product_id; 

    /** 
     * @ORM\Column(type="integer") 
     */
    protected $quantity;

    /** 
     * @ORM\Column(type="integer") 
     */
    protected $price;


    

    /*private $order;

    public function setOrder(Order $o) {
        $this->order = $o;
    }*/

   

    public function getId(): int {
        return $this->id;
    }
    public function setId(int $id) {
        $this->id = $id;
    }

    public function getProductId(): int {
        return $this->product_id;
    }
    public function setProductId(int $product_id): void {
        $this->product_id = $product_id;
    }

    public function getQuantity(): int {
        return $this->quantity;
    }
    public function setQuantity(int $quantity): void {
        $this->quantity = $quantity;
    }

    public function getPrice(): int {
        return $this->price;
    }
    public function setPrice(int $price): void {
        $this->price = $price;

    }

}