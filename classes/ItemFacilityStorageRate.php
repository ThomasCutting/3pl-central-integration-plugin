<?php

class ItemFacilityStorageRate
{

    /**
     * @var string $FacilityIdOrName
     */
    protected $FacilityIdOrName = null;

    /**
     * @var string $CountUnit
     */
    protected $CountUnit = null;

    /**
     * @var float $Rate
     */
    protected $Rate = null;

    /**
     * @param float $Rate
     */
    public function __construct($Rate)
    {
      $this->Rate = $Rate;
    }

    /**
     * @return string
     */
    public function getFacilityIdOrName()
    {
      return $this->FacilityIdOrName;
    }

    /**
     * @param string $FacilityIdOrName
     * @return ItemFacilityStorageRate
     */
    public function setFacilityIdOrName($FacilityIdOrName)
    {
      $this->FacilityIdOrName = $FacilityIdOrName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountUnit()
    {
      return $this->CountUnit;
    }

    /**
     * @param string $CountUnit
     * @return ItemFacilityStorageRate
     */
    public function setCountUnit($CountUnit)
    {
      $this->CountUnit = $CountUnit;
      return $this;
    }

    /**
     * @return float
     */
    public function getRate()
    {
      return $this->Rate;
    }

    /**
     * @param float $Rate
     * @return ItemFacilityStorageRate
     */
    public function setRate($Rate)
    {
      $this->Rate = $Rate;
      return $this;
    }

}
