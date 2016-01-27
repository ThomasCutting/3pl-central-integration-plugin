<?php

class ShippingInstructionsExt
{

    /**
     * @var string $Carrier
     */
    protected $Carrier = null;

    /**
     * @var string $Mode
     */
    protected $Mode = null;

    /**
     * @var string $BillingCode
     */
    protected $BillingCode = null;

    /**
     * @var string $Account
     */
    protected $Account = null;

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
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param string $Carrier
     * @return ShippingInstructionsExt
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
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
     * @return ShippingInstructionsExt
     */
    public function setMode($Mode)
    {
      $this->Mode = $Mode;
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
     * @return ShippingInstructionsExt
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
     * @return ShippingInstructionsExt
     */
    public function setAccount($Account)
    {
      $this->Account = $Account;
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
     * @return ShippingInstructionsExt
     */
    public function setShippingNotes($ShippingNotes)
    {
      $this->ShippingNotes = $ShippingNotes;
      return $this;
    }

}
