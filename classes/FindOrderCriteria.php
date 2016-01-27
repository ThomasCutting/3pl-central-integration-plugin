<?php

class FindOrderCriteria
{

    /**
     * @var int $CustomerID
     */
    protected $CustomerID = null;

    /**
     * @var ArrayOfInt $CustomerIDs
     */
    protected $CustomerIDs = null;

    /**
     * @var int $FacilityID
     */
    protected $FacilityID = null;

    /**
     * @var int $RetailerID
     */
    protected $RetailerID = null;

    /**
     * @var int $MarkForListID
     */
    protected $MarkForListID = null;

    /**
     * @var int $OrderFtpID
     */
    protected $OrderFtpID = null;

    /**
     * @var string $NoteContains
     */
    protected $NoteContains = null;

    /**
     * @var string $RefNumberContains
     */
    protected $RefNumberContains = null;

    /**
     * @var FindTriStateType $OverAlloc
     */
    protected $OverAlloc = null;

    /**
     * @var FindTriStateType $Closed
     */
    protected $Closed = null;

    /**
     * @var FindTriStateType $ASNSent
     */
    protected $ASNSent = null;

    /**
     * @var FindTriStateType $RouteSent
     */
    protected $RouteSent = null;

    /**
     * @var int $Stage
     */
    protected $Stage = null;

    /**
     * @var I18nDateTime $BeginDate
     */
    protected $BeginDate = null;

    /**
     * @var I18nDateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var FindOrderDateRangeType $DateRangeType
     */
    protected $DateRangeType = null;

    /**
     * @var int $BeginTrans
     */
    protected $BeginTrans = null;

    /**
     * @var int $EndTrans
     */
    protected $EndTrans = null;

    /**
     * @var string $MasterBOLID
     */
    protected $MasterBOLID = null;

    /**
     * @var string $ReferenceNum
     */
    protected $ReferenceNum = null;

    /**
     * @var string $ShipTo
     */
    protected $ShipTo = null;

    /**
     * @var string $PoList
     */
    protected $PoList = null;

    /**
     * @var string $SKUList
     */
    protected $SKUList = null;

    /**
     * @var AddressStatusType $AddressStatus
     */
    protected $AddressStatus = null;

    /**
     * @var int $BatchID
     */
    protected $BatchID = null;

    /**
     * @var boolean $SpExactMatch
     */
    protected $SpExactMatch = null;

    /**
     * @param int $CustomerID
     * @param int $FacilityID
     * @param int $RetailerID
     * @param int $MarkForListID
     * @param int $OrderFtpID
     * @param FindTriStateType $OverAlloc
     * @param FindTriStateType $Closed
     * @param FindTriStateType $ASNSent
     * @param FindTriStateType $RouteSent
     * @param int $Stage
     * @param FindOrderDateRangeType $DateRangeType
     * @param int $BeginTrans
     * @param int $EndTrans
     * @param AddressStatusType $AddressStatus
     * @param int $BatchID
     * @param boolean $SpExactMatch
     */
    public function __construct($CustomerID, $FacilityID, $RetailerID, $MarkForListID, $OrderFtpID, $OverAlloc, $Closed, $ASNSent, $RouteSent, $Stage, $DateRangeType, $BeginTrans, $EndTrans, $AddressStatus, $BatchID, $SpExactMatch)
    {
      $this->CustomerID = $CustomerID;
      $this->FacilityID = $FacilityID;
      $this->RetailerID = $RetailerID;
      $this->MarkForListID = $MarkForListID;
      $this->OrderFtpID = $OrderFtpID;
      $this->OverAlloc = $OverAlloc;
      $this->Closed = $Closed;
      $this->ASNSent = $ASNSent;
      $this->RouteSent = $RouteSent;
      $this->Stage = $Stage;
      $this->DateRangeType = $DateRangeType;
      $this->BeginTrans = $BeginTrans;
      $this->EndTrans = $EndTrans;
      $this->AddressStatus = $AddressStatus;
      $this->BatchID = $BatchID;
      $this->SpExactMatch = $SpExactMatch;
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
     * @return FindOrderCriteria
     */
    public function setCustomerID($CustomerID)
    {
      $this->CustomerID = $CustomerID;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getCustomerIDs()
    {
      return $this->CustomerIDs;
    }

    /**
     * @param ArrayOfInt $CustomerIDs
     * @return FindOrderCriteria
     */
    public function setCustomerIDs($CustomerIDs)
    {
      $this->CustomerIDs = $CustomerIDs;
      return $this;
    }

    /**
     * @return int
     */
    public function getFacilityID()
    {
      return $this->FacilityID;
    }

    /**
     * @param int $FacilityID
     * @return FindOrderCriteria
     */
    public function setFacilityID($FacilityID)
    {
      $this->FacilityID = $FacilityID;
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
     * @return FindOrderCriteria
     */
    public function setRetailerID($RetailerID)
    {
      $this->RetailerID = $RetailerID;
      return $this;
    }

    /**
     * @return int
     */
    public function getMarkForListID()
    {
      return $this->MarkForListID;
    }

    /**
     * @param int $MarkForListID
     * @return FindOrderCriteria
     */
    public function setMarkForListID($MarkForListID)
    {
      $this->MarkForListID = $MarkForListID;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderFtpID()
    {
      return $this->OrderFtpID;
    }

    /**
     * @param int $OrderFtpID
     * @return FindOrderCriteria
     */
    public function setOrderFtpID($OrderFtpID)
    {
      $this->OrderFtpID = $OrderFtpID;
      return $this;
    }

    /**
     * @return string
     */
    public function getNoteContains()
    {
      return $this->NoteContains;
    }

    /**
     * @param string $NoteContains
     * @return FindOrderCriteria
     */
    public function setNoteContains($NoteContains)
    {
      $this->NoteContains = $NoteContains;
      return $this;
    }

    /**
     * @return string
     */
    public function getRefNumberContains()
    {
      return $this->RefNumberContains;
    }

    /**
     * @param string $RefNumberContains
     * @return FindOrderCriteria
     */
    public function setRefNumberContains($RefNumberContains)
    {
      $this->RefNumberContains = $RefNumberContains;
      return $this;
    }

    /**
     * @return FindTriStateType
     */
    public function getOverAlloc()
    {
      return $this->OverAlloc;
    }

    /**
     * @param FindTriStateType $OverAlloc
     * @return FindOrderCriteria
     */
    public function setOverAlloc($OverAlloc)
    {
      $this->OverAlloc = $OverAlloc;
      return $this;
    }

    /**
     * @return FindTriStateType
     */
    public function getClosed()
    {
      return $this->Closed;
    }

    /**
     * @param FindTriStateType $Closed
     * @return FindOrderCriteria
     */
    public function setClosed($Closed)
    {
      $this->Closed = $Closed;
      return $this;
    }

    /**
     * @return FindTriStateType
     */
    public function getASNSent()
    {
      return $this->ASNSent;
    }

    /**
     * @param FindTriStateType $ASNSent
     * @return FindOrderCriteria
     */
    public function setASNSent($ASNSent)
    {
      $this->ASNSent = $ASNSent;
      return $this;
    }

    /**
     * @return FindTriStateType
     */
    public function getRouteSent()
    {
      return $this->RouteSent;
    }

    /**
     * @param FindTriStateType $RouteSent
     * @return FindOrderCriteria
     */
    public function setRouteSent($RouteSent)
    {
      $this->RouteSent = $RouteSent;
      return $this;
    }

    /**
     * @return int
     */
    public function getStage()
    {
      return $this->Stage;
    }

    /**
     * @param int $Stage
     * @return FindOrderCriteria
     */
    public function setStage($Stage)
    {
      $this->Stage = $Stage;
      return $this;
    }

    /**
     * @return I18nDateTime
     */
    public function getBeginDate()
    {
      return $this->BeginDate;
    }

    /**
     * @param I18nDateTime $BeginDate
     * @return FindOrderCriteria
     */
    public function setBeginDate($BeginDate)
    {
      $this->BeginDate = $BeginDate;
      return $this;
    }

    /**
     * @return I18nDateTime
     */
    public function getEndDate()
    {
      return $this->EndDate;
    }

    /**
     * @param I18nDateTime $EndDate
     * @return FindOrderCriteria
     */
    public function setEndDate($EndDate)
    {
      $this->EndDate = $EndDate;
      return $this;
    }

    /**
     * @return FindOrderDateRangeType
     */
    public function getDateRangeType()
    {
      return $this->DateRangeType;
    }

    /**
     * @param FindOrderDateRangeType $DateRangeType
     * @return FindOrderCriteria
     */
    public function setDateRangeType($DateRangeType)
    {
      $this->DateRangeType = $DateRangeType;
      return $this;
    }

    /**
     * @return int
     */
    public function getBeginTrans()
    {
      return $this->BeginTrans;
    }

    /**
     * @param int $BeginTrans
     * @return FindOrderCriteria
     */
    public function setBeginTrans($BeginTrans)
    {
      $this->BeginTrans = $BeginTrans;
      return $this;
    }

    /**
     * @return int
     */
    public function getEndTrans()
    {
      return $this->EndTrans;
    }

    /**
     * @param int $EndTrans
     * @return FindOrderCriteria
     */
    public function setEndTrans($EndTrans)
    {
      $this->EndTrans = $EndTrans;
      return $this;
    }

    /**
     * @return string
     */
    public function getMasterBOLID()
    {
      return $this->MasterBOLID;
    }

    /**
     * @param string $MasterBOLID
     * @return FindOrderCriteria
     */
    public function setMasterBOLID($MasterBOLID)
    {
      $this->MasterBOLID = $MasterBOLID;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceNum()
    {
      return $this->ReferenceNum;
    }

    /**
     * @param string $ReferenceNum
     * @return FindOrderCriteria
     */
    public function setReferenceNum($ReferenceNum)
    {
      $this->ReferenceNum = $ReferenceNum;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipTo()
    {
      return $this->ShipTo;
    }

    /**
     * @param string $ShipTo
     * @return FindOrderCriteria
     */
    public function setShipTo($ShipTo)
    {
      $this->ShipTo = $ShipTo;
      return $this;
    }

    /**
     * @return string
     */
    public function getPoList()
    {
      return $this->PoList;
    }

    /**
     * @param string $PoList
     * @return FindOrderCriteria
     */
    public function setPoList($PoList)
    {
      $this->PoList = $PoList;
      return $this;
    }

    /**
     * @return string
     */
    public function getSKUList()
    {
      return $this->SKUList;
    }

    /**
     * @param string $SKUList
     * @return FindOrderCriteria
     */
    public function setSKUList($SKUList)
    {
      $this->SKUList = $SKUList;
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
     * @return FindOrderCriteria
     */
    public function setAddressStatus($AddressStatus)
    {
      $this->AddressStatus = $AddressStatus;
      return $this;
    }

    /**
     * @return int
     */
    public function getBatchID()
    {
      return $this->BatchID;
    }

    /**
     * @param int $BatchID
     * @return FindOrderCriteria
     */
    public function setBatchID($BatchID)
    {
      $this->BatchID = $BatchID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSpExactMatch()
    {
      return $this->SpExactMatch;
    }

    /**
     * @param boolean $SpExactMatch
     * @return FindOrderCriteria
     */
    public function setSpExactMatch($SpExactMatch)
    {
      $this->SpExactMatch = $SpExactMatch;
      return $this;
    }

}
