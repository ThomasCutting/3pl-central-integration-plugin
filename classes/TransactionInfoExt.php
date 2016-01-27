<?php

class TransactionInfoExt
{

    /**
     * @var string $ReferenceNum
     */
    protected $ReferenceNum = null;

    /**
     * @var \DateTime $ExpectedDate
     */
    protected $ExpectedDate = null;

    /**
     * @var \DateTime $EarliestShipDate
     */
    protected $EarliestShipDate = null;

    /**
     * @var \DateTime $ShipCancelDate
     */
    protected $ShipCancelDate = null;

    /**
     * @var string $PONum
     */
    protected $PONum = null;

    /**
     * @param \DateTime $ExpectedDate
     * @param \DateTime $EarliestShipDate
     * @param \DateTime $ShipCancelDate
     */
    public function __construct(\DateTime $ExpectedDate, \DateTime $EarliestShipDate, \DateTime $ShipCancelDate)
    {
      $this->ExpectedDate = $ExpectedDate->format(\DateTime::ATOM);
      $this->EarliestShipDate = $EarliestShipDate->format(\DateTime::ATOM);
      $this->ShipCancelDate = $ShipCancelDate->format(\DateTime::ATOM);
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
     * @return TransactionInfoExt
     */
    public function setReferenceNum($ReferenceNum)
    {
      $this->ReferenceNum = $ReferenceNum;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpectedDate()
    {
      if ($this->ExpectedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExpectedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExpectedDate
     * @return TransactionInfoExt
     */
    public function setExpectedDate(\DateTime $ExpectedDate)
    {
      $this->ExpectedDate = $ExpectedDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEarliestShipDate()
    {
      if ($this->EarliestShipDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EarliestShipDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EarliestShipDate
     * @return TransactionInfoExt
     */
    public function setEarliestShipDate(\DateTime $EarliestShipDate)
    {
      $this->EarliestShipDate = $EarliestShipDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getShipCancelDate()
    {
      if ($this->ShipCancelDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ShipCancelDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ShipCancelDate
     * @return TransactionInfoExt
     */
    public function setShipCancelDate(\DateTime $ShipCancelDate)
    {
      $this->ShipCancelDate = $ShipCancelDate->format(\DateTime::ATOM);
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
     * @return TransactionInfoExt
     */
    public function setPONum($PONum)
    {
      $this->PONum = $PONum;
      return $this;
    }

}
