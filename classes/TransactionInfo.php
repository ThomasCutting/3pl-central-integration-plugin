<?php

class TransactionInfo
{

    /**
     * @var string $ReferenceNum
     */
    protected $ReferenceNum = null;

    /**
     * @var string $PONum
     */
    protected $PONum = null;

    /**
     * @var I18nDateTime $ExpectedDate
     */
    protected $ExpectedDate = null;

    /**
     * @var I18nDateTime $EarliestShipDate
     */
    protected $EarliestShipDate = null;

    /**
     * @var I18nDateTime $ShipCancelDate
     */
    protected $ShipCancelDate = null;

    /**
     * @var string $ASNNumber
     */
    protected $ASNNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getReferenceNum()
    {
      return $this->ReferenceNum;
    }

    /**
     * @param string $ReferenceNum
     * @return TransactionInfo
     */
    public function setReferenceNum($ReferenceNum)
    {
      $this->ReferenceNum = $ReferenceNum;
      return $this;
    }

    /**
     * @return string
     */
    public function getPONum()
    {
      return $this->PONum;
    }

    /**
     * @param string $PONum
     * @return TransactionInfo
     */
    public function setPONum($PONum)
    {
      $this->PONum = $PONum;
      return $this;
    }

    /**
     * @return I18nDateTime
     */
    public function getExpectedDate()
    {
      return $this->ExpectedDate;
    }

    /**
     * @param I18nDateTime $ExpectedDate
     * @return TransactionInfo
     */
    public function setExpectedDate($ExpectedDate)
    {
      $this->ExpectedDate = $ExpectedDate;
      return $this;
    }

    /**
     * @return I18nDateTime
     */
    public function getEarliestShipDate()
    {
      return $this->EarliestShipDate;
    }

    /**
     * @param I18nDateTime $EarliestShipDate
     * @return TransactionInfo
     */
    public function setEarliestShipDate($EarliestShipDate)
    {
      $this->EarliestShipDate = $EarliestShipDate;
      return $this;
    }

    /**
     * @return I18nDateTime
     */
    public function getShipCancelDate()
    {
      return $this->ShipCancelDate;
    }

    /**
     * @param I18nDateTime $ShipCancelDate
     * @return TransactionInfo
     */
    public function setShipCancelDate($ShipCancelDate)
    {
      $this->ShipCancelDate = $ShipCancelDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getASNNumber()
    {
      return $this->ASNNumber;
    }

    /**
     * @param string $ASNNumber
     * @return TransactionInfo
     */
    public function setASNNumber($ASNNumber)
    {
      $this->ASNNumber = $ASNNumber;
      return $this;
    }

}
