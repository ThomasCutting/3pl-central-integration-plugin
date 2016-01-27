<?php

class UnitOfMeasure
{

    /**
     * @var int $unitOfMeasureID
     */
    protected $unitOfMeasureID = null;

    /**
     * @var string $uomDescription
     */
    protected $uomDescription = null;

    /**
     * @var boolean $isUomIntegral
     */
    protected $isUomIntegral = null;

    /**
     * @var string $pluralUomDescription
     */
    protected $pluralUomDescription = null;

    /**
     * @param int $unitOfMeasureID
     * @param boolean $isUomIntegral
     */
    public function __construct($unitOfMeasureID, $isUomIntegral)
    {
      $this->unitOfMeasureID = $unitOfMeasureID;
      $this->isUomIntegral = $isUomIntegral;
    }

    /**
     * @return int
     */
    public function getUnitOfMeasureID()
    {
      return $this->unitOfMeasureID;
    }

    /**
     * @param int $unitOfMeasureID
     * @return UnitOfMeasure
     */
    public function setUnitOfMeasureID($unitOfMeasureID)
    {
      $this->unitOfMeasureID = $unitOfMeasureID;
      return $this;
    }

    /**
     * @return string
     */
    public function getUomDescription()
    {
      return $this->uomDescription;
    }

    /**
     * @param string $uomDescription
     * @return UnitOfMeasure
     */
    public function setUomDescription($uomDescription)
    {
      $this->uomDescription = $uomDescription;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsUomIntegral()
    {
      return $this->isUomIntegral;
    }

    /**
     * @param boolean $isUomIntegral
     * @return UnitOfMeasure
     */
    public function setIsUomIntegral($isUomIntegral)
    {
      $this->isUomIntegral = $isUomIntegral;
      return $this;
    }

    /**
     * @return string
     */
    public function getPluralUomDescription()
    {
      return $this->pluralUomDescription;
    }

    /**
     * @param string $pluralUomDescription
     * @return UnitOfMeasure
     */
    public function setPluralUomDescription($pluralUomDescription)
    {
      $this->pluralUomDescription = $pluralUomDescription;
      return $this;
    }

}
