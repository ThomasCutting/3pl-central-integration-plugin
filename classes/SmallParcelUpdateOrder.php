<?php

class SmallParcelUpdateOrder
{

    /**
     * @var int $WarehouseTransactionID
     */
    protected $WarehouseTransactionID = null;

    /**
     * @var string $TrackingNumber
     */
    protected $TrackingNumber = null;

    /**
     * @var float $Freight
     */
    protected $Freight = null;

    /**
     * @var float $Weight
     */
    protected $Weight = null;

    /**
     * @var float $PkgCount
     */
    protected $PkgCount = null;

    /**
     * @var string $Carrier
     */
    protected $Carrier = null;

    /**
     * @var string $Service
     */
    protected $Service = null;

    /**
     * @var string $SCACCode
     */
    protected $SCACCode = null;

    /**
     * @var ArrayOfPackage $Packages
     */
    protected $Packages = null;

    /**
     * @var string $TrailerNumber
     */
    protected $TrailerNumber = null;

    /**
     * @var string $SealNumber
     */
    protected $SealNumber = null;

    /**
     * @var string $DoorNumber
     */
    protected $DoorNumber = null;

    /**
     * @param int $WarehouseTransactionID
     * @param float $Freight
     * @param float $Weight
     * @param float $PkgCount
     */
    public function __construct($WarehouseTransactionID, $Freight, $Weight, $PkgCount)
    {
      $this->WarehouseTransactionID = $WarehouseTransactionID;
      $this->Freight = $Freight;
      $this->Weight = $Weight;
      $this->PkgCount = $PkgCount;
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
     * @return SmallParcelUpdateOrder
     */
    public function setWarehouseTransactionID($WarehouseTransactionID)
    {
      $this->WarehouseTransactionID = $WarehouseTransactionID;
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
     * @return SmallParcelUpdateOrder
     */
    public function setTrackingNumber($TrackingNumber)
    {
      $this->TrackingNumber = $TrackingNumber;
      return $this;
    }

    /**
     * @return float
     */
    public function getFreight()
    {
      return $this->Freight;
    }

    /**
     * @param float $Freight
     * @return SmallParcelUpdateOrder
     */
    public function setFreight($Freight)
    {
      $this->Freight = $Freight;
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
     * @return SmallParcelUpdateOrder
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return float
     */
    public function getPkgCount()
    {
      return $this->PkgCount;
    }

    /**
     * @param float $PkgCount
     * @return SmallParcelUpdateOrder
     */
    public function setPkgCount($PkgCount)
    {
      $this->PkgCount = $PkgCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param string $Carrier
     * @return SmallParcelUpdateOrder
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getService()
    {
      return $this->Service;
    }

    /**
     * @param string $Service
     * @return SmallParcelUpdateOrder
     */
    public function setService($Service)
    {
      $this->Service = $Service;
      return $this;
    }

    /**
     * @return string
     */
    public function getSCACCode()
    {
      return $this->SCACCode;
    }

    /**
     * @param string $SCACCode
     * @return SmallParcelUpdateOrder
     */
    public function setSCACCode($SCACCode)
    {
      $this->SCACCode = $SCACCode;
      return $this;
    }

    /**
     * @return ArrayOfPackage
     */
    public function getPackages()
    {
      return $this->Packages;
    }

    /**
     * @param ArrayOfPackage $Packages
     * @return SmallParcelUpdateOrder
     */
    public function setPackages($Packages)
    {
      $this->Packages = $Packages;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrailerNumber()
    {
      return $this->TrailerNumber;
    }

    /**
     * @param string $TrailerNumber
     * @return SmallParcelUpdateOrder
     */
    public function setTrailerNumber($TrailerNumber)
    {
      $this->TrailerNumber = $TrailerNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSealNumber()
    {
      return $this->SealNumber;
    }

    /**
     * @param string $SealNumber
     * @return SmallParcelUpdateOrder
     */
    public function setSealNumber($SealNumber)
    {
      $this->SealNumber = $SealNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getDoorNumber()
    {
      return $this->DoorNumber;
    }

    /**
     * @param string $DoorNumber
     * @return SmallParcelUpdateOrder
     */
    public function setDoorNumber($DoorNumber)
    {
      $this->DoorNumber = $DoorNumber;
      return $this;
    }

}
