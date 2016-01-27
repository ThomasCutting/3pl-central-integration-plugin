<?php

class ReceiveItemWithAllocations extends ReceiveItem
{

    /**
     * @var int $AllocatePriority
     */
    protected $AllocatePriority = null;

    /**
     * @var int $InventoryMethodID
     */
    protected $InventoryMethodID = null;

    /**
     * @var float $InventoryUnitsPerLabelingUnit
     */
    protected $InventoryUnitsPerLabelingUnit = null;

    /**
     * @var ArrayOfAllocation $Allocations
     */
    protected $Allocations = null;

    /**
     * @param int $ReceiveItemID
     * @param int $WarehouseTransactionID
     * @param int $ItemID
     * @param float $OrigQtyPrimary
     * @param float $OrigQtySecondary
     * @param float $OnHand
     * @param float $Quarantined
     * @param float $Allocated
     * @param float $Weight
     * @param float $Length
     * @param float $Width
     * @param float $Height
     * @param float $Cost
     * @param int $LocationID
     * @param LocationType $LocationTypeID
     * @param boolean $SplitPeriodStorageCharged
     * @param int $SupplierContactID
     * @param int $MovableUnitID
     * @param float $ExpectedQty
     * @param int $AllocatePriority
     * @param int $InventoryMethodID
     * @param float $InventoryUnitsPerLabelingUnit
     */
    public function __construct($ReceiveItemID, $WarehouseTransactionID, $ItemID, $OrigQtyPrimary, $OrigQtySecondary, $OnHand, $Quarantined, $Allocated, $Weight, $Length, $Width, $Height, $Cost, $LocationID, $LocationTypeID, $SplitPeriodStorageCharged, $SupplierContactID, $MovableUnitID, $ExpectedQty, $AllocatePriority, $InventoryMethodID, $InventoryUnitsPerLabelingUnit)
    {
      parent::__construct($ReceiveItemID, $WarehouseTransactionID, $ItemID, $OrigQtyPrimary, $OrigQtySecondary, $OnHand, $Quarantined, $Allocated, $Weight, $Length, $Width, $Height, $Cost, $LocationID, $LocationTypeID, $SplitPeriodStorageCharged, $SupplierContactID, $MovableUnitID, $ExpectedQty);
      $this->AllocatePriority = $AllocatePriority;
      $this->InventoryMethodID = $InventoryMethodID;
      $this->InventoryUnitsPerLabelingUnit = $InventoryUnitsPerLabelingUnit;
    }

    /**
     * @return int
     */
    public function getAllocatePriority()
    {
      return $this->AllocatePriority;
    }

    /**
     * @param int $AllocatePriority
     * @return ReceiveItemWithAllocations
     */
    public function setAllocatePriority($AllocatePriority)
    {
      $this->AllocatePriority = $AllocatePriority;
      return $this;
    }

    /**
     * @return int
     */
    public function getInventoryMethodID()
    {
      return $this->InventoryMethodID;
    }

    /**
     * @param int $InventoryMethodID
     * @return ReceiveItemWithAllocations
     */
    public function setInventoryMethodID($InventoryMethodID)
    {
      $this->InventoryMethodID = $InventoryMethodID;
      return $this;
    }

    /**
     * @return float
     */
    public function getInventoryUnitsPerLabelingUnit()
    {
      return $this->InventoryUnitsPerLabelingUnit;
    }

    /**
     * @param float $InventoryUnitsPerLabelingUnit
     * @return ReceiveItemWithAllocations
     */
    public function setInventoryUnitsPerLabelingUnit($InventoryUnitsPerLabelingUnit)
    {
      $this->InventoryUnitsPerLabelingUnit = $InventoryUnitsPerLabelingUnit;
      return $this;
    }

    /**
     * @return ArrayOfAllocation
     */
    public function getAllocations()
    {
      return $this->Allocations;
    }

    /**
     * @param ArrayOfAllocation $Allocations
     * @return ReceiveItemWithAllocations
     */
    public function setAllocations($Allocations)
    {
      $this->Allocations = $Allocations;
      return $this;
    }

}
