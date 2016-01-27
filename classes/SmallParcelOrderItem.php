<?php

class SmallParcelOrderItem
{

    /**
     * @var int $WarehouseTransactionId
     */
    protected $WarehouseTransactionId = null;

    /**
     * @var int $OrderItemId
     */
    protected $OrderItemId = null;

    /**
     * @var float $Qty
     */
    protected $Qty = null;

    /**
     * @var string $SKU
     */
    protected $SKU = null;

    /**
     * @var string $Location
     */
    protected $Location = null;

    /**
     * @var string $ItemDescription
     */
    protected $ItemDescription = null;

    /**
     * @var string $ItemDescription2
     */
    protected $ItemDescription2 = null;

    /**
     * @var float $ItemCost
     */
    protected $ItemCost = null;

    /**
     * @var float $ItemPrice
     */
    protected $ItemPrice = null;

    /**
     * @var string $LotNumber
     */
    protected $LotNumber = null;

    /**
     * @var string $SerialNumber
     */
    protected $SerialNumber = null;

    /**
     * @var \DateTime $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @var float $LandedCost
     */
    protected $LandedCost = null;

    /**
     * @var string $HarmonizedCode
     */
    protected $HarmonizedCode = null;

    /**
     * @var string $CountryOfOrigin
     */
    protected $CountryOfOrigin = null;

    /**
     * @var string $NMFC
     */
    protected $NMFC = null;

    /**
     * @param int $WarehouseTransactionId
     * @param int $OrderItemId
     * @param float $Qty
     * @param float $ItemCost
     * @param float $ItemPrice
     * @param \DateTime $ExpirationDate
     * @param float $LandedCost
     */
    public function __construct($WarehouseTransactionId, $OrderItemId, $Qty, $ItemCost, $ItemPrice, \DateTime $ExpirationDate, $LandedCost)
    {
      $this->WarehouseTransactionId = $WarehouseTransactionId;
      $this->OrderItemId = $OrderItemId;
      $this->Qty = $Qty;
      $this->ItemCost = $ItemCost;
      $this->ItemPrice = $ItemPrice;
      $this->ExpirationDate = $ExpirationDate->format(\DateTime::ATOM);
      $this->LandedCost = $LandedCost;
    }

    /**
     * @return int
     */
    public function getWarehouseTransactionId()
    {
      return $this->WarehouseTransactionId;
    }

    /**
     * @param int $WarehouseTransactionId
     * @return SmallParcelOrderItem
     */
    public function setWarehouseTransactionId($WarehouseTransactionId)
    {
      $this->WarehouseTransactionId = $WarehouseTransactionId;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderItemId()
    {
      return $this->OrderItemId;
    }

    /**
     * @param int $OrderItemId
     * @return SmallParcelOrderItem
     */
    public function setOrderItemId($OrderItemId)
    {
      $this->OrderItemId = $OrderItemId;
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
     * @return SmallParcelOrderItem
     */
    public function setQty($Qty)
    {
      $this->Qty = $Qty;
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
     * @return SmallParcelOrderItem
     */
    public function setSKU($SKU)
    {
      $this->SKU = $SKU;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param string $Location
     * @return SmallParcelOrderItem
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemDescription()
    {
      return $this->ItemDescription;
    }

    /**
     * @param string $ItemDescription
     * @return SmallParcelOrderItem
     */
    public function setItemDescription($ItemDescription)
    {
      $this->ItemDescription = $ItemDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemDescription2()
    {
      return $this->ItemDescription2;
    }

    /**
     * @param string $ItemDescription2
     * @return SmallParcelOrderItem
     */
    public function setItemDescription2($ItemDescription2)
    {
      $this->ItemDescription2 = $ItemDescription2;
      return $this;
    }

    /**
     * @return float
     */
    public function getItemCost()
    {
      return $this->ItemCost;
    }

    /**
     * @param float $ItemCost
     * @return SmallParcelOrderItem
     */
    public function setItemCost($ItemCost)
    {
      $this->ItemCost = $ItemCost;
      return $this;
    }

    /**
     * @return float
     */
    public function getItemPrice()
    {
      return $this->ItemPrice;
    }

    /**
     * @param float $ItemPrice
     * @return SmallParcelOrderItem
     */
    public function setItemPrice($ItemPrice)
    {
      $this->ItemPrice = $ItemPrice;
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
     * @return SmallParcelOrderItem
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
     * @return SmallParcelOrderItem
     */
    public function setSerialNumber($SerialNumber)
    {
      $this->SerialNumber = $SerialNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDate()
    {
      if ($this->ExpirationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExpirationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExpirationDate
     * @return SmallParcelOrderItem
     */
    public function setExpirationDate(\DateTime $ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return float
     */
    public function getLandedCost()
    {
      return $this->LandedCost;
    }

    /**
     * @param float $LandedCost
     * @return SmallParcelOrderItem
     */
    public function setLandedCost($LandedCost)
    {
      $this->LandedCost = $LandedCost;
      return $this;
    }

    /**
     * @return string
     */
    public function getHarmonizedCode()
    {
      return $this->HarmonizedCode;
    }

    /**
     * @param string $HarmonizedCode
     * @return SmallParcelOrderItem
     */
    public function setHarmonizedCode($HarmonizedCode)
    {
      $this->HarmonizedCode = $HarmonizedCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryOfOrigin()
    {
      return $this->CountryOfOrigin;
    }

    /**
     * @param string $CountryOfOrigin
     * @return SmallParcelOrderItem
     */
    public function setCountryOfOrigin($CountryOfOrigin)
    {
      $this->CountryOfOrigin = $CountryOfOrigin;
      return $this;
    }

    /**
     * @return string
     */
    public function getNMFC()
    {
      return $this->NMFC;
    }

    /**
     * @param string $NMFC
     * @return SmallParcelOrderItem
     */
    public function setNMFC($NMFC)
    {
      $this->NMFC = $NMFC;
      return $this;
    }

}
