<?php
namespace NeueFische\Entities;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="order")
 */
class Order {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer") 
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /** 
     * @ORM\Column(type="integer") 
     */
    protected $customerId; 

    /** 
     * @ORM\Column(type="datetime") 
     */
    protected $createdDatetime;

    /** 
     * @ORM\Column(type="integer") 
     */
    protected $totalSum;


    public function getId(): int {
        return $this->id;
    }
    public function setId(int $id) {
        $this->id = $id;
    }

    public function getCustomerId(): int {
        return $this->customerId;
    }
    public function setCustomerId(int $customerId): void {
        $this->customerId = $customerId;
    }

    public function getCreatedDatetime(): DateTime {
        return $this->createdDatetime;
    }
    public function setCreatedDatetime(DateTime $createdDatetime): void {
        $this->createdDatetime = $createdDatetime;
    }

    public function getTotalSum(): int {
        return $this->totalSum;
    }
    public function setTotalSum(int $totalSum): void {
        $this->totalSum = $totalSum;

    }

}



