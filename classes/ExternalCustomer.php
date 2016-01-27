<?php

class ExternalCustomer
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var boolean $Active
     */
    protected $Active = null;

    /**
     * @var ArrayOfExternalFacility $Facilities
     */
    protected $Facilities = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @param boolean $Active
     * @param int $Id
     */
    public function __construct($Active, $Id)
    {
      $this->Active = $Active;
      $this->Id = $Id;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return ExternalCustomer
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
      return $this->Active;
    }

    /**
     * @param boolean $Active
     * @return ExternalCustomer
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
      return $this;
    }

    /**
     * @return ArrayOfExternalFacility
     */
    public function getFacilities()
    {
      return $this->Facilities;
    }

    /**
     * @param ArrayOfExternalFacility $Facilities
     * @return ExternalCustomer
     */
    public function setFacilities($Facilities)
    {
      $this->Facilities = $Facilities;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return ExternalCustomer
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
