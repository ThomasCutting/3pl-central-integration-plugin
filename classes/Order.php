<?php

class Order
{

    /**
     * @var TransactionInfoExt $TransInfo
     */
    protected $TransInfo = null;

    /**
     * @var ContactInfoExt $ShipTo
     */
    protected $ShipTo = null;

    /**
     * @var ShippingInstructionsExt $ShippingInstructions
     */
    protected $ShippingInstructions = null;

    /**
     * @var ShipmentInfoExt $ShipmentInfo
     */
    protected $ShipmentInfo = null;

    /**
     * @var TrackingInfoExt $TrackInfo
     */
    protected $TrackInfo = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var int $PalletCount
     */
    protected $PalletCount = null;

    /**
     * @var ArrayOfOrderLineItem $OrderLineItems
     */
    protected $OrderLineItems = null;

    /**
     * @var ArrayOfCodeDescrPair $SavedElements
     */
    protected $SavedElements = null;

    /**
     * @var FulfillInvInfo $FulfillmentInfo
     */
    protected $FulfillmentInfo = null;

    /**
     * @var ContactInfoExt $SoldTo
     */
    protected $SoldTo = null;

    /**
     * @param int $PalletCount
     */
    public function __construct($PalletCount)
    {
      $this->PalletCount = $PalletCount;
    }

    /**
     * @return TransactionInfoExt
     */
    public function getTransInfo()
    {
      return $this->TransInfo;
    }

    /**
     * @param TransactionInfoExt $TransInfo
     * @return Order
     */
    public function setTransInfo($TransInfo)
    {
      $this->TransInfo = $TransInfo;
      return $this;
    }

    /**
     * @return ContactInfoExt
     */
    public function getShipTo()
    {
      return $this->ShipTo;
    }

    /**
     * @param ContactInfoExt $ShipTo
     * @return Order
     */
    public function setShipTo($ShipTo)
    {
      $this->ShipTo = $ShipTo;
      return $this;
    }

    /**
     * @return ShippingInstructionsExt
     */
    public function getShippingInstructions()
    {
      return $this->ShippingInstructions;
    }

    /**
     * @param ShippingInstructionsExt $ShippingInstructions
     * @return Order
     */
    public function setShippingInstructions($ShippingInstructions)
    {
      $this->ShippingInstructions = $ShippingInstructions;
      return $this;
    }

    /**
     * @return ShipmentInfoExt
     */
    public function getShipmentInfo()
    {
      return $this->ShipmentInfo;
    }

    /**
     * @param ShipmentInfoExt $ShipmentInfo
     * @return Order
     */
    public function setShipmentInfo($ShipmentInfo)
    {
      $this->ShipmentInfo = $ShipmentInfo;
      return $this;
    }

    /**
     * @return TrackingInfoExt
     */
    public function getTrackInfo()
    {
      return $this->TrackInfo;
    }

    /**
     * @param TrackingInfoExt $TrackInfo
     * @return Order
     */
    public function setTrackInfo($TrackInfo)
    {
      $this->TrackInfo = $TrackInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
      return $this->Notes;
    }

    /**
     * @param string $Notes
     * @return Order
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
      return $this;
    }

    /**
     * @return int
     */
    public function getPalletCount()
    {
      return $this->PalletCount;
    }

    /**
     * @param int $PalletCount
     * @return Order
     */
    public function setPalletCount($PalletCount)
    {
      $this->PalletCount = $PalletCount;
      return $this;
    }

    /**
     * @return ArrayOfOrderLineItem
     */
    public function getOrderLineItems()
    {
      return $this->OrderLineItems;
    }

    /**
     * @param ArrayOfOrderLineItem $OrderLineItems
     * @return Order
     */
    public function setOrderLineItems($OrderLineItems)
    {
      $this->OrderLineItems = $OrderLineItems;
      return $this;
    }

    /**
     * @return ArrayOfCodeDescrPair
     */
    public function getSavedElements()
    {
      return $this->SavedElements;
    }

    /**
     * @param ArrayOfCodeDescrPair $SavedElements
     * @return Order
     */
    public function setSavedElements($SavedElements)
    {
      $this->SavedElements = $SavedElements;
      return $this;
    }

    /**
     * @return FulfillInvInfo
     */
    public function getFulfillmentInfo()
    {
      return $this->FulfillmentInfo;
    }

    /**
     * @param FulfillInvInfo $FulfillmentInfo
     * @return Order
     */
    public function setFulfillmentInfo($FulfillmentInfo)
    {
      $this->FulfillmentInfo = $FulfillmentInfo;
      return $this;
    }

    /**
     * @return ContactInfoExt
     */
    public function getSoldTo()
    {
      return $this->SoldTo;
    }

    /**
     * @param ContactInfoExt $SoldTo
     * @return Order
     */
    public function setSoldTo($SoldTo)
    {
      $this->SoldTo = $SoldTo;
      return $this;
    }

}
