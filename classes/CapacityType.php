<?php

class CapacityType
{

    /**
     * @var int $CapacityTypeID
     */
    protected $CapacityTypeID = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @param int $CapacityTypeID
     */
    public function __construct($CapacityTypeID)
    {
      $this->CapacityTypeID = $CapacityTypeID;
    }

    /**
     * @return int
     */
    public function getCapacityTypeID()
    {
      return $this->CapacityTypeID;
    }

    /**
     * @param int $CapacityTypeID
     * @return CapacityType
     */
    public function setCapacityTypeID($CapacityTypeID)
    {
      $this->CapacityTypeID = $CapacityTypeID;
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
     * @return CapacityType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
