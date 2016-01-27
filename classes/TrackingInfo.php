<?php

class TrackingInfo
{

    /**
     * @var string $BillOfLading
     */
    protected $BillOfLading = null;

    /**
     * @var string $MasterBillOfLadingID
     */
    protected $MasterBillOfLadingID = null;

    /**
     * @var string $TrackingNumber
     */
    protected $TrackingNumber = null;

    /**
     * @var string $TrailerNumber
     */
    protected $TrailerNumber = null;

    /**
     * @var string $SealNumber
     */
    protected $SealNumber = null;

    /**
     * @var string $LoadNumber
     */
    protected $LoadNumber = null;

    /**
     * @var I18nDateTime $PickupDate
     */
    protected $PickupDate = null;

    /**
     * @var string $DoorNumber
     */
    protected $DoorNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBillOfLading()
    {
      return $this->BillOfLading;
    }

    /**
     * @param string $BillOfLading
     * @return TrackingInfo
     */
    public function setBillOfLading($BillOfLading)
    {
      $this->BillOfLading = $BillOfLading;
      return $this;
    }

    /**
     * @return string
     */
    public function getMasterBillOfLadingID()
    {
      return $this->MasterBillOfLadingID;
    }

    /**
     * @param string $MasterBillOfLadingID
     * @return TrackingInfo
     */
    public function setMasterBillOfLadingID($MasterBillOfLadingID)
    {
      $this->MasterBillOfLadingID = $MasterBillOfLadingID;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
      return $this->TrackingNumber;
    }

    /**
     * @param string $TrackingNumber
     * @return TrackingInfo
     */
    public function setTrackingNumber($TrackingNumber)
    {
      $this->TrackingNumber = $TrackingNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrailerNumber()
    {
      return $this->TrailerNumber;
    }

    /**
     * @param string $TrailerNumber
     * @return TrackingInfo
     */
    public function setTrailerNumber($TrailerNumber)
    {
      $this->TrailerNumber = $TrailerNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSealNumber()
    {
      return $this->SealNumber;
    }

    /**
     * @param string $SealNumber
     * @return TrackingInfo
     */
    public function setSealNumber($SealNumber)
    {
      $this->SealNumber = $SealNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getLoadNumber()
    {
      return $this->LoadNumber;
    }

    /**
     * @param string $LoadNumber
     * @return TrackingInfo
     */
    public function setLoadNumber($LoadNumber)
    {
      $this->LoadNumber = $LoadNumber;
      return $this;
    }

    /**
     * @return I18nDateTime
     */
    public function getPickupDate()
    {
      return $this->PickupDate;
    }

    /**
     * @param I18nDateTime $PickupDate
     * @return TrackingInfo
     */
    public function setPickupDate($PickupDate)
    {
      $this->PickupDate = $PickupDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getDoorNumber()
    {
      return $this->DoorNumber;
    }

    /**
     * @param string $DoorNumber
     * @return TrackingInfo
     */
    public function setDoorNumber($DoorNumber)
    {
      $this->DoorNumber = $DoorNumber;
      return $this;
    }

}
