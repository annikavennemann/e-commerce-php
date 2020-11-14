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
     * @ORM\Column(type="integer" , name="order_id") 
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /** 
     * @ORM\Column(type="integer") 
     */
    protected $customer_id; 

    /** 
     * @ORM\Column(type="datetime") 
     */
    protected $created_datetime;

    /** 
     * @ORM\Column(type="integer") 
     */
    protected $total_sum;


    public function getId(): int {
        return $this->id;
    }
    public function setId(int $id) {
        $this->id = $id;
    }

    public function getCustomerId(): int {
        return $this->customer_id;
    }
    public function setCustomerId(int $customer_id): void {
        $this->customer_id = $customer_id;
    }

    public function getCreatedDatetime(): DateTime {
        return $this->created_datetime;
    }
    public function setCreatedDatetime(DateTime $created_datetime): void {
        $this->created_datetime = $created_datetime;
    }

    public function getTotalSum(): int {
        return $this->total_sum;
    }
    public function setTotalSum(int $total_sum): void {
        $this->total_sum = $total_sum;

    }

}