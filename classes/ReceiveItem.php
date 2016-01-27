<?php

class ReceiveItem
{

    /**
     * @var int $ReceiveItemID
     */
    protected $ReceiveItemID = null;

    /**
     * @var int $WarehouseTransactionID
     */
    protected $WarehouseTransactionID = null;

    /**
     * @var I18nDateTime $ReceivedDate
     */
    protected $ReceivedDate = null;

    /**
     * @var int $ItemID
     */
    protected $ItemID = null;

    /**
     * @var string $SKU
     */
    protected $SKU = null;

    /**
     * @var string $Qualifier
     */
    protected $Qualifier = null;

    /**
     * @var float $OrigQtyPrimary
     */
    protected $OrigQtyPrimary = null;

    /**
     * @var float $OrigQtySecondary
     */
    protected $OrigQtySecondary = null;

    /**
     * @var float $OnHand
     */
    protected $OnHand = null;

    /**
     * @var float $Quarantined
     */
    protected $Quarantined = null;

    /**
     * @var float $Allocated
     */
    protected $Allocated = null;

    /**
     * @var float $Weight
     */
    protected $Weight = null;

    /**
     * @var float $Length
     */
    protected $Length = null;

    /**
     * @var float $Width
     */
    protected $Width = null;

    /**
     * @var float $Height
     */
    protected $Height = null;

    /**
     * @var float $Cost
     */
    protected $Cost = null;

    /**
     * @var string $LotNumber
     */
    protected $LotNumber = null;

    /**
     * @var string $SerialNumber
     */
    protected $SerialNumber = null;

    /**
     * @var I18nDateTime $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @var int $LocationID
     */
    protected $LocationID = null;

    /**
     * @var string $LocDesc
     */
    protected $LocDesc = null;

    /**
     * @var string $Field1
     */
    protected $Field1 = null;

    /**
     * @var string $Field2
     */
    protected $Field2 = null;

    /**
     * @var string $Field3
     */
    protected $Field3 = null;

    /**
     * @var string $Field4
     */
    protected $Field4 = null;

    /**
     * @var string $Display
     */
    protected $Display = null;

    /**
     * @var LocationType $LocationTypeID
     */
    protected $LocationTypeID = null;

    /**
     * @var boolean $SplitPeriodStorageCharged
     */
    protected $SplitPeriodStorageCharged = null;

    /**
     * @var int $SupplierContactID
     */
    protected $SupplierContactID = null;

    /**
     * @var int $MovableUnitID
     */
    protected $MovableUnitID = null;

    /**
     * @var string $MovableUnitLabel
     */
    protected $MovableUnitLabel = null;

    /**
     * @var string $Supplier
     */
    protected $Supplier = null;

    /**
     * @var float $ExpectedQty
     */
    protected $ExpectedQty = null;

    /**
     * @var I18nDateTime $FullyShippedDate
     */
    protected $FullyShippedDate = null;

    /**
     * @var UnitOfMeasure $ReceiveUnitOfMeasureType
     */
    protected $ReceiveUnitOfMeasureType = null;

    /**
     * @var ArrayOfCodeDescrPair1 $SavedElements
     */
    protected $SavedElements = null;

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
     */
    public function __construct($ReceiveItemID, $WarehouseTransactionID, $ItemID, $OrigQtyPrimary, $OrigQtySecondary, $OnHand, $Quarantined, $Allocated, $Weight, $Length, $Width, $Height, $Cost, $LocationID, $LocationTypeID, $SplitPeriodStorageCharged, $SupplierContactID, $MovableUnitID, $ExpectedQty)
    {
      $this->ReceiveItemID = $ReceiveItemID;
      $this->WarehouseTransactionID = $WarehouseTransactionID;
      $this->ItemID = $ItemID;
      $this->OrigQtyPrimary = $OrigQtyPrimary;
      $this->OrigQtySecondary = $OrigQtySecondary;
      $this->OnHand = $OnHand;
      $this->Quarantined = $Quarantined;
      $this->Allocated = $Allocated;
      $this->Weight = $Weight;
      $this->Length = $Length;
      $this->Width = $Width;
      $this->Height = $Height;
      $this->Cost = $Cost;
      $this->LocationID = $LocationID;
      $this->LocationTypeID = $LocationTypeID;
      $this->SplitPeriodStorageCharged = $SplitPeriodStorageCharged;
      $this->SupplierContactID = $SupplierContactID;
      $this->MovableUnitID = $MovableUnitID;
      $this->ExpectedQty = $ExpectedQty;
    }

    /**
     * @return int
     */
    public function getReceiveItemID()
    {
      return $this->ReceiveItemID;
    }

    /**
     * @param int $ReceiveItemID
     * @return ReceiveItem
     */
    public function setReceiveItemID($ReceiveItemID)
    {
      $this->ReceiveItemID = $ReceiveItemID;
      return $this;
    }

    /**
     * @return int
     */
    public function getWarehouseTransactionID()
    {
      return $this->WarehouseTransactionID;
    }

    /**
     * @param int $WarehouseTransactionID
     * @return ReceiveItem
     */
    public function setWarehouseTransactionID($WarehouseTransactionID)
    {
      $this->WarehouseTransactionID = $WarehouseTransactionID;
      return $this;
    }

    /**
     * @return I18nDateTime
     */
    public function getReceivedDate()
    {
      return $this->ReceivedDate;
    }

    /**
     * @param I18nDateTime $ReceivedDate
     * @return ReceiveItem
     */
    public function setReceivedDate($ReceivedDate)
    {
      $this->ReceivedDate = $ReceivedDate;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemID()
    {
      return $this->ItemID;
    }

    /**
     * @param int $ItemID
     * @return ReceiveItem
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSKU()
    {
      return $this->SKU;
    }

    /**
     * @param string $SKU
     * @return ReceiveItem
     */
    public function setSKU($SKU)
    {
      $this->SKU = $SKU;
      return $this;
    }

    /**
     * @return string
     */
    public function getQualifier()
    {
      return $this->Qualifier;
    }

    /**
     * @param string $Qualifier
     * @return ReceiveItem
     */
    public function setQualifier($Qualifier)
    {
      $this->Qualifier = $Qualifier;
      return $this;
    }

    /**
     * @return float
     */
    public function getOrigQtyPrimary()
    {
      return $this->OrigQtyPrimary;
    }

    /**
     * @param float $OrigQtyPrimary
     * @return ReceiveItem
     */
    public function setOrigQtyPrimary($OrigQtyPrimary)
    {
      $this->OrigQtyPrimary = $OrigQtyPrimary;
      return $this;
    }

    /**
     * @return float
     */
    public function getOrigQtySecondary()
    {
      return $this->OrigQtySecondary;
    }

    /**
     * @param float $OrigQtySecondary
     * @return ReceiveItem
     */
    public function setOrigQtySecondary($OrigQtySecondary)
    {
      $this->OrigQtySecondary = $OrigQtySecondary;
      return $this;
    }

    /**
     * @return float
     */
    public function getOnHand()
    {
      return $this->OnHand;
    }

    /**
     * @param float $OnHand
     * @return ReceiveItem
     */
    public function setOnHand($OnHand)
    {
      $this->OnHand = $OnHand;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuarantined()
    {
      return $this->Quarantined;
    }

    /**
     * @param float $Quarantined
     * @return ReceiveItem
     */
    public function setQuarantined($Quarantined)
    {
      $this->Quarantined = $Quarantined;
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
     * @return ReceiveItem
     */
    public function setAllocated($Allocated)
    {
      $this->Allocated = $Allocated;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param float $Weight
     * @return ReceiveItem
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return float
     */
    public function getLength()
    {
      return $this->Length;
    }

    /**
     * @param float $Length
     * @return ReceiveItem
     */
    public function setLength($Length)
    {
      $this->Length = $Length;
      return $this;
    }

    /**
     * @return float
     */
    public function getWidth()
    {
      return $this->Width;
    }

    /**
     * @param float $Width
     * @return ReceiveItem
     */
    public function setWidth($Width)
    {
      $this->Width = $Width;
      return $this;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
      return $this->Height;
    }

    /**
     * @param float $Height
     * @return ReceiveItem
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
      return $this;
    }

    /**
     * @return float
     */
    public function getCost()
    {
      return $this->Cost;
    }

    /**
     * @param float $Cost
     * @return ReceiveItem
     */
    public function setCost($Cost)
    {
      $this->Cost = $Cost;
      return $this;
    }

    /**
     * @return string
     */
    public function getLotNumber()
    {
      return $this->LotNumber;
    }

    /**
     * @param string $LotNumber
     * @return ReceiveItem
     */
    public function setLotNumber($LotNumber)
    {
      $this->LotNumber = $LotNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumber()
    {
      return $this->SerialNumber;
    }

    /**
     * @param string $SerialNumber
     * @return ReceiveItem
     */
    public function setSerialNumber($SerialNumber)
    {
      $this->SerialNumber = $SerialNumber;
      return $this;
    }

    /**
     * @return I18nDateTime
     */
    public function getExpirationDate()
    {
      return $this->ExpirationDate;
    }

    /**
     * @param I18nDateTime $ExpirationDate
     * @return ReceiveItem
     */
    public function setExpirationDate($ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate;
      return $this;
    }

    /**
     * @return int
     */
    public function getLocationID()
    {
      return $this->LocationID;
    }

    /**
     * @param int $LocationID
     * @return ReceiveItem
     */
    public function setLocationID($LocationID)
    {
      $this->LocationID = $LocationID;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocDesc()
    {
      return $this->LocDesc;
    }

    /**
     * @param string $LocDesc
     * @return ReceiveItem
     */
    public function setLocDesc($LocDesc)
    {
      $this->LocDesc = $LocDesc;
      return $this;
    }

    /**
     * @return string
     */
    public function getField1()
    {
      return $this->Field1;
    }

    /**
     * @param string $Field1
     * @return ReceiveItem
     */
    public function setField1($Field1)
    {
      $this->Field1 = $Field1;
      return $this;
    }

    /**
     * @return string
     */
    public function getField2()
    {
      return $this->Field2;
    }

    /**
     * @param string $Field2
     * @return ReceiveItem
     */
    public function setField2($Field2)
    {
      $this->Field2 = $Field2;
      return $this;
    }

    /**
     * @return string
     */
    public function getField3()
    {
      return $this->Field3;
    }

    /**
     * @param string $Field3
     * @return ReceiveItem
     */
    public function setField3($Field3)
    {
      $this->Field3 = $Field3;
      return $this;
    }

    /**
     * @return string
     */
    public function getField4()
    {
      return $this->Field4;
    }

    /**
     * @param string $Field4
     * @return ReceiveItem
     */
    public function setField4($Field4)
    {
      $this->Field4 = $Field4;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplay()
    {
      return $this->Display;
    }

    /**
     * @param string $Display
     * @return ReceiveItem
     */
    public function setDisplay($Display)
    {
      $this->Display = $Display;
      return $this;
    }

    /**
     * @return LocationType
     */
    public function getLocationTypeID()
    {
      return $this->LocationTypeID;
    }

    /**
     * @param LocationType $LocationTypeID
     * @return ReceiveItem
     */
    public function setLocationTypeID($LocationTypeID)
    {
      $this->LocationTypeID = $LocationTypeID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSplitPeriodStorageCharged()
    {
      return $this->SplitPeriodStorageCharged;
    }

    /**
     * @param boolean $SplitPeriodStorageCharged
     * @return ReceiveItem
     */
    public function setSplitPeriodStorageCharged($SplitPeriodStorageCharged)
    {
      $this->SplitPeriodStorageCharged = $SplitPeriodStorageCharged;
      return $this;
    }

    /**
     * @return int
     */
    public function getSupplierContactID()
    {
      return $this->SupplierContactID;
    }

    /**
     * @param int $SupplierContactID
     * @return ReceiveItem
     */
    public function setSupplierContactID($SupplierContactID)
    {
      $this->SupplierContactID = $SupplierContactID;
      return $this;
    }

    /**
     * @return int
     */
    public function getMovableUnitID()
    {
      return $this->MovableUnitID;
    }

    /**
     * @param int $MovableUnitID
     * @return ReceiveItem
     */
    public function setMovableUnitID($MovableUnitID)
    {
      $this->MovableUnitID = $MovableUnitID;
      return $this;
    }

    /**
     * @return string
     */
    public function getMovableUnitLabel()
    {
      return $this->MovableUnitLabel;
    }

    /**
     * @param string $MovableUnitLabel
     * @return ReceiveItem
     */
    public function setMovableUnitLabel($MovableUnitLabel)
    {
      $this->MovableUnitLabel = $MovableUnitLabel;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplier()
    {
      return $this->Supplier;
    }

    /**
     * @param string $Supplier
     * @return ReceiveItem
     */
    public function setSupplier($Supplier)
    {
      $this->Supplier = $Supplier;
      return $this;
    }

    /**
     * @return float
     */
    public function getExpectedQty()
    {
      return $this->ExpectedQty;
    }

    /**
     * @param float $ExpectedQty
     * @return ReceiveItem
     */
    public function setExpectedQty($ExpectedQty)
    {
      $this->ExpectedQty = $ExpectedQty;
      return $this;
    }

    /**
     * @return I18nDateTime
     */
    public function getFullyShippedDate()
    {
      return $this->FullyShippedDate;
    }

    /**
     * @param I18nDateTime $FullyShippedDate
     * @return ReceiveItem
     */
    public function setFullyShippedDate($FullyShippedDate)
    {
      $this->FullyShippedDate = $FullyShippedDate;
      return $this;
    }

    /**
     * @return UnitOfMeasure
     */
    public function getReceiveUnitOfMeasureType()
    {
      return $this->ReceiveUnitOfMeasureType;
    }

    /**
     * @param UnitOfMeasure $ReceiveUnitOfMeasureType
     * @return ReceiveItem
     */
    public function setReceiveUnitOfMeasureType($ReceiveUnitOfMeasureType)
    {
      $this->ReceiveUnitOfMeasureType = $ReceiveUnitOfMeasureType;
      return $this;
    }

    /**
     * @return ArrayOfCodeDescrPair1
     */
    public function getSavedElements()
    {
      return $this->SavedElements;
    }

    /**
     * @param ArrayOfCodeDescrPair1 $SavedElements
     * @return ReceiveItem
     */
    public function setSavedElements($SavedElements)
    {
      $this->SavedElements = $SavedElements;
      return $this;
    }

}
