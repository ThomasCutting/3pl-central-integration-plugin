<?php

class CancelOrder
{

    /**
     * @var int $WarehouseTransactionID
     */
    protected $WarehouseTransactionID = null;

    /**
     * @var string $Reason
     */
    protected $Reason = null;

    /**
     * @var float $Charge
     */
    protected $Charge = null;

    /**
     * @param int $WarehouseTransactionID
     * @param float $Charge
     */
    public function __construct($WarehouseTransactionID, $Charge)
    {
      $this->WarehouseTransactionID = $WarehouseTransactionID;
      $this->Charge = $Charge;
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
     * @return CancelOrder
     */
    public function setWarehouseTransactionID($WarehouseTransactionID)
    {
      $this->WarehouseTransactionID = $WarehouseTransactionID;
      return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
      return $this->Reason;
    }

    /**
     * @param string $Reason
     * @return CancelOrder
     */
    public function setReason($Reason)
    {
      $this->Reason = $Reason;
      return $this;
    }

    /**
     * @return float
     */
    public function getCharge()
    {
      return $this->Charge;
    }

    /**
     * @param float $Charge
     * @return CancelOrder
     */
    public function setCharge($Charge)
    {
      $this->Charge = $Charge;
      return $this;
    }

}
