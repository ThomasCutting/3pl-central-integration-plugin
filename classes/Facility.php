<?php

class Facility
{

    /**
     * @var int $FacilityID
     */
    protected $FacilityID = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var ContactInfo $Contact
     */
    protected $Contact = null;

    /**
     * @var string $UPSAccount
     */
    protected $UPSAccount = null;

    /**
     * @var string $FedExAccount
     */
    protected $FedExAccount = null;

    /**
     * @var int $TimeOffset
     */
    protected $TimeOffset = null;

    /**
     * @var boolean $UsesDaylightSavings
     */
    protected $UsesDaylightSavings = null;

    /**
     * @var int $TimeZoneID
     */
    protected $TimeZoneID = null;

    /**
     * @var boolean $UsePredefinedLocations
     */
    protected $UsePredefinedLocations = null;

    /**
     * @var int $LocationFieldCount
     */
    protected $LocationFieldCount = null;

    /**
     * @var I18nDateTime $LastCloseDate
     */
    protected $LastCloseDate = null;

    /**
     * @var boolean $Deactivated
     */
    protected $Deactivated = null;

    /**
     * @var MeasurementSystemType $MeasurementSystemDefault
     */
    protected $MeasurementSystemDefault = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var float $FuelSurcharge
     */
    protected $FuelSurcharge = null;

    /**
     * @param int $FacilityID
     * @param int $TimeOffset
     * @param boolean $UsesDaylightSavings
     * @param int $TimeZoneID
     * @param boolean $UsePredefinedLocations
     * @param int $LocationFieldCount
     * @param boolean $Deactivated
     * @param MeasurementSystemType $MeasurementSystemDefault
     * @param float $FuelSurcharge
     */
    public function __construct($FacilityID, $TimeOffset, $UsesDaylightSavings, $TimeZoneID, $UsePredefinedLocations, $LocationFieldCount, $Deactivated, $MeasurementSystemDefault, $FuelSurcharge)
    {
      $this->FacilityID = $FacilityID;
      $this->TimeOffset = $TimeOffset;
      $this->UsesDaylightSavings = $UsesDaylightSavings;
      $this->TimeZoneID = $TimeZoneID;
      $this->UsePredefinedLocations = $UsePredefinedLocations;
      $this->LocationFieldCount = $LocationFieldCount;
      $this->Deactivated = $Deactivated;
      $this->MeasurementSystemDefault = $MeasurementSystemDefault;
      $this->FuelSurcharge = $FuelSurcharge;
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
     * @return Facility
     */
    public function setFacilityID($FacilityID)
    {
      $this->FacilityID = $FacilityID;
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
     * @return Facility
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return ContactInfo
     */
    public function getContact()
    {
      return $this->Contact;
    }

    /**
     * @param ContactInfo $Contact
     * @return Facility
     */
    public function setContact($Contact)
    {
      $this->Contact = $Contact;
      return $this;
    }

    /**
     * @return string
     */
    public function getUPSAccount()
    {
      return $this->UPSAccount;
    }

    /**
     * @param string $UPSAccount
     * @return Facility
     */
    public function setUPSAccount($UPSAccount)
    {
      $this->UPSAccount = $UPSAccount;
      return $this;
    }

    /**
     * @return string
     */
    public function getFedExAccount()
    {
      return $this->FedExAccount;
    }

    /**
     * @param string $FedExAccount
     * @return Facility
     */
    public function setFedExAccount($FedExAccount)
    {
      $this->FedExAccount = $FedExAccount;
      return $this;
    }

    /**
     * @return int
     */
    public function getTimeOffset()
    {
      return $this->TimeOffset;
    }

    /**
     * @param int $TimeOffset
     * @return Facility
     */
    public function setTimeOffset($TimeOffset)
    {
      $this->TimeOffset = $TimeOffset;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUsesDaylightSavings()
    {
      return $this->UsesDaylightSavings;
    }

    /**
     * @param boolean $UsesDaylightSavings
     * @return Facility
     */
    public function setUsesDaylightSavings($UsesDaylightSavings)
    {
      $this->UsesDaylightSavings = $UsesDaylightSavings;
      return $this;
    }

    /**
     * @return int
     */
    public function getTimeZoneID()
    {
      return $this->TimeZoneID;
    }

    /**
     * @param int $TimeZoneID
     * @return Facility
     */
    public function setTimeZoneID($TimeZoneID)
    {
      $this->TimeZoneID = $TimeZoneID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUsePredefinedLocations()
    {
      return $this->UsePredefinedLocations;
    }

    /**
     * @param boolean $UsePredefinedLocations
     * @return Facility
     */
    public function setUsePredefinedLocations($UsePredefinedLocations)
    {
      $this->UsePredefinedLocations = $UsePredefinedLocations;
      return $this;
    }

    /**
     * @return int
     */
    public function getLocationFieldCount()
    {
      return $this->LocationFieldCount;
    }

    /**
     * @param int $LocationFieldCount
     * @return Facility
     */
    public function setLocationFieldCount($LocationFieldCount)
    {
      $this->LocationFieldCount = $LocationFieldCount;
      return $this;
    }

    /**
     * @return I18nDateTime
     */
    public function getLastCloseDate()
    {
      return $this->LastCloseDate;
    }

    /**
     * @param I18nDateTime $LastCloseDate
     * @return Facility
     */
    public function setLastCloseDate($LastCloseDate)
    {
      $this->LastCloseDate = $LastCloseDate;
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
     * @return Facility
     */
    public function setDeactivated($Deactivated)
    {
      $this->Deactivated = $Deactivated;
      return $this;
    }

    /**
     * @return MeasurementSystemType
     */
    public function getMeasurementSystemDefault()
    {
      return $this->MeasurementSystemDefault;
    }

    /**
     * @param MeasurementSystemType $MeasurementSystemDefault
     * @return Facility
     */
    public function setMeasurementSystemDefault($MeasurementSystemDefault)
    {
      $this->MeasurementSystemDefault = $MeasurementSystemDefault;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return Facility
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return float
     */
    public function getFuelSurcharge()
    {
      return $this->FuelSurcharge;
    }

    /**
     * @param float $FuelSurcharge
     * @return Facility
     */
    public function setFuelSurcharge($FuelSurcharge)
    {
      $this->FuelSurcharge = $FuelSurcharge;
      return $this;
    }

}
