<?php

class RecurringBillingDetail
{

    /**
     * @var int $ReceiveItemID
     */
    protected $ReceiveItemID = null;

    /**
     * @var float $OnHandAtBillTime
     */
    protected $OnHandAtBillTime = null;

    /**
     * @var int $WarehouseTransactionPriceCalcID
     */
    protected $WarehouseTransactionPriceCalcID = null;

    /**
     * @param int $ReceiveItemID
     * @param float $OnHandAtBillTime
     * @param int $WarehouseTransactionPriceCalcID
     */
    public function __construct($ReceiveItemID, $OnHandAtBillTime, $WarehouseTransactionPriceCalcID)
    {
      $this->ReceiveItemID = $ReceiveItemID;
      $this->OnHandAtBillTime = $OnHandAtBillTime;
      $this->WarehouseTransactionPriceCalcID = $WarehouseTransactionPriceCalcID;
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
     * @return RecurringBillingDetail
     */
    public function setReceiveItemID($ReceiveItemID)
    {
      $this->ReceiveItemID = $ReceiveItemID;
      return $this;
    }

    /**
     * @return float
     */
    public function getOnHandAtBillTime()
    {
      return $this->OnHandAtBillTime;
    }

    /**
     * @param float $OnHandAtBillTime
     * @return RecurringBillingDetail
     */
    public function setOnHandAtBillTime($OnHandAtBillTime)
    {
      $this->OnHandAtBillTime = $OnHandAtBillTime;
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
     * @return RecurringBillingDetail
     */
    public function setWarehouseTransactionPriceCalcID($WarehouseTransactionPriceCalcID)
    {
      $this->WarehouseTransactionPriceCalcID = $WarehouseTransactionPriceCalcID;
      return $this;
    }

}
