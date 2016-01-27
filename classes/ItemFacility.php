<?php

class ItemFacility
{

    /**
     * @var string $FacilityIdOrName
     */
    protected $FacilityIdOrName = null;

    /**
     * @var string $StorageUnitOfMeasure
     */
    protected $StorageUnitOfMeasure = null;

    /**
     * @var float $InventoryUnitsPerStorageUnit
     */
    protected $InventoryUnitsPerStorageUnit = null;

    /**
     * @var float $RcvHandlingRate
     */
    protected $RcvHandlingRate = null;

    /**
     * @var float $OrdHandlingRate
     */
    protected $OrdHandlingRate = null;

    /**
     * @var float $StorageSplitHalfRate
     */
    protected $StorageSplitHalfRate = null;

    /**
     * @var float $StorageSplitFullRate
     */
    protected $StorageSplitFullRate = null;

    /**
     * @var int $StorageFreeDays
     */
    protected $StorageFreeDays = null;

    /**
     * @param float $InventoryUnitsPerStorageUnit
     * @param float $RcvHandlingRate
     * @param float $OrdHandlingRate
     * @param float $StorageSplitHalfRate
     * @param float $StorageSplitFullRate
     * @param int $StorageFreeDays
     */
    public function __construct($InventoryUnitsPerStorageUnit, $RcvHandlingRate, $OrdHandlingRate, $StorageSplitHalfRate, $StorageSplitFullRate, $StorageFreeDays)
    {
      $this->InventoryUnitsPerStorageUnit = $InventoryUnitsPerStorageUnit;
      $this->RcvHandlingRate = $RcvHandlingRate;
      $this->OrdHandlingRate = $OrdHandlingRate;
      $this->StorageSplitHalfRate = $StorageSplitHalfRate;
      $this->StorageSplitFullRate = $StorageSplitFullRate;
      $this->StorageFreeDays = $StorageFreeDays;
    }

    /**
     * @return string
     */
    public function getFacilityIdOrName()
    {
      return $this->FacilityIdOrName;
    }

    /**
     * @param string $FacilityIdOrName
     * @return ItemFacility
     */
    public function setFacilityIdOrName($FacilityIdOrName)
    {
      $this->FacilityIdOrName = $FacilityIdOrName;
      return $this;
    }

    /**
     * @return string
     */
    public function getStorageUnitOfMeasure()
    {
      return $this->StorageUnitOfMeasure;
    }

    /**
     * @param string $StorageUnitOfMeasure
     * @return ItemFacility
     */
    public function setStorageUnitOfMeasure($StorageUnitOfMeasure)
    {
      $this->StorageUnitOfMeasure = $StorageUnitOfMeasure;
      return $this;
    }

    /**
     * @return float
     */
    public function getInventoryUnitsPerStorageUnit()
    {
      return $this->InventoryUnitsPerStorageUnit;
    }

    /**
     * @param float $InventoryUnitsPerStorageUnit
     * @return ItemFacility
     */
    public function setInventoryUnitsPerStorageUnit($InventoryUnitsPerStorageUnit)
    {
      $this->InventoryUnitsPerStorageUnit = $InventoryUnitsPerStorageUnit;
      return $this;
    }

    /**
     * @return float
     */
    public function getRcvHandlingRate()
    {
      return $this->RcvHandlingRate;
    }

    /**
     * @param float $RcvHandlingRate
     * @return ItemFacility
     */
    public function setRcvHandlingRate($RcvHandlingRate)
    {
      $this->RcvHandlingRate = $RcvHandlingRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getOrdHandlingRate()
    {
      return $this->OrdHandlingRate;
    }

    /**
     * @param float $OrdHandlingRate
     * @return ItemFacility
     */
    public function setOrdHandlingRate($OrdHandlingRate)
    {
      $this->OrdHandlingRate = $OrdHandlingRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getStorageSplitHalfRate()
    {
      return $this->StorageSplitHalfRate;
    }

    /**
     * @param float $StorageSplitHalfRate
     * @return ItemFacility
     */
    public function setStorageSplitHalfRate($StorageSplitHalfRate)
    {
      $this->StorageSplitHalfRate = $StorageSplitHalfRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getStorageSplitFullRate()
    {
      return $this->StorageSplitFullRate;
    }

    /**
     * @param float $StorageSplitFullRate
     * @return ItemFacility
     */
    public function setStorageSplitFullRate($StorageSplitFullRate)
    {
      $this->StorageSplitFullRate = $StorageSplitFullRate;
      return $this;
    }

    /**
     * @return int
     */
    public function getStorageFreeDays()
    {
      return $this->StorageFreeDays;
    }

    /**
     * @param int $StorageFreeDays
     * @return ItemFacility
     */
    public function setStorageFreeDays($StorageFreeDays)
    {
      $this->StorageFreeDays = $StorageFreeDays;
      return $this;
    }

}
