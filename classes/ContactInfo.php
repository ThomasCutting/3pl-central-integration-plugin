<?php

class ContactInfo
{

    /**
     * @var int $ContactID
     */
    protected $ContactID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var Address $Address
     */
    protected $Address = null;

    /**
     * @var string $PhoneNumber1
     */
    protected $PhoneNumber1 = null;

    /**
     * @var string $Fax
     */
    protected $Fax = null;

    /**
     * @var string $EmailAddress1
     */
    protected $EmailAddress1 = null;

    /**
     * @var int $RetailerID
     */
    protected $RetailerID = null;

    /**
     * @var string $Dept
     */
    protected $Dept = null;

    /**
     * @var boolean $IsShipToQuickLookup
     */
    protected $IsShipToQuickLookup = null;

    /**
     * @var string $ContactType
     */
    protected $ContactType = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var int $CustomerID
     */
    protected $CustomerID = null;

    /**
     * @var string $Bill3rdPartyAccount
     */
    protected $Bill3rdPartyAccount = null;

    /**
     * @var AddressStatusType $AddressStatus
     */
    protected $AddressStatus = null;

    /**
     * @param int $ContactID
     * @param int $RetailerID
     * @param boolean $IsShipToQuickLookup
     * @param int $CustomerID
     * @param AddressStatusType $AddressStatus
     */
    public function __construct($ContactID, $RetailerID, $IsShipToQuickLookup, $CustomerID, $AddressStatus)
    {
      $this->ContactID = $ContactID;
      $this->RetailerID = $RetailerID;
      $this->IsShipToQuickLookup = $IsShipToQuickLookup;
      $this->CustomerID = $CustomerID;
      $this->AddressStatus = $AddressStatus;
    }

    /**
     * @return int
     */
    public function getContactID()
    {
      return $this->ContactID;
    }

    /**
     * @param int $ContactID
     * @return ContactInfo
     */
    public function setContactID($ContactID)
    {
      $this->ContactID = $ContactID;
      return $this;
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
     * @return ContactInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return ContactInfo
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
      return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return ContactInfo
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
      return $this;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param Address $Address
     * @return ContactInfo
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber1()
    {
      return $this->PhoneNumber1;
    }

    /**
     * @param string $PhoneNumber1
     * @return ContactInfo
     */
    public function setPhoneNumber1($PhoneNumber1)
    {
      $this->PhoneNumber1 = $PhoneNumber1;
      return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
      return $this->Fax;
    }

    /**
     * @param string $Fax
     * @return ContactInfo
     */
    public function setFax($Fax)
    {
      $this->Fax = $Fax;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress1()
    {
      return $this->EmailAddress1;
    }

    /**
     * @param string $EmailAddress1
     * @return ContactInfo
     */
    public function setEmailAddress1($EmailAddress1)
    {
      $this->EmailAddress1 = $EmailAddress1;
      return $this;
    }

    /**
     * @return int
     */
    public function getRetailerID()
    {
      return $this->RetailerID;
    }

    /**
     * @param int $RetailerID
     * @return ContactInfo
     */
    public function setRetailerID($RetailerID)
    {
      $this->RetailerID = $RetailerID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDept()
    {
      return $this->Dept;
    }

    /**
     * @param string $Dept
     * @return ContactInfo
     */
    public function setDept($Dept)
    {
      $this->Dept = $Dept;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsShipToQuickLookup()
    {
      return $this->IsShipToQuickLookup;
    }

    /**
     * @param boolean $IsShipToQuickLookup
     * @return ContactInfo
     */
    public function setIsShipToQuickLookup($IsShipToQuickLookup)
    {
      $this->IsShipToQuickLookup = $IsShipToQuickLookup;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactType()
    {
      return $this->ContactType;
    }

    /**
     * @param string $ContactType
     * @return ContactInfo
     */
    public function setContactType($ContactType)
    {
      $this->ContactType = $ContactType;
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
     * @return ContactInfo
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
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
     * @return ContactInfo
     */
    public function setCustomerID($CustomerID)
    {
      $this->CustomerID = $CustomerID;
      return $this;
    }

    /**
     * @return string
     */
    public function getBill3rdPartyAccount()
    {
      return $this->Bill3rdPartyAccount;
    }

    /**
     * @param string $Bill3rdPartyAccount
     * @return ContactInfo
     */
    public function setBill3rdPartyAccount($Bill3rdPartyAccount)
    {
      $this->Bill3rdPartyAccount = $Bill3rdPartyAccount;
      return $this;
    }

    /**
     * @return AddressStatusType
     */
    public function getAddressStatus()
    {
      return $this->AddressStatus;
    }

    /**
     * @param AddressStatusType $AddressStatus
     * @return ContactInfo
     */
    public function setAddressStatus($AddressStatus)
    {
      $this->AddressStatus = $AddressStatus;
      return $this;
    }

}
