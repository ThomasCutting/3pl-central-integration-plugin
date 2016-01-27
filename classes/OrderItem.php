<?php

class OrderItem
{

    /**
     * @var int $OrderItemID
     */
    protected $OrderItemID = null;

    /**
     * @var int $WarehouseTransactionID
     */
    protected $WarehouseTransactionID = null;

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
     * @var float $PrimaryInvQty
     */
    protected $PrimaryInvQty = null;

    /**
     * @var boolean $IsPrimaryEstimate
     */
    protected $IsPrimaryEstimate = null;

    /**
     * @var boolean $IsSecondaryEstimate
     */
    protected $IsSecondaryEstimate = null;

    /**
     * @var float $SecondaryInvQty
     */
    protected $SecondaryInvQty = null;

    /**
     * @var float $OrderQty
     */
    protected $OrderQty = null;

    /**
     * @var UnitOfMeasure $OrderUnitOfMeasureType
     */
    protected $OrderUnitOfMeasureType = null;

    /**
     * @var string $UPC
     */
    protected $UPC = null;

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
     * @var float $Available
     */
    protected $Available = null;

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
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var float $FulfillInvSalePrice
     */
    protected $FulfillInvSalePrice = null;

    /**
     * @var float $FulfillInvDiscountPct
     */
    protected $FulfillInvDiscountPct = null;

    /**
     * @var float $FulfillInvDiscountAmt
     */
    protected $FulfillInvDiscountAmt = null;

    /**
     * @var float $Qty
     */
    protected $Qty = null;

    /**
     * @var ArrayOfOrderItemReceiveItem $OrderItemReceiveItems
     */
    protected $OrderItemReceiveItems = null;

    /**
     * @var ArrayOfCodeDescrPair1 $SavedElements
     */
    protected $SavedElements = null;

    /**
     * @param int $OrderItemID
     * @param int $WarehouseTransactionID
     * @param int $ItemID
     * @param float $PrimaryInvQty
     * @param boolean $IsPrimaryEstimate
     * @param boolean $IsSecondaryEstimate
     * @param float $SecondaryInvQty
     * @param float $OrderQty
     * @param float $Weight
     * @param float $Length
     * @param float $Width
     * @param float $Height
     * @param float $Available
     * @param float $FulfillInvSalePrice
     * @param float $FulfillInvDiscountPct
     * @param float $FulfillInvDiscountAmt
     * @param float $Qty
     */
    public function __construct($OrderItemID, $WarehouseTransactionID, $ItemID, $PrimaryInvQty, $IsPrimaryEstimate, $IsSecondaryEstimate, $SecondaryInvQty, $OrderQty, $Weight, $Length, $Width, $Height, $Available, $FulfillInvSalePrice, $FulfillInvDiscountPct, $FulfillInvDiscountAmt, $Qty)
    {
      $this->OrderItemID = $OrderItemID;
      $this->WarehouseTransactionID = $WarehouseTransactionID;
      $this->ItemID = $ItemID;
      $this->PrimaryInvQty = $PrimaryInvQty;
      $this->IsPrimaryEstimate = $IsPrimaryEstimate;
      $this->IsSecondaryEstimate = $IsSecondaryEstimate;
      $this->SecondaryInvQty = $SecondaryInvQty;
      $this->OrderQty = $OrderQty;
      $this->Weight = $Weight;
      $this->Length = $Length;
      $this->Width = $Width;
      $this->Height = $Height;
      $this->Available = $Available;
      $this->FulfillInvSalePrice = $FulfillInvSalePrice;
      $this->FulfillInvDiscountPct = $FulfillInvDiscountPct;
      $this->FulfillInvDiscountAmt = $FulfillInvDiscountAmt;
      $this->Qty = $Qty;
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
     * @return OrderItem
     */
    public function setOrderItemID($OrderItemID)
    {
      $this->OrderItemID = $OrderItemID;
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
     * @return OrderItem
     */
    public function setWarehouseTransactionID($WarehouseTransactionID)
    {
      $this->WarehouseTransactionID = $WarehouseTransactionID;
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
     * @return OrderItem
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
     * @return OrderItem
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
     * @return OrderItem
     */
    public function setQualifier($Qualifier)
    {
      $this->Qualifier = $Qualifier;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrimaryInvQty()
    {
      return $this->PrimaryInvQty;
    }

    /**
     * @param float $PrimaryInvQty
     * @return OrderItem
     */
    public function setPrimaryInvQty($PrimaryInvQty)
    {
      $this->PrimaryInvQty = $PrimaryInvQty;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPrimaryEstimate()
    {
      return $this->IsPrimaryEstimate;
    }

    /**
     * @param boolean $IsPrimaryEstimate
     * @return OrderItem
     */
    public function setIsPrimaryEstimate($IsPrimaryEstimate)
    {
      $this->IsPrimaryEstimate = $IsPrimaryEstimate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSecondaryEstimate()
    {
      return $this->IsSecondaryEstimate;
    }

    /**
     * @param boolean $IsSecondaryEstimate
     * @return OrderItem
     */
    public function setIsSecondaryEstimate($IsSecondaryEstimate)
    {
      $this->IsSecondaryEstimate = $IsSecondaryEstimate;
      return $this;
    }

    /**
     * @return float
     */
    public function getSecondaryInvQty()
    {
      return $this->SecondaryInvQty;
    }

    /**
     * @param float $SecondaryInvQty
     * @return OrderItem
     */
    public function setSecondaryInvQty($SecondaryInvQty)
    {
      $this->SecondaryInvQty = $SecondaryInvQty;
      return $this;
    }

    /**
     * @return float
     */
    public function getOrderQty()
    {
      return $this->OrderQty;
    }

    /**
     * @param float $OrderQty
     * @return OrderItem
     */
    public function setOrderQty($OrderQty)
    {
      $this->OrderQty = $OrderQty;
      return $this;
    }

    /**
     * @return UnitOfMeasure
     */
    public function getOrderUnitOfMeasureType()
    {
      return $this->OrderUnitOfMeasureType;
    }

    /**
     * @param UnitOfMeasure $OrderUnitOfMeasureType
     * @return OrderItem
     */
    public function setOrderUnitOfMeasureType($OrderUnitOfMeasureType)
    {
      $this->OrderUnitOfMeasureType = $OrderUnitOfMeasureType;
      return $this;
    }

    /**
     * @return string
     */
    public function getUPC()
    {
      return $this->UPC;
    }

    /**
     * @param string $UPC
     * @return OrderItem
     */
    public function setUPC($UPC)
    {
      $this->UPC = $UPC;
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
     * @return OrderItem
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
     * @return OrderItem
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
     * @return OrderItem
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
     * @return OrderItem
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
      return $this;
    }

    /**
     * @return float
     */
    public function getAvailable()
    {
      return $this->Available;
    }

    /**
     * @param float $Available
     * @return OrderItem
     */
    public function setAvailable($Available)
    {
      $this->Available = $Available;
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
     * @return OrderItem
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
     * @return OrderItem
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
     * @return OrderItem
     */
    public function setExpirationDate($ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
      return $this->Notes;
    }

    /**
     * @param string $Notes
     * @return OrderItem
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
      return $this;
    }

    /**
     * @return float
     */
    public function getFulfillInvSalePrice()
    {
      return $this->FulfillInvSalePrice;
    }

    /**
     * @param float $FulfillInvSalePrice
     * @return OrderItem
     */
    public function setFulfillInvSalePrice($FulfillInvSalePrice)
    {
      $this->FulfillInvSalePrice = $FulfillInvSalePrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getFulfillInvDiscountPct()
    {
      return $this->FulfillInvDiscountPct;
    }

    /**
     * @param float $FulfillInvDiscountPct
     * @return OrderItem
     */
    public function setFulfillInvDiscountPct($FulfillInvDiscountPct)
    {
      $this->FulfillInvDiscountPct = $FulfillInvDiscountPct;
      return $this;
    }

    /**
     * @return float
     */
    public function getFulfillInvDiscountAmt()
    {
      return $this->FulfillInvDiscountAmt;
    }

    /**
     * @param float $FulfillInvDiscountAmt
     * @return OrderItem
     */
    public function setFulfillInvDiscountAmt($FulfillInvDiscountAmt)
    {
      $this->FulfillInvDiscountAmt = $FulfillInvDiscountAmt;
      return $this;
    }

    /**
     * @return float
     */
    public function getQty()
    {
      return $this->Qty;
    }

    /**
     * @param float $Qty
     * @return OrderItem
     */
    public function setQty($Qty)
    {
      $this->Qty = $Qty;
      return $this;
    }

    /**
     * @return ArrayOfOrderItemReceiveItem
     */
    public function getOrderItemReceiveItems()
    {
      return $this->OrderItemReceiveItems;
    }

    /**
     * @param ArrayOfOrderItemReceiveItem $OrderItemReceiveItems
     * @return OrderItem
     */
    public function setOrderItemReceiveItems($OrderItemReceiveItems)
    {
      $this->OrderItemReceiveItems = $OrderItemReceiveItems;
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
     * @return OrderItem
     */
    public function setSavedElements($SavedElements)
    {
      $this->SavedElements = $SavedElements;
      return $this;
    }

}
