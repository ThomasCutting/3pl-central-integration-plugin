<?php

class TrackingInfoExt
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
     * @var \DateTime $PickupDate
     */
    protected $PickupDate = null;

    /**
     * @var string $DoorNumber
     */
    protected $DoorNumber = null;

    /**
     * @param \DateTime $PickupDate
     */
    public function __construct(\DateTime $PickupDate)
    {
      $this->PickupDate = $PickupDate->format(\DateTime::ATOM);
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
     * @return TrackingInfoExt
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
     * @return TrackingInfoExt
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
     * @return TrackingInfoExt
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
     * @return TrackingInfoExt
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
     * @return TrackingInfoExt
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
     * @return TrackingInfoExt
     */
    public function setLoadNumber($LoadNumber)
    {
      $this->LoadNumber = $LoadNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPickupDate()
    {
      if ($this->PickupDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PickupDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PickupDate
     * @return TrackingInfoExt
     */
    public function setPickupDate(\DateTime $PickupDate)
    {
      $this->PickupDate = $PickupDate->format(\DateTime::ATOM);
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
     * @return TrackingInfoExt
     */
    public function setDoorNumber($DoorNumber)
    {
      $this->DoorNumber = $DoorNumber;
      return $this;
    }

}
