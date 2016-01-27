<?php

class Package
{

    /**
     * @var int $PackageID
     */
    protected $PackageID = null;

    /**
     * @var int $WarehouseTransactionID
     */
    protected $WarehouseTransactionID = null;

    /**
     * @var int $PackageTypeID
     */
    protected $PackageTypeID = null;

    /**
     * @var string $PackageType
     */
    protected $PackageType = null;

    /**
     * @var string $PackageTypeDescription
     */
    protected $PackageTypeDescription = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var float $Length
     */
    protected $Length = null;

    /**
     * @var float $Width
     */
    protected $Width = null;

    /**
     * @var float $Height
     */
    protected $Height = null;

    /**
     * @var int $Oversize
     */
    protected $Oversize = null;

    /**
     * @var float $Weight
     */
    protected $Weight = null;

    /**
     * @var boolean $COD
     */
    protected $COD = null;

    /**
     * @var float $CODAmount
     */
    protected $CODAmount = null;

    /**
     * @var float $InsuredAmount
     */
    protected $InsuredAmount = null;

    /**
     * @var base64Binary $Label
     */
    protected $Label = null;

    /**
     * @var string $TrackingNumber
     */
    protected $TrackingNumber = null;

    /**
     * @var int $UCC128
     */
    protected $UCC128 = null;

    /**
     * @var ArrayOfPackageContent $PackageContents
     */
    protected $PackageContents = null;

    /**
     * @var string $ScaleWeight
     */
    protected $ScaleWeight = null;

    /**
     * @param int $PackageID
     * @param int $WarehouseTransactionID
     * @param int $PackageTypeID
     * @param float $Length
     * @param float $Width
     * @param float $Height
     * @param int $Oversize
     * @param float $Weight
     * @param boolean $COD
     * @param float $CODAmount
     * @param float $InsuredAmount
     * @param int $UCC128
     */
    public function __construct($PackageID, $WarehouseTransactionID, $PackageTypeID, $Length, $Width, $Height, $Oversize, $Weight, $COD, $CODAmount, $InsuredAmount, $UCC128)
    {
      $this->PackageID = $PackageID;
      $this->WarehouseTransactionID = $WarehouseTransactionID;
      $this->PackageTypeID = $PackageTypeID;
      $this->Length = $Length;
      $this->Width = $Width;
      $this->Height = $Height;
      $this->Oversize = $Oversize;
      $this->Weight = $Weight;
      $this->COD = $COD;
      $this->CODAmount = $CODAmount;
      $this->InsuredAmount = $InsuredAmount;
      $this->UCC128 = $UCC128;
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
     * @return Package
     */
    public function setPackageID($PackageID)
    {
      $this->PackageID = $PackageID;
      return $this;
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
     * @return Package
     */
    public function setWarehouseTransactionID($WarehouseTransactionID)
    {
      $this->WarehouseTransactionID = $WarehouseTransactionID;
      return $this;
    }

    /**
     * @return int
     */
    public function getPackageTypeID()
    {
      return $this->PackageTypeID;
    }

    /**
     * @param int $PackageTypeID
     * @return Package
     */
    public function setPackageTypeID($PackageTypeID)
    {
      $this->PackageTypeID = $PackageTypeID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackageType()
    {
      return $this->PackageType;
    }

    /**
     * @param string $PackageType
     * @return Package
     */
    public function setPackageType($PackageType)
    {
      $this->PackageType = $PackageType;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackageTypeDescription()
    {
      return $this->PackageTypeDescription;
    }

    /**
     * @param string $PackageTypeDescription
     * @return Package
     */
    public function setPackageTypeDescription($PackageTypeDescription)
    {
      $this->PackageTypeDescription = $PackageTypeDescription;
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
     * @return Package
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return float
     */
    public function getLength()
    {
      return $this->Length;
    }

    /**
     * @param float $Length
     * @return Package
     */
    public function setLength($Length)
    {
      $this->Length = $Length;
      return $this;
    }

    /**
     * @return float
     */
    public function getWidth()
    {
      return $this->Width;
    }

    /**
     * @param float $Width
     * @return Package
     */
    public function setWidth($Width)
    {
      $this->Width = $Width;
      return $this;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
      return $this->Height;
    }

    /**
     * @param float $Height
     * @return Package
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
      return $this;
    }

    /**
     * @return int
     */
    public function getOversize()
    {
      return $this->Oversize;
    }

    /**
     * @param int $Oversize
     * @return Package
     */
    public function setOversize($Oversize)
    {
      $this->Oversize = $Oversize;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param float $Weight
     * @return Package
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCOD()
    {
      return $this->COD;
    }

    /**
     * @param boolean $COD
     * @return Package
     */
    public function setCOD($COD)
    {
      $this->COD = $COD;
      return $this;
    }

    /**
     * @return float
     */
    public function getCODAmount()
    {
      return $this->CODAmount;
    }

    /**
     * @param float $CODAmount
     * @return Package
     */
    public function setCODAmount($CODAmount)
    {
      $this->CODAmount = $CODAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getInsuredAmount()
    {
      return $this->InsuredAmount;
    }

    /**
     * @param float $InsuredAmount
     * @return Package
     */
    public function setInsuredAmount($InsuredAmount)
    {
      $this->InsuredAmount = $InsuredAmount;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getLabel()
    {
      return $this->Label;
    }

    /**
     * @param base64Binary $Label
     * @return Package
     */
    public function setLabel($Label)
    {
      $this->Label = $Label;
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
     * @return Package
     */
    public function setTrackingNumber($TrackingNumber)
    {
      $this->TrackingNumber = $TrackingNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getUCC128()
    {
      return $this->UCC128;
    }

    /**
     * @param int $UCC128
     * @return Package
     */
    public function setUCC128($UCC128)
    {
      $this->UCC128 = $UCC128;
      return $this;
    }

    /**
     * @return ArrayOfPackageContent
     */
    public function getPackageContents()
    {
      return $this->PackageContents;
    }

    /**
     * @param ArrayOfPackageContent $PackageContents
     * @return Package
     */
    public function setPackageContents($PackageContents)
    {
      $this->PackageContents = $PackageContents;
      return $this;
    }

    /**
     * @return string
     */
    public function getScaleWeight()
    {
      return $this->ScaleWeight;
    }

    /**
     * @param string $ScaleWeight
     * @return Package
     */
    public function setScaleWeight($ScaleWeight)
    {
      $this->ScaleWeight = $ScaleWeight;
      return $this;
    }

}
