<?php

class StockStatusEntry
{

    /**
     * @var string $Sku
     */
    protected $Sku = null;

    /**
     * @var int $FacilityID
     */
    protected $FacilityID = null;

    /**
     * @var string $FacilityName
     */
    protected $FacilityName = null;

    /**
     * @var int $CustomerID
     */
    protected $CustomerID = null;

    /**
     * @var string $CDescription
     */
    protected $CDescription = null;

    /**
     * @var string $Address1
     */
    protected $Address1 = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $State
     */
    protected $State = null;

    /**
     * @var string $Zip
     */
    protected $Zip = null;

    /**
     * @var int $ItemID
     */
    protected $ItemID = null;

    /**
     * @var string $ItemDescription
     */
    protected $ItemDescription = null;

    /**
     * @var string $Description2
     */
    protected $Description2 = null;

    /**
     * @var string $Qualifier
     */
    protected $Qualifier = null;

    /**
     * @var string $Location
     */
    protected $Location = null;

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
     * @var float $DimQty
     */
    protected $DimQty = null;

    /**
     * @var float $SumOfOnHand
     */
    protected $SumOfOnHand = null;

    /**
     * @var float $SumOfAllocated
     */
    protected $SumOfAllocated = null;

    /**
     * @var float $SumOfAvailable
     */
    protected $SumOfAvailable = null;

    /**
     * @var float $SumOfVAvailable
     */
    protected $SumOfVAvailable = null;

    /**
     * @var float $QuarantinedQty
     */
    protected $QuarantinedQty = null;

    /**
     * @var float $OverOrdered
     */
    protected $OverOrdered = null;

    /**
     * @var string $DummyDepleted
     */
    protected $DummyDepleted = null;

    /**
     * @var boolean $HasAvailable
     */
    protected $HasAvailable = null;

    /**
     * @var float $Weight
     */
    protected $Weight = null;

    /**
     * @var float $Cartons
     */
    protected $Cartons = null;

    /**
     * @var string $PrimUOM
     */
    protected $PrimUOM = null;

    /**
     * @var string $SecUOM
     */
    protected $SecUOM = null;

    /**
     * @var string $DimUOM
     */
    protected $DimUOM = null;

    /**
     * @var float $Min
     */
    protected $Min = null;

    /**
     * @var float $Max
     */
    protected $Max = null;

    /**
     * @var float $Volume
     */
    protected $Volume = null;

    /**
     * @var string $VolumeUnit
     */
    protected $VolumeUnit = null;

    /**
     * @var string $WeightUnit
     */
    protected $WeightUnit = null;

    /**
     * @var float $TotVolume
     */
    protected $TotVolume = null;

    /**
     * @var float $TotWeight
     */
    protected $TotWeight = null;

    /**
     * @var float $Cost
     */
    protected $Cost = null;

    /**
     * @var float $TrackByCost
     */
    protected $TrackByCost = null;

    /**
     * @var string $SupplierName
     */
    protected $SupplierName = null;

    /**
     * @var string $MovableUnitLabel
     */
    protected $MovableUnitLabel = null;

    /**
     * @var string $UPC
     */
    protected $UPC = null;

    /**
     * @param int $FacilityID
     * @param int $CustomerID
     * @param int $ItemID
     * @param \DateTime $ExpirationDate
     * @param float $DimQty
     * @param float $SumOfOnHand
     * @param float $SumOfAllocated
     * @param float $SumOfAvailable
     * @param float $SumOfVAvailable
     * @param float $QuarantinedQty
     * @param float $OverOrdered
     * @param boolean $HasAvailable
     * @param float $Weight
     * @param float $Cartons
     * @param float $Min
     * @param float $Max
     * @param float $Volume
     * @param float $TotVolume
     * @param float $TotWeight
     * @param float $Cost
     * @param float $TrackByCost
     */
    public function __construct($FacilityID, $CustomerID, $ItemID, \DateTime $ExpirationDate, $DimQty, $SumOfOnHand, $SumOfAllocated, $SumOfAvailable, $SumOfVAvailable, $QuarantinedQty, $OverOrdered, $HasAvailable, $Weight, $Cartons, $Min, $Max, $Volume, $TotVolume, $TotWeight, $Cost, $TrackByCost)
    {
      $this->FacilityID = $FacilityID;
      $this->CustomerID = $CustomerID;
      $this->ItemID = $ItemID;
      $this->ExpirationDate = $ExpirationDate->format(\DateTime::ATOM);
      $this->DimQty = $DimQty;
      $this->SumOfOnHand = $SumOfOnHand;
      $this->SumOfAllocated = $SumOfAllocated;
      $this->SumOfAvailable = $SumOfAvailable;
      $this->SumOfVAvailable = $SumOfVAvailable;
      $this->QuarantinedQty = $QuarantinedQty;
      $this->OverOrdered = $OverOrdered;
      $this->HasAvailable = $HasAvailable;
      $this->Weight = $Weight;
      $this->Cartons = $Cartons;
      $this->Min = $Min;
      $this->Max = $Max;
      $this->Volume = $Volume;
      $this->TotVolume = $TotVolume;
      $this->TotWeight = $TotWeight;
      $this->Cost = $Cost;
      $this->TrackByCost = $TrackByCost;
    }

    /**
     * @return string
     */
    public function getSku()
    {
      return $this->Sku;
    }

    /**
     * @param string $Sku
     * @return StockStatusEntry
     */
    public function setSku($Sku)
    {
      $this->Sku = $Sku;
      return $this;
    }

    /**
     * @return int
     */
    public function getFacilityID()
    {
      return $this->FacilityID;
    }

    /**
     * @param int $FacilityID
     * @return StockStatusEntry
     */
    public function setFacilityID($FacilityID)
    {
      $this->FacilityID = $FacilityID;
      return $this;
    }

    /**
     * @return string
     */
    public function getFacilityName()
    {
      return $this->FacilityName;
    }

    /**
     * @param string $FacilityName
     * @return StockStatusEntry
     */
    public function setFacilityName($FacilityName)
    {
      $this->FacilityName = $FacilityName;
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
     * @return StockStatusEntry
     */
    public function setCustomerID($CustomerID)
    {
      $this->CustomerID = $CustomerID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCDescription()
    {
      return $this->CDescription;
    }

    /**
     * @param string $CDescription
     * @return StockStatusEntry
     */
    public function setCDescription($CDescription)
    {
      $this->CDescription = $CDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
      return $this->Address1;
    }

    /**
     * @param string $Address1
     * @return StockStatusEntry
     */
    public function setAddress1($Address1)
    {
      $this->Address1 = $Address1;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return StockStatusEntry
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param string $State
     * @return StockStatusEntry
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return string
     */
    public function getZip()
    {
      return $this->Zip;
    }

    /**
     * @param string $Zip
     * @return StockStatusEntry
     */
    public function setZip($Zip)
    {
      $this->Zip = $Zip;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemID()
    {
      return $this->ItemID;
    }

    /**
     * @param int $ItemID
     * @return StockStatusEntry
     */
    public function setItemID($ItemID)
    {
      $this->ItemID = $ItemID;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemDescription()
    {
      return $this->ItemDescription;
    }

    /**
     * @param string $ItemDescription
     * @return StockStatusEntry
     */
    public function setItemDescription($ItemDescription)
    {
      $this->ItemDescription = $ItemDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription2()
    {
      return $this->Description2;
    }

    /**
     * @param string $Description2
     * @return StockStatusEntry
     */
    public function setDescription2($Description2)
    {
      $this->Description2 = $Description2;
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
     * @return StockStatusEntry
     */
    public function setQualifier($Qualifier)
    {
      $this->Qualifier = $Qualifier;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param string $Location
     * @return StockStatusEntry
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
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
     * @return StockStatusEntry
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
     * @return StockStatusEntry
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
     * @return StockStatusEntry
     */
    public function setExpirationDate(\DateTime $ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return float
     */
    public function getDimQty()
    {
      return $this->DimQty;
    }

    /**
     * @param float $DimQty
     * @return StockStatusEntry
     */
    public function setDimQty($DimQty)
    {
      $this->DimQty = $DimQty;
      return $this;
    }

    /**
     * @return float
     */
    public function getSumOfOnHand()
    {
      return $this->SumOfOnHand;
    }

    /**
     * @param float $SumOfOnHand
     * @return StockStatusEntry
     */
    public function setSumOfOnHand($SumOfOnHand)
    {
      $this->SumOfOnHand = $SumOfOnHand;
      return $this;
    }

    /**
     * @return float
     */
    public function getSumOfAllocated()
    {
      return $this->SumOfAllocated;
    }

    /**
     * @param float $SumOfAllocated
     * @return StockStatusEntry
     */
    public function setSumOfAllocated($SumOfAllocated)
    {
      $this->SumOfAllocated = $SumOfAllocated;
      return $this;
    }

    /**
     * @return float
     */
    public function getSumOfAvailable()
    {
      return $this->SumOfAvailable;
    }

    /**
     * @param float $SumOfAvailable
     * @return StockStatusEntry
     */
    public function setSumOfAvailable($SumOfAvailable)
    {
      $this->SumOfAvailable = $SumOfAvailable;
      return $this;
    }

    /**
     * @return float
     */
    public function getSumOfVAvailable()
    {
      return $this->SumOfVAvailable;
    }

    /**
     * @param float $SumOfVAvailable
     * @return StockStatusEntry
     */
    public function setSumOfVAvailable($SumOfVAvailable)
    {
      $this->SumOfVAvailable = $SumOfVAvailable;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuarantinedQty()
    {
      return $this->QuarantinedQty;
    }

    /**
     * @param float $QuarantinedQty
     * @return StockStatusEntry
     */
    public function setQuarantinedQty($QuarantinedQty)
    {
      $this->QuarantinedQty = $QuarantinedQty;
      return $this;
    }

    /**
     * @return float
     */
    public function getOverOrdered()
    {
      return $this->OverOrdered;
    }

    /**
     * @param float $OverOrdered
     * @return StockStatusEntry
     */
    public function setOverOrdered($OverOrdered)
    {
      $this->OverOrdered = $OverOrdered;
      return $this;
    }

    /**
     * @return string
     */
    public function getDummyDepleted()
    {
      return $this->DummyDepleted;
    }

    /**
     * @param string $DummyDepleted
     * @return StockStatusEntry
     */
    public function setDummyDepleted($DummyDepleted)
    {
      $this->DummyDepleted = $DummyDepleted;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasAvailable()
    {
      return $this->HasAvailable;
    }

    /**
     * @param boolean $HasAvailable
     * @return StockStatusEntry
     */
    public function setHasAvailable($HasAvailable)
    {
      $this->HasAvailable = $HasAvailable;
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
     * @return StockStatusEntry
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return float
     */
    public function getCartons()
    {
      return $this->Cartons;
    }

    /**
     * @param float $Cartons
     * @return StockStatusEntry
     */
    public function setCartons($Cartons)
    {
      $this->Cartons = $Cartons;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrimUOM()
    {
      return $this->PrimUOM;
    }

    /**
     * @param string $PrimUOM
     * @return StockStatusEntry
     */
    public function setPrimUOM($PrimUOM)
    {
      $this->PrimUOM = $PrimUOM;
      return $this;
    }

    /**
     * @return string
     */
    public function getSecUOM()
    {
      return $this->SecUOM;
    }

    /**
     * @param string $SecUOM
     * @return StockStatusEntry
     */
    public function setSecUOM($SecUOM)
    {
      $this->SecUOM = $SecUOM;
      return $this;
    }

    /**
     * @return string
     */
    public function getDimUOM()
    {
      return $this->DimUOM;
    }

    /**
     * @param string $DimUOM
     * @return StockStatusEntry
     */
    public function setDimUOM($DimUOM)
    {
      $this->DimUOM = $DimUOM;
      return $this;
    }

    /**
     * @return float
     */
    public function getMin()
    {
      return $this->Min;
    }

    /**
     * @param float $Min
     * @return StockStatusEntry
     */
    public function setMin($Min)
    {
      $this->Min = $Min;
      return $this;
    }

    /**
     * @return float
     */
    public function getMax()
    {
      return $this->Max;
    }

    /**
     * @param float $Max
     * @return StockStatusEntry
     */
    public function setMax($Max)
    {
      $this->Max = $Max;
      return $this;
    }

    /**
     * @return float
     */
    public function getVolume()
    {
      return $this->Volume;
    }

    /**
     * @param float $Volume
     * @return StockStatusEntry
     */
    public function setVolume($Volume)
    {
      $this->Volume = $Volume;
      return $this;
    }

    /**
     * @return string
     */
    public function getVolumeUnit()
    {
      return $this->VolumeUnit;
    }

    /**
     * @param string $VolumeUnit
     * @return StockStatusEntry
     */
    public function setVolumeUnit($VolumeUnit)
    {
      $this->VolumeUnit = $VolumeUnit;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeightUnit()
    {
      return $this->WeightUnit;
    }

    /**
     * @param string $WeightUnit
     * @return StockStatusEntry
     */
    public function setWeightUnit($WeightUnit)
    {
      $this->WeightUnit = $WeightUnit;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotVolume()
    {
      return $this->TotVolume;
    }

    /**
     * @param float $TotVolume
     * @return StockStatusEntry
     */
    public function setTotVolume($TotVolume)
    {
      $this->TotVolume = $TotVolume;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotWeight()
    {
      return $this->TotWeight;
    }

    /**
     * @param float $TotWeight
     * @return StockStatusEntry
     */
    public function setTotWeight($TotWeight)
    {
      $this->TotWeight = $TotWeight;
      return $this;
    }

    /**
     * @return float
     */
    public function getCost()
    {
      return $this->Cost;
    }

    /**
     * @param float $Cost
     * @return StockStatusEntry
     */
    public function setCost($Cost)
    {
      $this->Cost = $Cost;
      return $this;
    }

    /**
     * @return float
     */
    public function getTrackByCost()
    {
      return $this->TrackByCost;
    }

    /**
     * @param float $TrackByCost
     * @return StockStatusEntry
     */
    public function setTrackByCost($TrackByCost)
    {
      $this->TrackByCost = $TrackByCost;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierName()
    {
      return $this->SupplierName;
    }

    /**
     * @param string $SupplierName
     * @return StockStatusEntry
     */
    public function setSupplierName($SupplierName)
    {
      $this->SupplierName = $SupplierName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMovableUnitLabel()
    {
      return $this->MovableUnitLabel;
    }

    /**
     * @param string $MovableUnitLabel
     * @return StockStatusEntry
     */
    public function setMovableUnitLabel($MovableUnitLabel)
    {
      $this->MovableUnitLabel = $MovableUnitLabel;
      return $this;
    }

    /**
     * @return string
     */
    public function getUPC()
    {
      return $this->UPC;
    }

    /**
     * @param string $UPC
     * @return StockStatusEntry
     */
    public function setUPC($UPC)
    {
      $this->UPC = $UPC;
      return $this;
    }

}
