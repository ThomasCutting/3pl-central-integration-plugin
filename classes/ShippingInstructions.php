<?php

class ShippingInstructions
{

    /**
     * @var string $SCACCode
     */
    protected $SCACCode = null;

    /**
     * @var string $Carrier
     */
    protected $Carrier = null;

    /**
     * @var string $CarrierDesc
     */
    protected $CarrierDesc = null;

    /**
     * @var string $Mode
     */
    protected $Mode = null;

    /**
     * @var string $ShipService
     */
    protected $ShipService = null;

    /**
     * @var string $BillingCode
     */
    protected $BillingCode = null;

    /**
     * @var string $Account
     */
    protected $Account = null;

    /**
     * @var string $ShipPointZip
     */
    protected $ShipPointZip = null;

    /**
     * @var string $ShippingNotes
     */
    protected $ShippingNotes = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getSCACCode()
    {
      return $this->SCACCode;
    }

    /**
     * @param string $SCACCode
     * @return ShippingInstructions
     */
    public function setSCACCode($SCACCode)
    {
      $this->SCACCode = $SCACCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param string $Carrier
     * @return ShippingInstructions
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarrierDesc()
    {
      return $this->CarrierDesc;
    }

    /**
     * @param string $CarrierDesc
     * @return ShippingInstructions
     */
    public function setCarrierDesc($CarrierDesc)
    {
      $this->CarrierDesc = $CarrierDesc;
      return $this;
    }

    /**
     * @return string
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param string $Mode
     * @return ShippingInstructions
     */
    public function setMode($Mode)
    {
      $this->Mode = $Mode;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipService()
    {
      return $this->ShipService;
    }

    /**
     * @param string $ShipService
     * @return ShippingInstructions
     */
    public function setShipService($ShipService)
    {
      $this->ShipService = $ShipService;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingCode()
    {
      return $this->BillingCode;
    }

    /**
     * @param string $BillingCode
     * @return ShippingInstructions
     */
    public function setBillingCode($BillingCode)
    {
      $this->BillingCode = $BillingCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccount()
    {
      return $this->Account;
    }

    /**
     * @param string $Account
     * @return ShippingInstructions
     */
    public function setAccount($Account)
    {
      $this->Account = $Account;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipPointZip()
    {
      return $this->ShipPointZip;
    }

    /**
     * @param string $ShipPointZip
     * @return ShippingInstructions
     */
    public function setShipPointZip($ShipPointZip)
    {
      $this->ShipPointZip = $ShipPointZip;
      return $this;
    }

    /**
     * @return string
     */
    public function getShippingNotes()
    {
      return $this->ShippingNotes;
    }

    /**
     * @param string $ShippingNotes
     * @return ShippingInstructions
     */
    public function setShippingNotes($ShippingNotes)
    {
      $this->ShippingNotes = $ShippingNotes;
      return $this;
    }

}
