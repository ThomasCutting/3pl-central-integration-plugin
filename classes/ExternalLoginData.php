<?php

class ExternalLoginData
{

    /**
     * @var string $ThreePLKey
     */
    protected $ThreePLKey = null;

    /**
     * @var string $Login
     */
    protected $Login = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var int $FacilityID
     */
    protected $FacilityID = null;

    /**
     * @var int $CustomerID
     */
    protected $CustomerID = null;

    /**
     * @param int $FacilityID
     * @param int $CustomerID
     */
    public function __construct($FacilityID, $CustomerID)
    {
      $this->FacilityID = $FacilityID;
      $this->CustomerID = $CustomerID;
    }

    /**
     * @return string
     */
    public function getThreePLKey()
    {
      return $this->ThreePLKey;
    }

    /**
     * @param string $ThreePLKey
     * @return ExternalLoginData
     */
    public function setThreePLKey($ThreePLKey)
    {
      $this->ThreePLKey = $ThreePLKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
      return $this->Login;
    }

    /**
     * @param string $Login
     * @return ExternalLoginData
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return ExternalLoginData
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
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
     * @return ExternalLoginData
     */
    public function setFacilityID($FacilityID)
    {
      $this->FacilityID = $FacilityID;
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
     * @return ExternalLoginData
     */
    public function setCustomerID($CustomerID)
    {
      $this->CustomerID = $CustomerID;
      return $this;
    }

}
