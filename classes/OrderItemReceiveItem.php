<?php

class OrderItemReceiveItem
{

    /**
     * @var ReceiveItem $ReceiveItem
     */
    protected $ReceiveItem = null;

    /**
     * @var float $Qty
     */
    protected $Qty = null;

    /**
     * @var int $OrderItemID
     */
    protected $OrderItemID = null;

    /**
     * @var int $ReceiveItemID
     */
    protected $ReceiveItemID = null;

    /**
     * @var float $ProperlyPickedPrimary
     */
    protected $ProperlyPickedPrimary = null;

    /**
     * @var float $ProperlyPickedSecondary
     */
    protected $ProperlyPickedSecondary = null;

    /**
     * @var boolean $MarkedForDeletion
     */
    protected $MarkedForDeletion = null;

    /**
     * @var boolean $LoadedOut
     */
    protected $LoadedOut = null;

    /**
     * @param float $Qty
     * @param int $OrderItemID
     * @param int $ReceiveItemID
     * @param float $ProperlyPickedPrimary
     * @param float $ProperlyPickedSecondary
     * @param boolean $MarkedForDeletion
     * @param boolean $LoadedOut
     */
    public function __construct($Qty, $OrderItemID, $ReceiveItemID, $ProperlyPickedPrimary, $ProperlyPickedSecondary, $MarkedForDeletion, $LoadedOut)
    {
      $this->Qty = $Qty;
      $this->OrderItemID = $OrderItemID;
      $this->ReceiveItemID = $ReceiveItemID;
      $this->ProperlyPickedPrimary = $ProperlyPickedPrimary;
      $this->ProperlyPickedSecondary = $ProperlyPickedSecondary;
      $this->MarkedForDeletion = $MarkedForDeletion;
      $this->LoadedOut = $LoadedOut;
    }

    /**
     * @return ReceiveItem
     */
    public function getReceiveItem()
    {
      return $this->ReceiveItem;
    }

    /**
     * @param ReceiveItem $ReceiveItem
     * @return OrderItemReceiveItem
     */
    public function setReceiveItem($ReceiveItem)
    {
      $this->ReceiveItem = $ReceiveItem;
      return $this;
    }

    /**
     * @return float
     */
    public function getQty()
    {
      return $this->Qty;
    }

    /**
     * @param float $Qty
     * @return OrderItemReceiveItem
     */
    public function setQty($Qty)
    {
      $this->Qty = $Qty;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderItemID()
    {
      return $this->OrderItemID;
    }

    /**
     * @param int $OrderItemID
     * @return OrderItemReceiveItem
     */
    public function setOrderItemID($OrderItemID)
    {
      $this->OrderItemID = $OrderItemID;
      return $this;
    }

    /**
     * @return int
     */
    public function getReceiveItemID()
    {
      return $this->ReceiveItemID;
    }

    /**
     * @param int $ReceiveItemID
     * @return OrderItemReceiveItem
     */
    public function setReceiveItemID($ReceiveItemID)
    {
      $this->ReceiveItemID = $ReceiveItemID;
      return $this;
    }

    /**
     * @return float
     */
    public function getProperlyPickedPrimary()
    {
      return $this->ProperlyPickedPrimary;
    }

    /**
     * @param float $ProperlyPickedPrimary
     * @return OrderItemReceiveItem
     */
    public function setProperlyPickedPrimary($ProperlyPickedPrimary)
    {
      $this->ProperlyPickedPrimary = $ProperlyPickedPrimary;
      return $this;
    }

    /**
     * @return float
     */
    public function getProperlyPickedSecondary()
    {
      return $this->ProperlyPickedSecondary;
    }

    /**
     * @param float $ProperlyPickedSecondary
     * @return OrderItemReceiveItem
     */
    public function setProperlyPickedSecondary($ProperlyPickedSecondary)
    {
      $this->ProperlyPickedSecondary = $ProperlyPickedSecondary;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMarkedForDeletion()
    {
      return $this->MarkedForDeletion;
    }

    /**
     * @param boolean $MarkedForDeletion
     * @return OrderItemReceiveItem
     */
    public function setMarkedForDeletion($MarkedForDeletion)
    {
      $this->MarkedForDeletion = $MarkedForDeletion;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLoadedOut()
    {
      return $this->LoadedOut;
    }

    /**
     * @param boolean $LoadedOut
     * @return OrderItemReceiveItem
     */
    public function setLoadedOut($LoadedOut)
    {
      $this->LoadedOut = $LoadedOut;
      return $this;
    }

}
