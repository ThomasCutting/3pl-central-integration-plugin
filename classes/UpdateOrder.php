<?php

class UpdateOrder
{

    /**
     * @var int $WarehouseTransactionID
     */
    protected $WarehouseTransactionID = null;

    /**
     * @var string $BillOfLading
     */
    protected $BillOfLading = null;

    /**
     * @var string $TrackingNumber
     */
    protected $TrackingNumber = null;

    /**
     * @var \DateTime $ConfirmationDate
     */
    protected $ConfirmationDate = null;

    /**
     * @param int $WarehouseTransactionID
     * @param \DateTime $ConfirmationDate
     */
    public function __construct($WarehouseTransactionID, \DateTime $ConfirmationDate)
    {
      $this->WarehouseTransactionID = $WarehouseTransactionID;
      $this->ConfirmationDate = $ConfirmationDate->format(\DateTime::ATOM);
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
     * @return UpdateOrder
     */
    public function setWarehouseTransactionID($WarehouseTransactionID)
    {
      $this->WarehouseTransactionID = $WarehouseTransactionID;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillOfLading()
    {
      return $this->BillOfLading;
    }

    /**
     * @param string $BillOfLading
     * @return UpdateOrder
     */
    public function setBillOfLading($BillOfLading)
    {
      $this->BillOfLading = $BillOfLading;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
      return $this->TrackingNumber;
    }

    /**
     * @param string $TrackingNumber
     * @return UpdateOrder
     */
    public function setTrackingNumber($TrackingNumber)
    {
      $this->TrackingNumber = $TrackingNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getConfirmationDate()
    {
      if ($this->ConfirmationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ConfirmationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ConfirmationDate
     * @return UpdateOrder
     */
    public function setConfirmationDate(\DateTime $ConfirmationDate)
    {
      $this->ConfirmationDate = $ConfirmationDate->format(\DateTime::ATOM);
      return $this;
    }

}
