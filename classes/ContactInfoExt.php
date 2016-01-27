<?php

class ContactInfoExt
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var AddressExt $Address
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
     * @var string $CustomerName
     */
    protected $CustomerName = null;

    /**
     * @var string $Vendor
     */
    protected $Vendor = null;

    /**
     * @var string $Dept
     */
    protected $Dept = null;

    /**
     * @var int $RetailerID
     */
    protected $RetailerID = null;

    /**
     * @param int $RetailerID
     */
    public function __construct($RetailerID)
    {
      $this->RetailerID = $RetailerID;
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
     * @return ContactInfoExt
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return ContactInfoExt
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
      return $this;
    }

    /**
     * @return AddressExt
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param AddressExt $Address
     * @return ContactInfoExt
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
     * @return ContactInfoExt
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
     * @return ContactInfoExt
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
     * @return ContactInfoExt
     */
    public function setEmailAddress1($EmailAddress1)
    {
      $this->EmailAddress1 = $EmailAddress1;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerName()
    {
      return $this->CustomerName;
    }

    /**
     * @param string $CustomerName
     * @return ContactInfoExt
     */
    public function setCustomerName($CustomerName)
    {
      $this->CustomerName = $CustomerName;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendor()
    {
      return $this->Vendor;
    }

    /**
     * @param string $Vendor
     * @return ContactInfoExt
     */
    public function setVendor($Vendor)
    {
      $this->Vendor = $Vendor;
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
     * @return ContactInfoExt
     */
    public function setDept($Dept)
    {
      $this->Dept = $Dept;
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
     * @return ContactInfoExt
     */
    public function setRetailerID($RetailerID)
    {
      $this->RetailerID = $RetailerID;
      return $this;
    }

}
