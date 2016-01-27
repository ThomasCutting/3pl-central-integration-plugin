<?php

class FulfillInvInfo
{

    /**
     * @var float $FulfillInvShippingAndHandling
     */
    protected $FulfillInvShippingAndHandling = null;

    /**
     * @var float $FulfillInvTax
     */
    protected $FulfillInvTax = null;

    /**
     * @var string $FulfillInvDiscountCode
     */
    protected $FulfillInvDiscountCode = null;

    /**
     * @var float $FulfillInvDiscountAmount
     */
    protected $FulfillInvDiscountAmount = null;

    /**
     * @var string $FulfillInvGiftMessage
     */
    protected $FulfillInvGiftMessage = null;

    /**
     * @param float $FulfillInvShippingAndHandling
     * @param float $FulfillInvTax
     * @param float $FulfillInvDiscountAmount
     */
    public function __construct($FulfillInvShippingAndHandling, $FulfillInvTax, $FulfillInvDiscountAmount)
    {
      $this->FulfillInvShippingAndHandling = $FulfillInvShippingAndHandling;
      $this->FulfillInvTax = $FulfillInvTax;
      $this->FulfillInvDiscountAmount = $FulfillInvDiscountAmount;
    }

    /**
     * @return float
     */
    public function getFulfillInvShippingAndHandling()
    {
      return $this->FulfillInvShippingAndHandling;
    }

    /**
     * @param float $FulfillInvShippingAndHandling
     * @return FulfillInvInfo
     */
    public function setFulfillInvShippingAndHandling($FulfillInvShippingAndHandling)
    {
      $this->FulfillInvShippingAndHandling = $FulfillInvShippingAndHandling;
      return $this;
    }

    /**
     * @return float
     */
    public function getFulfillInvTax()
    {
      return $this->FulfillInvTax;
    }

    /**
     * @param float $FulfillInvTax
     * @return FulfillInvInfo
     */
    public function setFulfillInvTax($FulfillInvTax)
    {
      $this->FulfillInvTax = $FulfillInvTax;
      return $this;
    }

    /**
     * @return string
     */
    public function getFulfillInvDiscountCode()
    {
      return $this->FulfillInvDiscountCode;
    }

    /**
     * @param string $FulfillInvDiscountCode
     * @return FulfillInvInfo
     */
    public function setFulfillInvDiscountCode($FulfillInvDiscountCode)
    {
      $this->FulfillInvDiscountCode = $FulfillInvDiscountCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getFulfillInvDiscountAmount()
    {
      return $this->FulfillInvDiscountAmount;
    }

    /**
     * @param float $FulfillInvDiscountAmount
     * @return FulfillInvInfo
     */
    public function setFulfillInvDiscountAmount($FulfillInvDiscountAmount)
    {
      $this->FulfillInvDiscountAmount = $FulfillInvDiscountAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getFulfillInvGiftMessage()
    {
      return $this->FulfillInvGiftMessage;
    }

    /**
     * @param string $FulfillInvGiftMessage
     * @return FulfillInvInfo
     */
    public function setFulfillInvGiftMessage($FulfillInvGiftMessage)
    {
      $this->FulfillInvGiftMessage = $FulfillInvGiftMessage;
      return $this;
    }

}
