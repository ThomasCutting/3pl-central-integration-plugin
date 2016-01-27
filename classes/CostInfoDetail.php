<?php

class CostInfoDetail
{

    /**
     * @var float $NumUnits
     */
    protected $NumUnits = null;

    /**
     * @var string $ChargeLabel
     */
    protected $ChargeLabel = null;

    /**
     * @var string $UnitDescription
     */
    protected $UnitDescription = null;

    /**
     * @var float $ChargePerUnit
     */
    protected $ChargePerUnit = null;

    /**
     * @var string $GLAcctNum
     */
    protected $GLAcctNum = null;

    /**
     * @var string $SKU
     */
    protected $SKU = null;

    /**
     * @var string $PTItem
     */
    protected $PTItem = null;

    /**
     * @var string $PTItemDescription
     */
    protected $PTItemDescription = null;

    /**
     * @var string $PTARAcct
     */
    protected $PTARAcct = null;

    /**
     * @var int $WarehouseTransactionPriceCalcID
     */
    protected $WarehouseTransactionPriceCalcID = null;

    /**
     * @var ArrayOfRecurringBillingDetail $RecurringBillingDetails
     */
    protected $RecurringBillingDetails = null;

    /**
     * @param float $NumUnits
     * @param float $ChargePerUnit
     * @param int $WarehouseTransactionPriceCalcID
     */
    public function __construct($NumUnits, $ChargePerUnit, $WarehouseTransactionPriceCalcID)
    {
      $this->NumUnits = $NumUnits;
      $this->ChargePerUnit = $ChargePerUnit;
      $this->WarehouseTransactionPriceCalcID = $WarehouseTransactionPriceCalcID;
    }

    /**
     * @return float
     */
    public function getNumUnits()
    {
      return $this->NumUnits;
    }

    /**
     * @param float $NumUnits
     * @return CostInfoDetail
     */
    public function setNumUnits($NumUnits)
    {
      $this->NumUnits = $NumUnits;
      return $this;
    }

    /**
     * @return string
     */
    public function getChargeLabel()
    {
      return $this->ChargeLabel;
    }

    /**
     * @param string $ChargeLabel
     * @return CostInfoDetail
     */
    public function setChargeLabel($ChargeLabel)
    {
      $this->ChargeLabel = $ChargeLabel;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnitDescription()
    {
      return $this->UnitDescription;
    }

    /**
     * @param string $UnitDescription
     * @return CostInfoDetail
     */
    public function setUnitDescription($UnitDescription)
    {
      $this->UnitDescription = $UnitDescription;
      return $this;
    }

    /**
     * @return float
     */
    public function getChargePerUnit()
    {
      return $this->ChargePerUnit;
    }

    /**
     * @param float $ChargePerUnit
     * @return CostInfoDetail
     */
    public function setChargePerUnit($ChargePerUnit)
    {
      $this->ChargePerUnit = $ChargePerUnit;
      return $this;
    }

    /**
     * @return string
     */
    public function getGLAcctNum()
    {
      return $this->GLAcctNum;
    }

    /**
     * @param string $GLAcctNum
     * @return CostInfoDetail
     */
    public function setGLAcctNum($GLAcctNum)
    {
      $this->GLAcctNum = $GLAcctNum;
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
     * @return CostInfoDetail
     */
    public function setSKU($SKU)
    {
      $this->SKU = $SKU;
      return $this;
    }

    /**
     * @return string
     */
    public function getPTItem()
    {
      return $this->PTItem;
    }

    /**
     * @param string $PTItem
     * @return CostInfoDetail
     */
    public function setPTItem($PTItem)
    {
      $this->PTItem = $PTItem;
      return $this;
    }

    /**
     * @return string
     */
    public function getPTItemDescription()
    {
      return $this->PTItemDescription;
    }

    /**
     * @param string $PTItemDescription
     * @return CostInfoDetail
     */
    public function setPTItemDescription($PTItemDescription)
    {
      $this->PTItemDescription = $PTItemDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getPTARAcct()
    {
      return $this->PTARAcct;
    }

    /**
     * @param string $PTARAcct
     * @return CostInfoDetail
     */
    public function setPTARAcct($PTARAcct)
    {
      $this->PTARAcct = $PTARAcct;
      return $this;
    }

    /**
     * @return int
     */
    public function getWarehouseTransactionPriceCalcID()
    {
      return $this->WarehouseTransactionPriceCalcID;
    }

    /**
     * @param int $WarehouseTransactionPriceCalcID
     * @return CostInfoDetail
     */
    public function setWarehouseTransactionPriceCalcID($WarehouseTransactionPriceCalcID)
    {
      $this->WarehouseTransactionPriceCalcID = $WarehouseTransactionPriceCalcID;
      return $this;
    }

    /**
     * @return ArrayOfRecurringBillingDetail
     */
    public function getRecurringBillingDetails()
    {
      return $this->RecurringBillingDetails;
    }

    /**
     * @param ArrayOfRecurringBillingDetail $RecurringBillingDetails
     * @return CostInfoDetail
     */
    public function setRecurringBillingDetails($RecurringBillingDetails)
    {
      $this->RecurringBillingDetails = $RecurringBillingDetails;
      return $this;
    }

}
