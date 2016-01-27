<?php

class ShipmentInfoExt
{

    /**
     * @var float $NumUnits1
     */
    protected $NumUnits1 = null;

    /**
     * @var int $NumUnits1TypeID
     */
    protected $NumUnits1TypeID = null;

    /**
     * @var string $NumUnits1TypeDesc
     */
    protected $NumUnits1TypeDesc = null;

    /**
     * @var float $NumUnits2
     */
    protected $NumUnits2 = null;

    /**
     * @var int $NumUnits2TypeID
     */
    protected $NumUnits2TypeID = null;

    /**
     * @var string $NumUnits2TypeDesc
     */
    protected $NumUnits2TypeDesc = null;

    /**
     * @var float $TotalWeight
     */
    protected $TotalWeight = null;

    /**
     * @var float $TotalVolume
     */
    protected $TotalVolume = null;

    /**
     * @param float $NumUnits1
     * @param int $NumUnits1TypeID
     * @param float $NumUnits2
     * @param int $NumUnits2TypeID
     * @param float $TotalWeight
     * @param float $TotalVolume
     */
    public function __construct($NumUnits1, $NumUnits1TypeID, $NumUnits2, $NumUnits2TypeID, $TotalWeight, $TotalVolume)
    {
      $this->NumUnits1 = $NumUnits1;
      $this->NumUnits1TypeID = $NumUnits1TypeID;
      $this->NumUnits2 = $NumUnits2;
      $this->NumUnits2TypeID = $NumUnits2TypeID;
      $this->TotalWeight = $TotalWeight;
      $this->TotalVolume = $TotalVolume;
    }

    /**
     * @return float
     */
    public function getNumUnits1()
    {
      return $this->NumUnits1;
    }

    /**
     * @param float $NumUnits1
     * @return ShipmentInfoExt
     */
    public function setNumUnits1($NumUnits1)
    {
      $this->NumUnits1 = $NumUnits1;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumUnits1TypeID()
    {
      return $this->NumUnits1TypeID;
    }

    /**
     * @param int $NumUnits1TypeID
     * @return ShipmentInfoExt
     */
    public function setNumUnits1TypeID($NumUnits1TypeID)
    {
      $this->NumUnits1TypeID = $NumUnits1TypeID;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumUnits1TypeDesc()
    {
      return $this->NumUnits1TypeDesc;
    }

    /**
     * @param string $NumUnits1TypeDesc
     * @return ShipmentInfoExt
     */
    public function setNumUnits1TypeDesc($NumUnits1TypeDesc)
    {
      $this->NumUnits1TypeDesc = $NumUnits1TypeDesc;
      return $this;
    }

    /**
     * @return float
     */
    public function getNumUnits2()
    {
      return $this->NumUnits2;
    }

    /**
     * @param float $NumUnits2
     * @return ShipmentInfoExt
     */
    public function setNumUnits2($NumUnits2)
    {
      $this->NumUnits2 = $NumUnits2;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumUnits2TypeID()
    {
      return $this->NumUnits2TypeID;
    }

    /**
     * @param int $NumUnits2TypeID
     * @return ShipmentInfoExt
     */
    public function setNumUnits2TypeID($NumUnits2TypeID)
    {
      $this->NumUnits2TypeID = $NumUnits2TypeID;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumUnits2TypeDesc()
    {
      return $this->NumUnits2TypeDesc;
    }

    /**
     * @param string $NumUnits2TypeDesc
     * @return ShipmentInfoExt
     */
    public function setNumUnits2TypeDesc($NumUnits2TypeDesc)
    {
      $this->NumUnits2TypeDesc = $NumUnits2TypeDesc;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalWeight()
    {
      return $this->TotalWeight;
    }

    /**
     * @param float $TotalWeight
     * @return ShipmentInfoExt
     */
    public function setTotalWeight($TotalWeight)
    {
      $this->TotalWeight = $TotalWeight;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalVolume()
    {
      return $this->TotalVolume;
    }

    /**
     * @param float $TotalVolume
     * @return ShipmentInfoExt
     */
    public function setTotalVolume($TotalVolume)
    {
      $this->TotalVolume = $TotalVolume;
      return $this;
    }

}
