<?php

class SmallParcel
{

    /**
     * @var WarehouseTransaction $WarehouseTransaction
     */
    protected $WarehouseTransaction = null;

    /**
     * @var Facility $Facility
     */
    protected $Facility = null;

    /**
     * @var Retailer $Retailer
     */
    protected $Retailer = null;

    /**
     * @var ContactInfo $ThirdPartyBilling
     */
    protected $ThirdPartyBilling = null;

    /**
     * @var ArrayOfPackage $Packages
     */
    protected $Packages = null;

    /**
     * @var ArrayOfSmallParcelOrderItem $OrderItem
     */
    protected $OrderItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return WarehouseTransaction
     */
    public function getWarehouseTransaction()
    {
      return $this->WarehouseTransaction;
    }

    /**
     * @param WarehouseTransaction $WarehouseTransaction
     * @return SmallParcel
     */
    public function setWarehouseTransaction($WarehouseTransaction)
    {
      $this->WarehouseTransaction = $WarehouseTransaction;
      return $this;
    }

    /**
     * @return Facility
     */
    public function getFacility()
    {
      return $this->Facility;
    }

    /**
     * @param Facility $Facility
     * @return SmallParcel
     */
    public function setFacility($Facility)
    {
      $this->Facility = $Facility;
      return $this;
    }

    /**
     * @return Retailer
     */
    public function getRetailer()
    {
      return $this->Retailer;
    }

    /**
     * @param Retailer $Retailer
     * @return SmallParcel
     */
    public function setRetailer($Retailer)
    {
      $this->Retailer = $Retailer;
      return $this;
    }

    /**
     * @return ContactInfo
     */
    public function getThirdPartyBilling()
    {
      return $this->ThirdPartyBilling;
    }

    /**
     * @param ContactInfo $ThirdPartyBilling
     * @return SmallParcel
     */
    public function setThirdPartyBilling($ThirdPartyBilling)
    {
      $this->ThirdPartyBilling = $ThirdPartyBilling;
      return $this;
    }

    /**
     * @return ArrayOfPackage
     */
    public function getPackages()
    {
      return $this->Packages;
    }

    /**
     * @param ArrayOfPackage $Packages
     * @return SmallParcel
     */
    public function setPackages($Packages)
    {
      $this->Packages = $Packages;
      return $this;
    }

    /**
     * @return ArrayOfSmallParcelOrderItem
     */
    public function getOrderItem()
    {
      return $this->OrderItem;
    }

    /**
     * @param ArrayOfSmallParcelOrderItem $OrderItem
     * @return SmallParcel
     */
    public function setOrderItem($OrderItem)
    {
      $this->OrderItem = $OrderItem;
      return $this;
    }

}
