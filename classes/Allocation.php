<?php

class Allocation
{

    /**
     * @var int $OrderItemID
     */
    protected $OrderItemID = null;

    /**
     * @var float $Allocated
     */
    protected $Allocated = null;

    /**
     * @var float $Shipped
     */
    protected $Shipped = null;

    /**
     * @param int $OrderItemID
     * @param float $Allocated
     * @param float $Shipped
     */
    public function __construct($OrderItemID, $Allocated, $Shipped)
    {
      $this->OrderItemID = $OrderItemID;
      $this->Allocated = $Allocated;
      $this->Shipped = $Shipped;
    }

    /**
     * @return int
     */
    public function getOrderItemID()
    {
      return $this->OrderItemID;
    }

    /**
     * @param int $OrderItemID
     * @return Allocation
     */
    public function setOrderItemID($OrderItemID)
    {
      $this->OrderItemID = $OrderItemID;
      return $this;
    }

    /**
     * @return float
     */
    public function getAllocated()
    {
      return $this->Allocated;
    }

    /**
     * @param float $Allocated
     * @return Allocation
     */
    public function setAllocated($Allocated)
    {
      $this->Allocated = $Allocated;
      return $this;
    }

    /**
     * @return float
     */
    public function getShipped()
    {
      return $this->Shipped;
    }

    /**
     * @param float $Shipped
     * @return Allocation
     */
    public function setShipped($Shipped)
    {
      $this->Shipped = $Shipped;
      return $this;
    }

}
