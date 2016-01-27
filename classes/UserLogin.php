<?php

class UserLogin
{

    /**
     * @var int $UserLoginID
     */
    protected $UserLoginID = null;

    /**
     * @var string $UserName
     */
    protected $UserName = null;

    /**
     * @var string $Login
     */
    protected $Login = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var int $Salt
     */
    protected $Salt = null;

    /**
     * @var string $UserRole
     */
    protected $UserRole = null;

    /**
     * @var string $HintPhrase
     */
    protected $HintPhrase = null;

    /**
     * @var int $CustomerID
     */
    protected $CustomerID = null;

    /**
     * @var string $CustomerDescr
     */
    protected $CustomerDescr = null;

    /**
     * @var ArrayOfInt $CustomerIDs
     */
    protected $CustomerIDs = null;

    /**
     * @var int $CustomerGroupId
     */
    protected $CustomerGroupId = null;

    /**
     * @var ArrayOfInt $FacilityIDs
     */
    protected $FacilityIDs = null;

    /**
     * @var boolean $Deactivated
     */
    protected $Deactivated = null;

    /**
     * @var boolean $PrefSelOrdFromList
     */
    protected $PrefSelOrdFromList = null;

    /**
     * @var I18nDateTime $CreationDate
     */
    protected $CreationDate = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $CellPhone
     */
    protected $CellPhone = null;

    /**
     * @var int $CellCarrierId
     */
    protected $CellCarrierId = null;

    /**
     * @param int $UserLoginID
     * @param int $Salt
     * @param int $CustomerID
     * @param int $CustomerGroupId
     * @param boolean $Deactivated
     * @param boolean $PrefSelOrdFromList
     * @param int $CellCarrierId
     */
    public function __construct($UserLoginID, $Salt, $CustomerID, $CustomerGroupId, $Deactivated, $PrefSelOrdFromList, $CellCarrierId)
    {
      $this->UserLoginID = $UserLoginID;
      $this->Salt = $Salt;
      $this->CustomerID = $CustomerID;
      $this->CustomerGroupId = $CustomerGroupId;
      $this->Deactivated = $Deactivated;
      $this->PrefSelOrdFromList = $PrefSelOrdFromList;
      $this->CellCarrierId = $CellCarrierId;
    }

    /**
     * @return int
     */
    public function getUserLoginID()
    {
      return $this->UserLoginID;
    }

    /**
     * @param int $UserLoginID
     * @return UserLogin
     */
    public function setUserLoginID($UserLoginID)
    {
      $this->UserLoginID = $UserLoginID;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->UserName;
    }

    /**
     * @param string $UserName
     * @return UserLogin
     */
    public function setUserName($UserName)
    {
      $this->UserName = $UserName;
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
     * @return UserLogin
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
     * @return UserLogin
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return int
     */
    public function getSalt()
    {
      return $this->Salt;
    }

    /**
     * @param int $Salt
     * @return UserLogin
     */
    public function setSalt($Salt)
    {
      $this->Salt = $Salt;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserRole()
    {
      return $this->UserRole;
    }

    /**
     * @param string $UserRole
     * @return UserLogin
     */
    public function setUserRole($UserRole)
    {
      $this->UserRole = $UserRole;
      return $this;
    }

    /**
     * @return string
     */
    public function getHintPhrase()
    {
      return $this->HintPhrase;
    }

    /**
     * @param string $HintPhrase
     * @return UserLogin
     */
    public function setHintPhrase($HintPhrase)
    {
      $this->HintPhrase = $HintPhrase;
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
     * @return UserLogin
     */
    public function setCustomerID($CustomerID)
    {
      $this->CustomerID = $CustomerID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerDescr()
    {
      return $this->CustomerDescr;
    }

    /**
     * @param string $CustomerDescr
     * @return UserLogin
     */
    public function setCustomerDescr($CustomerDescr)
    {
      $this->CustomerDescr = $CustomerDescr;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getCustomerIDs()
    {
      return $this->CustomerIDs;
    }

    /**
     * @param ArrayOfInt $CustomerIDs
     * @return UserLogin
     */
    public function setCustomerIDs($CustomerIDs)
    {
      $this->CustomerIDs = $CustomerIDs;
      return $this;
    }

    /**
     * @return int
     */
    public function getCustomerGroupId()
    {
      return $this->CustomerGroupId;
    }

    /**
     * @param int $CustomerGroupId
     * @return UserLogin
     */
    public function setCustomerGroupId($CustomerGroupId)
    {
      $this->CustomerGroupId = $CustomerGroupId;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getFacilityIDs()
    {
      return $this->FacilityIDs;
    }

    /**
     * @param ArrayOfInt $FacilityIDs
     * @return UserLogin
     */
    public function setFacilityIDs($FacilityIDs)
    {
      $this->FacilityIDs = $FacilityIDs;
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
     * @return UserLogin
     */
    public function setDeactivated($Deactivated)
    {
      $this->Deactivated = $Deactivated;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPrefSelOrdFromList()
    {
      return $this->PrefSelOrdFromList;
    }

    /**
     * @param boolean $PrefSelOrdFromList
     * @return UserLogin
     */
    public function setPrefSelOrdFromList($PrefSelOrdFromList)
    {
      $this->PrefSelOrdFromList = $PrefSelOrdFromList;
      return $this;
    }

    /**
     * @return I18nDateTime
     */
    public function getCreationDate()
    {
      return $this->CreationDate;
    }

    /**
     * @param I18nDateTime $CreationDate
     * @return UserLogin
     */
    public function setCreationDate($CreationDate)
    {
      $this->CreationDate = $CreationDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return UserLogin
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return string
     */
    public function getCellPhone()
    {
      return $this->CellPhone;
    }

    /**
     * @param string $CellPhone
     * @return UserLogin
     */
    public function setCellPhone($CellPhone)
    {
      $this->CellPhone = $CellPhone;
      return $this;
    }

    /**
     * @return int
     */
    public function getCellCarrierId()
    {
      return $this->CellCarrierId;
    }

    /**
     * @param int $CellCarrierId
     * @return UserLogin
     */
    public function setCellCarrierId($CellCarrierId)
    {
      $this->CellCarrierId = $CellCarrierId;
      return $this;
    }

}
