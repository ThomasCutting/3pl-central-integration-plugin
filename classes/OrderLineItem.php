<?php

class OrderLineItem
{

    /**
     * @var string $SKU
     */
    protected $SKU = null;

    /**
     * @var string $Qualifier
     */
    protected $Qualifier = null;

    /**
     * @var float $Qty
     */
    protected $Qty = null;

    /**
     * @var float $Packed
     */
    protected $Packed = null;

    /**
     * @var float $CuFtPerCarton
     */
    protected $CuFtPerCarton = null;

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
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var float $FulfillmentSalePrice
     */
    protected $FulfillmentSalePrice = null;

    /**
     * @var float $FulfillmentDiscountPercentage
     */
    protected $FulfillmentDiscountPercentage = null;

    /**
     * @var float $FulfillmentDiscountAmount
     */
    protected $FulfillmentDiscountAmount = null;

    /**
     * @param float $Qty
     * @param float $Packed
     * @param float $CuFtPerCarton
     * @param \DateTime $ExpirationDate
     * @param float $FulfillmentSalePrice
     * @param float $FulfillmentDiscountPercentage
     * @param float $FulfillmentDiscountAmount
     */
    public function __construct($Qty, $Packed, $CuFtPerCarton, \DateTime $ExpirationDate, $FulfillmentSalePrice, $FulfillmentDiscountPercentage, $FulfillmentDiscountAmount)
    {
      $this->Qty = $Qty;
      $this->Packed = $Packed;
      $this->CuFtPerCarton = $CuFtPerCarton;
      $this->ExpirationDate = $ExpirationDate->format(\DateTime::ATOM);
      $this->FulfillmentSalePrice = $FulfillmentSalePrice;
      $this->FulfillmentDiscountPercentage = $FulfillmentDiscountPercentage;
      $this->FulfillmentDiscountAmount = $FulfillmentDiscountAmount;
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
     * @return OrderLineItem
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
     * @return OrderLineItem
     */
    public function setQualifier($Qualifier)
    {
      $this->Qualifier = $Qualifier;
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
     * @return OrderLineItem
     */
    public function setQty($Qty)
    {
      $this->Qty = $Qty;
      return $this;
    }

    /**
     * @return float
     */
    public function getPacked()
    {
      return $this->Packed;
    }

    /**
     * @param float $Packed
     * @return OrderLineItem
     */
    public function setPacked($Packed)
    {
      $this->Packed = $Packed;
      return $this;
    }

    /**
     * @return float
     */
    public function getCuFtPerCarton()
    {
      return $this->CuFtPerCarton;
    }

    /**
     * @param float $CuFtPerCarton
     * @return OrderLineItem
     */
    public function setCuFtPerCarton($CuFtPerCarton)
    {
      $this->CuFtPerCarton = $CuFtPerCarton;
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
     * @return OrderLineItem
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
     * @return OrderLineItem
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
     * @return OrderLineItem
     */
    public function setExpirationDate(\DateTime $ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate->format(\DateTime::ATOM);
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
     * @return OrderLineItem
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
      return $this;
    }

    /**
     * @return float
     */
    public function getFulfillmentSalePrice()
    {
      return $this->FulfillmentSalePrice;
    }

    /**
     * @param float $FulfillmentSalePrice
     * @return OrderLineItem
     */
    public function setFulfillmentSalePrice($FulfillmentSalePrice)
    {
      $this->FulfillmentSalePrice = $FulfillmentSalePrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getFulfillmentDiscountPercentage()
    {
      return $this->FulfillmentDiscountPercentage;
    }

    /**
     * @param float $FulfillmentDiscountPercentage
     * @return OrderLineItem
     */
    public function setFulfillmentDiscountPercentage($FulfillmentDiscountPercentage)
    {
      $this->FulfillmentDiscountPercentage = $FulfillmentDiscountPercentage;
      return $this;
    }

    /**
     * @return float
     */
    public function getFulfillmentDiscountAmount()
    {
      return $this->FulfillmentDiscountAmount;
    }

    /**
     * @param float $FulfillmentDiscountAmount
     * @return OrderLineItem
     */
    public function setFulfillmentDiscountAmount($FulfillmentDiscountAmount)
    {
      $this->FulfillmentDiscountAmount = $FulfillmentDiscountAmount;
      return $this;
    }

}
