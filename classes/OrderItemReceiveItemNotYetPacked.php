<?php

class OrderItemReceiveItemNotYetPacked extends OrderItemReceiveItem
{

    /**
     * @var UnitOfMeasure $InventoryUnitOfMeasureType
     */
    protected $InventoryUnitOfMeasureType = null;

    /**
     * @var float $QtyPacked
     */
    protected $QtyPacked = null;

    /**
     * @var float $QtyToBePacked
     */
    protected $QtyToBePacked = null;

    /**
     * @param float $Qty
     * @param int $OrderItemID
     * @param int $ReceiveItemID
     * @param float $ProperlyPickedPrimary
     * @param float $ProperlyPickedSecondary
     * @param boolean $MarkedForDeletion
     * @param boolean $LoadedOut
     * @param float $QtyPacked
     * @param float $QtyToBePacked
     */
    public function __construct($Qty, $OrderItemID, $ReceiveItemID, $ProperlyPickedPrimary, $ProperlyPickedSecondary, $MarkedForDeletion, $LoadedOut, $QtyPacked, $QtyToBePacked)
    {
      parent::__construct($Qty, $OrderItemID, $ReceiveItemID, $ProperlyPickedPrimary, $ProperlyPickedSecondary, $MarkedForDeletion, $LoadedOut);
      $this->QtyPacked = $QtyPacked;
      $this->QtyToBePacked = $QtyToBePacked;
    }

    /**
     * @return UnitOfMeasure
     */
    public function getInventoryUnitOfMeasureType()
    {
      return $this->InventoryUnitOfMeasureType;
    }

    /**
     * @param UnitOfMeasure $InventoryUnitOfMeasureType
     * @return OrderItemReceiveItemNotYetPacked
     */
    public function setInventoryUnitOfMeasureType($InventoryUnitOfMeasureType)
    {
      $this->InventoryUnitOfMeasureType = $InventoryUnitOfMeasureType;
      return $this;
    }

    /**
     * @return float
     */
    public function getQtyPacked()
    {
      return $this->QtyPacked;
    }

    /**
     * @param float $QtyPacked
     * @return OrderItemReceiveItemNotYetPacked
     */
    public function setQtyPacked($QtyPacked)
    {
      $this->QtyPacked = $QtyPacked;
      return $this;
    }

    /**
     * @return float
     */
    public function getQtyToBePacked()
    {
      return $this->QtyToBePacked;
    }

    /**
     * @param float $QtyToBePacked
     * @return OrderItemReceiveItemNotYetPacked
     */
    public function setQtyToBePacked($QtyToBePacked)
    {
      $this->QtyToBePacked = $QtyToBePacked;
      return $this;
    }

}
