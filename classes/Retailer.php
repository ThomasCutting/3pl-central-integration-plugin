<?php

class Retailer
{

    /**
     * @var int $RetailerID
     */
    protected $RetailerID = null;

    /**
     * @var string $RetailerNumber
     */
    protected $RetailerNumber = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var int $CustomerID
     */
    protected $CustomerID = null;

    /**
     * @var int $LabelUID
     */
    protected $LabelUID = null;

    /**
     * @param int $RetailerID
     * @param int $CustomerID
     * @param int $LabelUID
     */
    public function __construct($RetailerID, $CustomerID, $LabelUID)
    {
      $this->RetailerID = $RetailerID;
      $this->CustomerID = $CustomerID;
      $this->LabelUID = $LabelUID;
    }

    /**
     * @return int
     */
    public function getRetailerID()
    {
      return $this->RetailerID;
    }

    /**
     * @param int $RetailerID
     * @return Retailer
     */
    public function setRetailerID($RetailerID)
    {
      $this->RetailerID = $RetailerID;
      return $this;
    }

    /**
     * @return string
     */
    public function getRetailerNumber()
    {
      return $this->RetailerNumber;
    }

    /**
     * @param string $RetailerNumber
     * @return Retailer
     */
    public function setRetailerNumber($RetailerNumber)
    {
      $this->RetailerNumber = $RetailerNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return Retailer
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return int
     */
    public function getCustomerID()
    {
      return $this->CustomerID;
    }

    /**
     * @param int $CustomerID
     * @return Retailer
     */
    public function setCustomerID($CustomerID)
    {
      $this->CustomerID = $CustomerID;
      return $this;
    }

    /**
     * @return int
     */
    public function getLabelUID()
    {
      return $this->LabelUID;
    }

    /**
     * @param int $LabelUID
     * @return Retailer
     */
    public function setLabelUID($LabelUID)
    {
      $this->LabelUID = $LabelUID;
      return $this;
    }

}
