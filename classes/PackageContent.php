<?php

class PackageContent
{

    /**
     * @var int $PackageContentID
     */
    protected $PackageContentID = null;

    /**
     * @var int $PackageID
     */
    protected $PackageID = null;

    /**
     * @var int $OrderItemID
     */
    protected $OrderItemID = null;

    /**
     * @var int $ReceiveItemID
     */
    protected $ReceiveItemID = null;

    /**
     * @var int $OrderItemPickExceptionID
     */
    protected $OrderItemPickExceptionID = null;

    /**
     * @var float $Qty
     */
    protected $Qty = null;

    /**
     * @var UnitOfMeasure $InventoryUnitOfMeasureType
     */
    protected $InventoryUnitOfMeasureType = null;

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
     * @var string $SKU
     */
    protected $SKU = null;

    /**
     * @var string $Qualifier
     */
    protected $Qualifier = null;

    /**
     * @var string $Supplier
     */
    protected $Supplier = null;

    /**
     * @var float $Cost
     */
    protected $Cost = null;

    /**
     * @param int $PackageContentID
     * @param int $PackageID
     * @param int $OrderItemID
     * @param int $ReceiveItemID
     * @param int $OrderItemPickExceptionID
     * @param float $Qty
     * @param float $Cost
     */
    public function __construct($PackageContentID, $PackageID, $OrderItemID, $ReceiveItemID, $OrderItemPickExceptionID, $Qty, $Cost)
    {
      $this->PackageContentID = $PackageContentID;
      $this->PackageID = $PackageID;
      $this->OrderItemID = $OrderItemID;
      $this->ReceiveItemID = $ReceiveItemID;
      $this->OrderItemPickExceptionID = $OrderItemPickExceptionID;
      $this->Qty = $Qty;
      $this->Cost = $Cost;
    }

    /**
     * @return int
     */
    public function getPackageContentID()
    {
      return $this->PackageContentID;
    }

    /**
     * @param int $PackageContentID
     * @return PackageContent
     */
    public function setPackageContentID($PackageContentID)
    {
      $this->PackageContentID = $PackageContentID;
      return $this;
    }

    /**
     * @return int
     */
    public function getPackageID()
    {
      return $this->PackageID;
    }

    /**
     * @param int $PackageID
     * @return PackageContent
     */
    public function setPackageID($PackageID)
    {
      $this->PackageID = $PackageID;
      return $this;
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
     * @return PackageContent
     */
    public function setOrderItemID($OrderItemID)
    {
      $this->OrderItemID = $OrderItemID;
      return $this;
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
     * @return PackageContent
     */
    public function setReceiveItemID($ReceiveItemID)
    {
      $this->ReceiveItemID = $ReceiveItemID;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderItemPickExceptionID()
    {
      return $this->OrderItemPickExceptionID;
    }

    /**
     * @param int $OrderItemPickExceptionID
     * @return PackageContent
     */
    public function setOrderItemPickExceptionID($OrderItemPickExceptionID)
    {
      $this->OrderItemPickExceptionID = $OrderItemPickExceptionID;
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
     * @return PackageContent
     */
    public function setQty($Qty)
    {
      $this->Qty = $Qty;
      return $this;
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
     * @return PackageContent
     */
    public function setInventoryUnitOfMeasureType($InventoryUnitOfMeasureType)
    {
      $this->InventoryUnitOfMeasureType = $InventoryUnitOfMeasureType;
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
     * @return PackageContent
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
     * @return PackageContent
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
     * @return PackageContent
     */
    public function setExpirationDate($ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate;
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
     * @return PackageContent
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
     * @return PackageContent
     */
    public function setQualifier($Qualifier)
    {
      $this->Qualifier = $Qualifier;
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
     * @return PackageContent
     */
    public function setSupplier($Supplier)
    {
      $this->Supplier = $Supplier;
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
     * @return PackageContent
     */
    public function setCost($Cost)
    {
      $this->Cost = $Cost;
      return $this;
    }

}
