<?php

class ExtStockStatusEntry extends StockStatusEntry
{

    /**
     * @var float $ReceivedQty
     */
    protected $ReceivedQty = null;

    /**
     * @var int $PrimUomId
     */
    protected $PrimUomId = null;

    /**
     * @var int $SecUomId
     */
    protected $SecUomId = null;

    /**
     * @var int $DimUomId
     */
    protected $DimUomId = null;

    /**
     * @var int $LocationId
     */
    protected $LocationId = null;

    /**
     * @var int $SupplierContactId
     */
    protected $SupplierContactId = null;

    /**
     * @var int $MovableUnitId
     */
    protected $MovableUnitId = null;

    /**
     * @var float $InventoryUnitsPerLabelingUnit
     */
    protected $InventoryUnitsPerLabelingUnit = null;

    /**
     * @param int $FacilityID
     * @param int $CustomerID
     * @param int $ItemID
     * @param \DateTime $ExpirationDate
     * @param float $DimQty
     * @param float $SumOfOnHand
     * @param float $SumOfAllocated
     * @param float $SumOfAvailable
     * @param float $SumOfVAvailable
     * @param float $QuarantinedQty
     * @param float $OverOrdered
     * @param boolean $HasAvailable
     * @param float $Weight
     * @param float $Cartons
     * @param float $Min
     * @param float $Max
     * @param float $Volume
     * @param float $TotVolume
     * @param float $TotWeight
     * @param float $Cost
     * @param float $TrackByCost
     * @param float $ReceivedQty
     * @param int $PrimUomId
     */
    public function __construct($FacilityID, $CustomerID, $ItemID, \DateTime $ExpirationDate, $DimQty, $SumOfOnHand, $SumOfAllocated, $SumOfAvailable, $SumOfVAvailable, $QuarantinedQty, $OverOrdered, $HasAvailable, $Weight, $Cartons, $Min, $Max, $Volume, $TotVolume, $TotWeight, $Cost, $TrackByCost, $ReceivedQty, $PrimUomId)
    {
      parent::__construct($FacilityID, $CustomerID, $ItemID, $ExpirationDate, $DimQty, $SumOfOnHand, $SumOfAllocated, $SumOfAvailable, $SumOfVAvailable, $QuarantinedQty, $OverOrdered, $HasAvailable, $Weight, $Cartons, $Min, $Max, $Volume, $TotVolume, $TotWeight, $Cost, $TrackByCost);
      $this->ReceivedQty = $ReceivedQty;
      $this->PrimUomId = $PrimUomId;
    }

    /**
     * @return float
     */
    public function getReceivedQty()
    {
      return $this->ReceivedQty;
    }

    /**
     * @param float $ReceivedQty
     * @return ExtStockStatusEntry
     */
    public function setReceivedQty($ReceivedQty)
    {
      $this->ReceivedQty = $ReceivedQty;
      return $this;
    }

    /**
     * @return int
     */
    public function getPrimUomId()
    {
      return $this->PrimUomId;
    }

    /**
     * @param int $PrimUomId
     * @return ExtStockStatusEntry
     */
    public function setPrimUomId($PrimUomId)
    {
      $this->PrimUomId = $PrimUomId;
      return $this;
    }

    /**
     * @return int
     */
    public function getSecUomId()
    {
      return $this->SecUomId;
    }

    /**
     * @param int $SecUomId
     * @return ExtStockStatusEntry
     */
    public function setSecUomId($SecUomId)
    {
      $this->SecUomId = $SecUomId;
      return $this;
    }

    /**
     * @return int
     */
    public function getDimUomId()
    {
      return $this->DimUomId;
    }

    /**
     * @param int $DimUomId
     * @return ExtStockStatusEntry
     */
    public function setDimUomId($DimUomId)
    {
      $this->DimUomId = $DimUomId;
      return $this;
    }

    /**
     * @return int
     */
    public function getLocationId()
    {
      return $this->LocationId;
    }

    /**
     * @param int $LocationId
     * @return ExtStockStatusEntry
     */
    public function setLocationId($LocationId)
    {
      $this->LocationId = $LocationId;
      return $this;
    }

    /**
     * @return int
     */
    public function getSupplierContactId()
    {
      return $this->SupplierContactId;
    }

    /**
     * @param int $SupplierContactId
     * @return ExtStockStatusEntry
     */
    public function setSupplierContactId($SupplierContactId)
    {
      $this->SupplierContactId = $SupplierContactId;
      return $this;
    }

    /**
     * @return int
     */
    public function getMovableUnitId()
    {
      return $this->MovableUnitId;
    }

    /**
     * @param int $MovableUnitId
     * @return ExtStockStatusEntry
     */
    public function setMovableUnitId($MovableUnitId)
    {
      $this->MovableUnitId = $MovableUnitId;
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
     * @return ExtStockStatusEntry
     */
    public function setInventoryUnitsPerLabelingUnit($InventoryUnitsPerLabelingUnit)
    {
      $this->InventoryUnitsPerLabelingUnit = $InventoryUnitsPerLabelingUnit;
      return $this;
    }

}
