<?php

class Item
{

    /**
     * @var string $SKU
     */
    protected $SKU = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $Description2
     */
    protected $Description2 = null;

    /**
     * @var int $CustomerID
     */
    protected $CustomerID = null;

    /**
     * @var float $Min
     */
    protected $Min = null;

    /**
     * @var float $Max
     */
    protected $Max = null;

    /**
     * @var float $ReorderQty
     */
    protected $ReorderQty = null;

    /**
     * @var int $CycleCount
     */
    protected $CycleCount = null;

    /**
     * @var string $InventoryCategory
     */
    protected $InventoryCategory = null;

    /**
     * @var InventoryMethod $InventoryMethod
     */
    protected $InventoryMethod = null;

    /**
     * @var float $Cost
     */
    protected $Cost = null;

    /**
     * @var string $UPC
     */
    protected $UPC = null;

    /**
     * @var float $Temperature
     */
    protected $Temperature = null;

    /**
     * @var boolean $TempAllowZero
     */
    protected $TempAllowZero = null;

    /**
     * @var boolean $IsTrackLotNumber
     */
    protected $IsTrackLotNumber = null;

    /**
     * @var boolean $IsTrackLotNumberRequired
     */
    protected $IsTrackLotNumberRequired = null;

    /**
     * @var boolean $IsTrackSerialNumber
     */
    protected $IsTrackSerialNumber = null;

    /**
     * @var boolean $IsTrackSerialNumberRequired
     */
    protected $IsTrackSerialNumberRequired = null;

    /**
     * @var boolean $IsTrackSerialNumberUnique
     */
    protected $IsTrackSerialNumberUnique = null;

    /**
     * @var boolean $IsTrackExpirationDate
     */
    protected $IsTrackExpirationDate = null;

    /**
     * @var boolean $IsTrackExpirationDateRequired
     */
    protected $IsTrackExpirationDateRequired = null;

    /**
     * @var boolean $IsTrackCost
     */
    protected $IsTrackCost = null;

    /**
     * @var boolean $IsTrackCostRequired
     */
    protected $IsTrackCostRequired = null;

    /**
     * @var string $MaterialNotes
     */
    protected $MaterialNotes = null;

    /**
     * @var boolean $Deactivated
     */
    protected $Deactivated = null;

    /**
     * @var string $NMFC
     */
    protected $NMFC = null;

    /**
     * @var string $InventoryUnitOfMeasure
     */
    protected $InventoryUnitOfMeasure = null;

    /**
     * @var string $LabelingUnitOfMeasure
     */
    protected $LabelingUnitOfMeasure = null;

    /**
     * @var float $InventoryUnitsPerLabelingUnit
     */
    protected $InventoryUnitsPerLabelingUnit = null;

    /**
     * @var MeasurementSystemType $MeasurementSystem
     */
    protected $MeasurementSystem = null;

    /**
     * @var float $LabelingUnitLength
     */
    protected $LabelingUnitLength = null;

    /**
     * @var float $LabelingUnitWidth
     */
    protected $LabelingUnitWidth = null;

    /**
     * @var float $LabelingUnitHeight
     */
    protected $LabelingUnitHeight = null;

    /**
     * @var float $LabelingUnitWeight
     */
    protected $LabelingUnitWeight = null;

    /**
     * @var string $SecondaryUnitOfMeasure
     */
    protected $SecondaryUnitOfMeasure = null;

    /**
     * @var boolean $IsSecondaryUOMInventoryAlso
     */
    protected $IsSecondaryUOMInventoryAlso = null;

    /**
     * @var float $InventoryUnitsPerSecondUnit
     */
    protected $InventoryUnitsPerSecondUnit = null;

    /**
     * @var string $MovableUnitType
     */
    protected $MovableUnitType = null;

    /**
     * @var float $MovableUnitLength
     */
    protected $MovableUnitLength = null;

    /**
     * @var float $MovableUnitWidth
     */
    protected $MovableUnitWidth = null;

    /**
     * @var float $MovableUnitHeight
     */
    protected $MovableUnitHeight = null;

    /**
     * @var float $MovableUnitWeight
     */
    protected $MovableUnitWeight = null;

    /**
     * @var float $MovableUnitTie
     */
    protected $MovableUnitTie = null;

    /**
     * @var float $MovableUnitHigh
     */
    protected $MovableUnitHigh = null;

    /**
     * @var float $MovableUnitQty
     */
    protected $MovableUnitQty = null;

    /**
     * @var boolean $IsHazMat
     */
    protected $IsHazMat = null;

    /**
     * @var string $HazMatID
     */
    protected $HazMatID = null;

    /**
     * @var string $HazMatShippingName
     */
    protected $HazMatShippingName = null;

    /**
     * @var string $HazMatHazardClass
     */
    protected $HazMatHazardClass = null;

    /**
     * @var HazMatPackingGroup $HazMatPackingGroup
     */
    protected $HazMatPackingGroup = null;

    /**
     * @var string $HazMatFlashPoint
     */
    protected $HazMatFlashPoint = null;

    /**
     * @var string $HazMatLabelCode
     */
    protected $HazMatLabelCode = null;

    /**
     * @var HazMatFlag $HazMatFlag
     */
    protected $HazMatFlag = null;

    /**
     * @var string $ImageUrl
     */
    protected $ImageUrl = null;

    /**
     * @var string $StorageUnitOfMeasure
     */
    protected $StorageUnitOfMeasure = null;

    /**
     * @var float $InventoryUnitsPerStorageUnit
     */
    protected $InventoryUnitsPerStorageUnit = null;

    /**
     * @var int $StorageCountScriptTemplateID
     */
    protected $StorageCountScriptTemplateID = null;

    /**
     * @var ArrayOfString $ItemQualifiers
     */
    protected $ItemQualifiers = null;

    /**
     * @var ArrayOfItemMaterial $ItemMaterials
     */
    protected $ItemMaterials = null;

    /**
     * @var ArrayOfItemFacility $ItemFacilitys
     */
    protected $ItemFacilitys = null;

    /**
     * @var ArrayOfItemFacilityStorageRate $ItemFacilityStorageRates
     */
    protected $ItemFacilityStorageRates = null;

    /**
     * @param int $CustomerID
     * @param float $Min
     * @param float $Max
     * @param float $ReorderQty
     * @param int $CycleCount
     * @param InventoryMethod $InventoryMethod
     * @param float $Cost
     * @param float $Temperature
     * @param boolean $TempAllowZero
     * @param boolean $IsTrackLotNumber
     * @param boolean $IsTrackLotNumberRequired
     * @param boolean $IsTrackSerialNumber
     * @param boolean $IsTrackSerialNumberRequired
     * @param boolean $IsTrackSerialNumberUnique
     * @param boolean $IsTrackExpirationDate
     * @param boolean $IsTrackExpirationDateRequired
     * @param boolean $IsTrackCost
     * @param boolean $IsTrackCostRequired
     * @param boolean $Deactivated
     * @param float $InventoryUnitsPerLabelingUnit
     * @param MeasurementSystemType $MeasurementSystem
     * @param float $LabelingUnitLength
     * @param float $LabelingUnitWidth
     * @param float $LabelingUnitHeight
     * @param float $LabelingUnitWeight
     * @param boolean $IsSecondaryUOMInventoryAlso
     * @param float $InventoryUnitsPerSecondUnit
     * @param float $MovableUnitLength
     * @param float $MovableUnitWidth
     * @param float $MovableUnitHeight
     * @param float $MovableUnitWeight
     * @param float $MovableUnitTie
     * @param float $MovableUnitHigh
     * @param float $MovableUnitQty
     * @param boolean $IsHazMat
     * @param HazMatPackingGroup $HazMatPackingGroup
     * @param HazMatFlag $HazMatFlag
     * @param float $InventoryUnitsPerStorageUnit
     * @param int $StorageCountScriptTemplateID
     */
    public function __construct($CustomerID, $Min, $Max, $ReorderQty, $CycleCount, $InventoryMethod, $Cost, $Temperature, $TempAllowZero, $IsTrackLotNumber, $IsTrackLotNumberRequired, $IsTrackSerialNumber, $IsTrackSerialNumberRequired, $IsTrackSerialNumberUnique, $IsTrackExpirationDate, $IsTrackExpirationDateRequired, $IsTrackCost, $IsTrackCostRequired, $Deactivated, $InventoryUnitsPerLabelingUnit, $MeasurementSystem, $LabelingUnitLength, $LabelingUnitWidth, $LabelingUnitHeight, $LabelingUnitWeight, $IsSecondaryUOMInventoryAlso, $InventoryUnitsPerSecondUnit, $MovableUnitLength, $MovableUnitWidth, $MovableUnitHeight, $MovableUnitWeight, $MovableUnitTie, $MovableUnitHigh, $MovableUnitQty, $IsHazMat, $HazMatPackingGroup, $HazMatFlag, $InventoryUnitsPerStorageUnit, $StorageCountScriptTemplateID)
    {
      $this->CustomerID = $CustomerID;
      $this->Min = $Min;
      $this->Max = $Max;
      $this->ReorderQty = $ReorderQty;
      $this->CycleCount = $CycleCount;
      $this->InventoryMethod = $InventoryMethod;
      $this->Cost = $Cost;
      $this->Temperature = $Temperature;
      $this->TempAllowZero = $TempAllowZero;
      $this->IsTrackLotNumber = $IsTrackLotNumber;
      $this->IsTrackLotNumberRequired = $IsTrackLotNumberRequired;
      $this->IsTrackSerialNumber = $IsTrackSerialNumber;
      $this->IsTrackSerialNumberRequired = $IsTrackSerialNumberRequired;
      $this->IsTrackSerialNumberUnique = $IsTrackSerialNumberUnique;
      $this->IsTrackExpirationDate = $IsTrackExpirationDate;
      $this->IsTrackExpirationDateRequired = $IsTrackExpirationDateRequired;
      $this->IsTrackCost = $IsTrackCost;
      $this->IsTrackCostRequired = $IsTrackCostRequired;
      $this->Deactivated = $Deactivated;
      $this->InventoryUnitsPerLabelingUnit = $InventoryUnitsPerLabelingUnit;
      $this->MeasurementSystem = $MeasurementSystem;
      $this->LabelingUnitLength = $LabelingUnitLength;
      $this->LabelingUnitWidth = $LabelingUnitWidth;
      $this->LabelingUnitHeight = $LabelingUnitHeight;
      $this->LabelingUnitWeight = $LabelingUnitWeight;
      $this->IsSecondaryUOMInventoryAlso = $IsSecondaryUOMInventoryAlso;
      $this->InventoryUnitsPerSecondUnit = $InventoryUnitsPerSecondUnit;
      $this->MovableUnitLength = $MovableUnitLength;
      $this->MovableUnitWidth = $MovableUnitWidth;
      $this->MovableUnitHeight = $MovableUnitHeight;
      $this->MovableUnitWeight = $MovableUnitWeight;
      $this->MovableUnitTie = $MovableUnitTie;
      $this->MovableUnitHigh = $MovableUnitHigh;
      $this->MovableUnitQty = $MovableUnitQty;
      $this->IsHazMat = $IsHazMat;
      $this->HazMatPackingGroup = $HazMatPackingGroup;
      $this->HazMatFlag = $HazMatFlag;
      $this->InventoryUnitsPerStorageUnit = $InventoryUnitsPerStorageUnit;
      $this->StorageCountScriptTemplateID = $StorageCountScriptTemplateID;
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
     * @return Item
     */
    public function setSKU($SKU)
    {
      $this->SKU = $SKU;
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
     * @return Item
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return Item
     */
    public function setDescription2($Description2)
    {
      $this->Description2 = $Description2;
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
     * @return Item
     */
    public function setCustomerID($CustomerID)
    {
      $this->CustomerID = $CustomerID;
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
     * @return Item
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
     * @return Item
     */
    public function setMax($Max)
    {
      $this->Max = $Max;
      return $this;
    }

    /**
     * @return float
     */
    public function getReorderQty()
    {
      return $this->ReorderQty;
    }

    /**
     * @param float $ReorderQty
     * @return Item
     */
    public function setReorderQty($ReorderQty)
    {
      $this->ReorderQty = $ReorderQty;
      return $this;
    }

    /**
     * @return int
     */
    public function getCycleCount()
    {
      return $this->CycleCount;
    }

    /**
     * @param int $CycleCount
     * @return Item
     */
    public function setCycleCount($CycleCount)
    {
      $this->CycleCount = $CycleCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getInventoryCategory()
    {
      return $this->InventoryCategory;
    }

    /**
     * @param string $InventoryCategory
     * @return Item
     */
    public function setInventoryCategory($InventoryCategory)
    {
      $this->InventoryCategory = $InventoryCategory;
      return $this;
    }

    /**
     * @return InventoryMethod
     */
    public function getInventoryMethod()
    {
      return $this->InventoryMethod;
    }

    /**
     * @param InventoryMethod $InventoryMethod
     * @return Item
     */
    public function setInventoryMethod($InventoryMethod)
    {
      $this->InventoryMethod = $InventoryMethod;
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
     * @return Item
     */
    public function setCost($Cost)
    {
      $this->Cost = $Cost;
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
     * @return Item
     */
    public function setUPC($UPC)
    {
      $this->UPC = $UPC;
      return $this;
    }

    /**
     * @return float
     */
    public function getTemperature()
    {
      return $this->Temperature;
    }

    /**
     * @param float $Temperature
     * @return Item
     */
    public function setTemperature($Temperature)
    {
      $this->Temperature = $Temperature;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTempAllowZero()
    {
      return $this->TempAllowZero;
    }

    /**
     * @param boolean $TempAllowZero
     * @return Item
     */
    public function setTempAllowZero($TempAllowZero)
    {
      $this->TempAllowZero = $TempAllowZero;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTrackLotNumber()
    {
      return $this->IsTrackLotNumber;
    }

    /**
     * @param boolean $IsTrackLotNumber
     * @return Item
     */
    public function setIsTrackLotNumber($IsTrackLotNumber)
    {
      $this->IsTrackLotNumber = $IsTrackLotNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTrackLotNumberRequired()
    {
      return $this->IsTrackLotNumberRequired;
    }

    /**
     * @param boolean $IsTrackLotNumberRequired
     * @return Item
     */
    public function setIsTrackLotNumberRequired($IsTrackLotNumberRequired)
    {
      $this->IsTrackLotNumberRequired = $IsTrackLotNumberRequired;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTrackSerialNumber()
    {
      return $this->IsTrackSerialNumber;
    }

    /**
     * @param boolean $IsTrackSerialNumber
     * @return Item
     */
    public function setIsTrackSerialNumber($IsTrackSerialNumber)
    {
      $this->IsTrackSerialNumber = $IsTrackSerialNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTrackSerialNumberRequired()
    {
      return $this->IsTrackSerialNumberRequired;
    }

    /**
     * @param boolean $IsTrackSerialNumberRequired
     * @return Item
     */
    public function setIsTrackSerialNumberRequired($IsTrackSerialNumberRequired)
    {
      $this->IsTrackSerialNumberRequired = $IsTrackSerialNumberRequired;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTrackSerialNumberUnique()
    {
      return $this->IsTrackSerialNumberUnique;
    }

    /**
     * @param boolean $IsTrackSerialNumberUnique
     * @return Item
     */
    public function setIsTrackSerialNumberUnique($IsTrackSerialNumberUnique)
    {
      $this->IsTrackSerialNumberUnique = $IsTrackSerialNumberUnique;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTrackExpirationDate()
    {
      return $this->IsTrackExpirationDate;
    }

    /**
     * @param boolean $IsTrackExpirationDate
     * @return Item
     */
    public function setIsTrackExpirationDate($IsTrackExpirationDate)
    {
      $this->IsTrackExpirationDate = $IsTrackExpirationDate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTrackExpirationDateRequired()
    {
      return $this->IsTrackExpirationDateRequired;
    }

    /**
     * @param boolean $IsTrackExpirationDateRequired
     * @return Item
     */
    public function setIsTrackExpirationDateRequired($IsTrackExpirationDateRequired)
    {
      $this->IsTrackExpirationDateRequired = $IsTrackExpirationDateRequired;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTrackCost()
    {
      return $this->IsTrackCost;
    }

    /**
     * @param boolean $IsTrackCost
     * @return Item
     */
    public function setIsTrackCost($IsTrackCost)
    {
      $this->IsTrackCost = $IsTrackCost;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTrackCostRequired()
    {
      return $this->IsTrackCostRequired;
    }

    /**
     * @param boolean $IsTrackCostRequired
     * @return Item
     */
    public function setIsTrackCostRequired($IsTrackCostRequired)
    {
      $this->IsTrackCostRequired = $IsTrackCostRequired;
      return $this;
    }

    /**
     * @return string
     */
    public function getMaterialNotes()
    {
      return $this->MaterialNotes;
    }

    /**
     * @param string $MaterialNotes
     * @return Item
     */
    public function setMaterialNotes($MaterialNotes)
    {
      $this->MaterialNotes = $MaterialNotes;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeactivated()
    {
      return $this->Deactivated;
    }

    /**
     * @param boolean $Deactivated
     * @return Item
     */
    public function setDeactivated($Deactivated)
    {
      $this->Deactivated = $Deactivated;
      return $this;
    }

    /**
     * @return string
     */
    public function getNMFC()
    {
      return $this->NMFC;
    }

    /**
     * @param string $NMFC
     * @return Item
     */
    public function setNMFC($NMFC)
    {
      $this->NMFC = $NMFC;
      return $this;
    }

    /**
     * @return string
     */
    public function getInventoryUnitOfMeasure()
    {
      return $this->InventoryUnitOfMeasure;
    }

    /**
     * @param string $InventoryUnitOfMeasure
     * @return Item
     */
    public function setInventoryUnitOfMeasure($InventoryUnitOfMeasure)
    {
      $this->InventoryUnitOfMeasure = $InventoryUnitOfMeasure;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabelingUnitOfMeasure()
    {
      return $this->LabelingUnitOfMeasure;
    }

    /**
     * @param string $LabelingUnitOfMeasure
     * @return Item
     */
    public function setLabelingUnitOfMeasure($LabelingUnitOfMeasure)
    {
      $this->LabelingUnitOfMeasure = $LabelingUnitOfMeasure;
      return $this;
    }

    /**
     * @return float
     */
    public function getInventoryUnitsPerLabelingUnit()
    {
      return $this->InventoryUnitsPerLabelingUnit;
    }

    /**
     * @param float $InventoryUnitsPerLabelingUnit
     * @return Item
     */
    public function setInventoryUnitsPerLabelingUnit($InventoryUnitsPerLabelingUnit)
    {
      $this->InventoryUnitsPerLabelingUnit = $InventoryUnitsPerLabelingUnit;
      return $this;
    }

    /**
     * @return MeasurementSystemType
     */
    public function getMeasurementSystem()
    {
      return $this->MeasurementSystem;
    }

    /**
     * @param MeasurementSystemType $MeasurementSystem
     * @return Item
     */
    public function setMeasurementSystem($MeasurementSystem)
    {
      $this->MeasurementSystem = $MeasurementSystem;
      return $this;
    }

    /**
     * @return float
     */
    public function getLabelingUnitLength()
    {
      return $this->LabelingUnitLength;
    }

    /**
     * @param float $LabelingUnitLength
     * @return Item
     */
    public function setLabelingUnitLength($LabelingUnitLength)
    {
      $this->LabelingUnitLength = $LabelingUnitLength;
      return $this;
    }

    /**
     * @return float
     */
    public function getLabelingUnitWidth()
    {
      return $this->LabelingUnitWidth;
    }

    /**
     * @param float $LabelingUnitWidth
     * @return Item
     */
    public function setLabelingUnitWidth($LabelingUnitWidth)
    {
      $this->LabelingUnitWidth = $LabelingUnitWidth;
      return $this;
    }

    /**
     * @return float
     */
    public function getLabelingUnitHeight()
    {
      return $this->LabelingUnitHeight;
    }

    /**
     * @param float $LabelingUnitHeight
     * @return Item
     */
    public function setLabelingUnitHeight($LabelingUnitHeight)
    {
      $this->LabelingUnitHeight = $LabelingUnitHeight;
      return $this;
    }

    /**
     * @return float
     */
    public function getLabelingUnitWeight()
    {
      return $this->LabelingUnitWeight;
    }

    /**
     * @param float $LabelingUnitWeight
     * @return Item
     */
    public function setLabelingUnitWeight($LabelingUnitWeight)
    {
      $this->LabelingUnitWeight = $LabelingUnitWeight;
      return $this;
    }

    /**
     * @return string
     */
    public function getSecondaryUnitOfMeasure()
    {
      return $this->SecondaryUnitOfMeasure;
    }

    /**
     * @param string $SecondaryUnitOfMeasure
     * @return Item
     */
    public function setSecondaryUnitOfMeasure($SecondaryUnitOfMeasure)
    {
      $this->SecondaryUnitOfMeasure = $SecondaryUnitOfMeasure;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSecondaryUOMInventoryAlso()
    {
      return $this->IsSecondaryUOMInventoryAlso;
    }

    /**
     * @param boolean $IsSecondaryUOMInventoryAlso
     * @return Item
     */
    public function setIsSecondaryUOMInventoryAlso($IsSecondaryUOMInventoryAlso)
    {
      $this->IsSecondaryUOMInventoryAlso = $IsSecondaryUOMInventoryAlso;
      return $this;
    }

    /**
     * @return float
     */
    public function getInventoryUnitsPerSecondUnit()
    {
      return $this->InventoryUnitsPerSecondUnit;
    }

    /**
     * @param float $InventoryUnitsPerSecondUnit
     * @return Item
     */
    public function setInventoryUnitsPerSecondUnit($InventoryUnitsPerSecondUnit)
    {
      $this->InventoryUnitsPerSecondUnit = $InventoryUnitsPerSecondUnit;
      return $this;
    }

    /**
     * @return string
     */
    public function getMovableUnitType()
    {
      return $this->MovableUnitType;
    }

    /**
     * @param string $MovableUnitType
     * @return Item
     */
    public function setMovableUnitType($MovableUnitType)
    {
      $this->MovableUnitType = $MovableUnitType;
      return $this;
    }

    /**
     * @return float
     */
    public function getMovableUnitLength()
    {
      return $this->MovableUnitLength;
    }

    /**
     * @param float $MovableUnitLength
     * @return Item
     */
    public function setMovableUnitLength($MovableUnitLength)
    {
      $this->MovableUnitLength = $MovableUnitLength;
      return $this;
    }

    /**
     * @return float
     */
    public function getMovableUnitWidth()
    {
      return $this->MovableUnitWidth;
    }

    /**
     * @param float $MovableUnitWidth
     * @return Item
     */
    public function setMovableUnitWidth($MovableUnitWidth)
    {
      $this->MovableUnitWidth = $MovableUnitWidth;
      return $this;
    }

    /**
     * @return float
     */
    public function getMovableUnitHeight()
    {
      return $this->MovableUnitHeight;
    }

    /**
     * @param float $MovableUnitHeight
     * @return Item
     */
    public function setMovableUnitHeight($MovableUnitHeight)
    {
      $this->MovableUnitHeight = $MovableUnitHeight;
      return $this;
    }

    /**
     * @return float
     */
    public function getMovableUnitWeight()
    {
      return $this->MovableUnitWeight;
    }

    /**
     * @param float $MovableUnitWeight
     * @return Item
     */
    public function setMovableUnitWeight($MovableUnitWeight)
    {
      $this->MovableUnitWeight = $MovableUnitWeight;
      return $this;
    }

    /**
     * @return float
     */
    public function getMovableUnitTie()
    {
      return $this->MovableUnitTie;
    }

    /**
     * @param float $MovableUnitTie
     * @return Item
     */
    public function setMovableUnitTie($MovableUnitTie)
    {
      $this->MovableUnitTie = $MovableUnitTie;
      return $this;
    }

    /**
     * @return float
     */
    public function getMovableUnitHigh()
    {
      return $this->MovableUnitHigh;
    }

    /**
     * @param float $MovableUnitHigh
     * @return Item
     */
    public function setMovableUnitHigh($MovableUnitHigh)
    {
      $this->MovableUnitHigh = $MovableUnitHigh;
      return $this;
    }

    /**
     * @return float
     */
    public function getMovableUnitQty()
    {
      return $this->MovableUnitQty;
    }

    /**
     * @param float $MovableUnitQty
     * @return Item
     */
    public function setMovableUnitQty($MovableUnitQty)
    {
      $this->MovableUnitQty = $MovableUnitQty;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsHazMat()
    {
      return $this->IsHazMat;
    }

    /**
     * @param boolean $IsHazMat
     * @return Item
     */
    public function setIsHazMat($IsHazMat)
    {
      $this->IsHazMat = $IsHazMat;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazMatID()
    {
      return $this->HazMatID;
    }

    /**
     * @param string $HazMatID
     * @return Item
     */
    public function setHazMatID($HazMatID)
    {
      $this->HazMatID = $HazMatID;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazMatShippingName()
    {
      return $this->HazMatShippingName;
    }

    /**
     * @param string $HazMatShippingName
     * @return Item
     */
    public function setHazMatShippingName($HazMatShippingName)
    {
      $this->HazMatShippingName = $HazMatShippingName;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazMatHazardClass()
    {
      return $this->HazMatHazardClass;
    }

    /**
     * @param string $HazMatHazardClass
     * @return Item
     */
    public function setHazMatHazardClass($HazMatHazardClass)
    {
      $this->HazMatHazardClass = $HazMatHazardClass;
      return $this;
    }

    /**
     * @return HazMatPackingGroup
     */
    public function getHazMatPackingGroup()
    {
      return $this->HazMatPackingGroup;
    }

    /**
     * @param HazMatPackingGroup $HazMatPackingGroup
     * @return Item
     */
    public function setHazMatPackingGroup($HazMatPackingGroup)
    {
      $this->HazMatPackingGroup = $HazMatPackingGroup;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazMatFlashPoint()
    {
      return $this->HazMatFlashPoint;
    }

    /**
     * @param string $HazMatFlashPoint
     * @return Item
     */
    public function setHazMatFlashPoint($HazMatFlashPoint)
    {
      $this->HazMatFlashPoint = $HazMatFlashPoint;
      return $this;
    }

    /**
     * @return string
     */
    public function getHazMatLabelCode()
    {
      return $this->HazMatLabelCode;
    }

    /**
     * @param string $HazMatLabelCode
     * @return Item
     */
    public function setHazMatLabelCode($HazMatLabelCode)
    {
      $this->HazMatLabelCode = $HazMatLabelCode;
      return $this;
    }

    /**
     * @return HazMatFlag
     */
    public function getHazMatFlag()
    {
      return $this->HazMatFlag;
    }

    /**
     * @param HazMatFlag $HazMatFlag
     * @return Item
     */
    public function setHazMatFlag($HazMatFlag)
    {
      $this->HazMatFlag = $HazMatFlag;
      return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
      return $this->ImageUrl;
    }

    /**
     * @param string $ImageUrl
     * @return Item
     */
    public function setImageUrl($ImageUrl)
    {
      $this->ImageUrl = $ImageUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getStorageUnitOfMeasure()
    {
      return $this->StorageUnitOfMeasure;
    }

    /**
     * @param string $StorageUnitOfMeasure
     * @return Item
     */
    public function setStorageUnitOfMeasure($StorageUnitOfMeasure)
    {
      $this->StorageUnitOfMeasure = $StorageUnitOfMeasure;
      return $this;
    }

    /**
     * @return float
     */
    public function getInventoryUnitsPerStorageUnit()
    {
      return $this->InventoryUnitsPerStorageUnit;
    }

    /**
     * @param float $InventoryUnitsPerStorageUnit
     * @return Item
     */
    public function setInventoryUnitsPerStorageUnit($InventoryUnitsPerStorageUnit)
    {
      $this->InventoryUnitsPerStorageUnit = $InventoryUnitsPerStorageUnit;
      return $this;
    }

    /**
     * @return int
     */
    public function getStorageCountScriptTemplateID()
    {
      return $this->StorageCountScriptTemplateID;
    }

    /**
     * @param int $StorageCountScriptTemplateID
     * @return Item
     */
    public function setStorageCountScriptTemplateID($StorageCountScriptTemplateID)
    {
      $this->StorageCountScriptTemplateID = $StorageCountScriptTemplateID;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getItemQualifiers()
    {
      return $this->ItemQualifiers;
    }

    /**
     * @param ArrayOfString $ItemQualifiers
     * @return Item
     */
    public function setItemQualifiers($ItemQualifiers)
    {
      $this->ItemQualifiers = $ItemQualifiers;
      return $this;
    }

    /**
     * @return ArrayOfItemMaterial
     */
    public function getItemMaterials()
    {
      return $this->ItemMaterials;
    }

    /**
     * @param ArrayOfItemMaterial $ItemMaterials
     * @return Item
     */
    public function setItemMaterials($ItemMaterials)
    {
      $this->ItemMaterials = $ItemMaterials;
      return $this;
    }

    /**
     * @return ArrayOfItemFacility
     */
    public function getItemFacilitys()
    {
      return $this->ItemFacilitys;
    }

    /**
     * @param ArrayOfItemFacility $ItemFacilitys
     * @return Item
     */
    public function setItemFacilitys($ItemFacilitys)
    {
      $this->ItemFacilitys = $ItemFacilitys;
      return $this;
    }

    /**
     * @return ArrayOfItemFacilityStorageRate
     */
    public function getItemFacilityStorageRates()
    {
      return $this->ItemFacilityStorageRates;
    }

    /**
     * @param ArrayOfItemFacilityStorageRate $ItemFacilityStorageRates
     * @return Item
     */
    public function setItemFacilityStorageRates($ItemFacilityStorageRates)
    {
      $this->ItemFacilityStorageRates = $ItemFacilityStorageRates;
      return $this;
    }

}
