<?php

class WarehouseTransaction
{

    /**
     * @var int $WarehouseTransactionID
     */
    protected $WarehouseTransactionID = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var WarehouseTransactionType $WarehouseTransactionTypeID
     */
    protected $WarehouseTransactionTypeID = null;

    /**
     * @var string $WarehouseTransactionTypeDesc
     */
    protected $WarehouseTransactionTypeDesc = null;

    /**
     * @var int $CustomerID
     */
    protected $CustomerID = null;

    /**
     * @var string $CustomerDesc
     */
    protected $CustomerDesc = null;

    /**
     * @var I18nDateTime $CreationDate
     */
    protected $CreationDate = null;

    /**
     * @var I18nDateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var TransactionInfo $TransInfo
     */
    protected $TransInfo = null;

    /**
     * @var UserLogin $CreatedBy
     */
    protected $CreatedBy = null;

    /**
     * @var ContactInfo $ShipTo
     */
    protected $ShipTo = null;

    /**
     * @var ContactInfo $SoldTo
     */
    protected $SoldTo = null;

    /**
     * @var CostInfo $CostInfo
     */
    protected $CostInfo = null;

    /**
     * @var ShippingInstructions $ShippingInstructions
     */
    protected $ShippingInstructions = null;

    /**
     * @var TrackingInfo $TrackingInfo
     */
    protected $TrackingInfo = null;

    /**
     * @var ShipmentInfo $ShipmentInfo
     */
    protected $ShipmentInfo = null;

    /**
     * @var FulfillInvInfo $FulfillInvInfo
     */
    protected $FulfillInvInfo = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var I18nDateTime $ProcessDate
     */
    protected $ProcessDate = null;

    /**
     * @var I18nDateTime $PickTicketPrintDate
     */
    protected $PickTicketPrintDate = null;

    /**
     * @var WarehouseTransactionStatus $Status
     */
    protected $Status = null;

    /**
     * @var int $FacilityID
     */
    protected $FacilityID = null;

    /**
     * @var boolean $UnderAllocated
     */
    protected $UnderAllocated = null;

    /**
     * @var boolean $IsCOD
     */
    protected $IsCOD = null;

    /**
     * @var boolean $IsInsurance
     */
    protected $IsInsurance = null;

    /**
     * @var float $UPSServiceOptionCharge
     */
    protected $UPSServiceOptionCharge = null;

    /**
     * @var float $UPSTransportationCharge
     */
    protected $UPSTransportationCharge = null;

    /**
     * @var boolean $AddFreightToCOD
     */
    protected $AddFreightToCOD = null;

    /**
     * @var boolean $UPSIsResidential
     */
    protected $UPSIsResidential = null;

    /**
     * @var boolean $ASNSent
     */
    protected $ASNSent = null;

    /**
     * @var I18nDateTime $ASNSentDate
     */
    protected $ASNSentDate = null;

    /**
     * @var boolean $RouteSent
     */
    protected $RouteSent = null;

    /**
     * @var I18nDateTime $RoutePickupDate
     */
    protected $RoutePickupDate = null;

    /**
     * @var boolean $PkgsExported
     */
    protected $PkgsExported = null;

    /**
     * @var StorageChargePeriodType $StorageChargePeriodTypeID
     */
    protected $StorageChargePeriodTypeID = null;

    /**
     * @var int $ImportModuleID
     */
    protected $ImportModuleID = null;

    /**
     * @var string $ExportModuleIDs
     */
    protected $ExportModuleIDs = null;

    /**
     * @var int $OrderFtpID
     */
    protected $OrderFtpID = null;

    /**
     * @var boolean $LabelsExported
     */
    protected $LabelsExported = null;

    /**
     * @var int $BatchOrderID
     */
    protected $BatchOrderID = null;

    /**
     * @var boolean $IsStageSet
     */
    protected $IsStageSet = null;

    /**
     * @var int $Stage
     */
    protected $Stage = null;

    /**
     * @var I18nDateTime $InvoiceDeliveredDate
     */
    protected $InvoiceDeliveredDate = null;

    /**
     * @var CapacityType $CapacityType
     */
    protected $CapacityType = null;

    /**
     * @var TransactionEntryType $TransactionEntryType
     */
    protected $TransactionEntryType = null;

    /**
     * @var int $PurchaseOrderID
     */
    protected $PurchaseOrderID = null;

    /**
     * @var LoadOutLogState $LoadedState
     */
    protected $LoadedState = null;

    /**
     * @var int $LoadOutPercentage
     */
    protected $LoadOutPercentage = null;

    /**
     * @var boolean $RequiresDeliveryConf
     */
    protected $RequiresDeliveryConf = null;

    /**
     * @var boolean $RequiresReturnReceipt
     */
    protected $RequiresReturnReceipt = null;

    /**
     * @var \DateTime $PickDoneDate
     */
    protected $PickDoneDate = null;

    /**
     * @var \DateTime $PackDoneDate
     */
    protected $PackDoneDate = null;

    /**
     * @var \DateTime $LoadOutDoneDate
     */
    protected $LoadOutDoneDate = null;

    /**
     * @var \DateTime $ExpectedDate
     */
    protected $ExpectedDate = null;

    /**
     * @var \DateTime $ReallocatedAfterPickTicketDate
     */
    protected $ReallocatedAfterPickTicketDate = null;

    /**
     * @var \DateTime $ShipDate
     */
    protected $ShipDate = null;

    /**
     * @var \DateTime $EndOfDayDate
     */
    protected $EndOfDayDate = null;

    /**
     * @var ArrayOfCodeDescrPair1 $SavedElements
     */
    protected $SavedElements = null;

    /**
     * @var ArrayOfOrderItem $orderItems
     */
    protected $orderItems = null;

    /**
     * @var WarehouseTransactionFreightRateStatus $FreightRateStatus
     */
    protected $FreightRateStatus = null;

    /**
     * @var ContactInfo $BillTo
     */
    protected $BillTo = null;

    /**
     * @var int $WarehouseTransactionSourceID
     */
    protected $WarehouseTransactionSourceID = null;

    /**
     * @var int $WarehouseTransactionSourceSetupID
     */
    protected $WarehouseTransactionSourceSetupID = null;

    /**
     * @var string $WarehouseTransactionSourceDisplay
     */
    protected $WarehouseTransactionSourceDisplay = null;

    /**
     * @var string $TradingPartnerID
     */
    protected $TradingPartnerID = null;

    /**
     * @param int $WarehouseTransactionID
     * @param WarehouseTransactionType $WarehouseTransactionTypeID
     * @param int $CustomerID
     * @param WarehouseTransactionStatus $Status
     * @param int $FacilityID
     * @param boolean $UnderAllocated
     * @param boolean $IsCOD
     * @param boolean $IsInsurance
     * @param float $UPSServiceOptionCharge
     * @param float $UPSTransportationCharge
     * @param boolean $AddFreightToCOD
     * @param boolean $UPSIsResidential
     * @param boolean $ASNSent
     * @param boolean $RouteSent
     * @param boolean $PkgsExported
     * @param StorageChargePeriodType $StorageChargePeriodTypeID
     * @param int $ImportModuleID
     * @param int $OrderFtpID
     * @param boolean $LabelsExported
     * @param int $BatchOrderID
     * @param boolean $IsStageSet
     * @param int $Stage
     * @param int $PurchaseOrderID
     * @param LoadOutLogState $LoadedState
     * @param int $LoadOutPercentage
     * @param boolean $RequiresDeliveryConf
     * @param boolean $RequiresReturnReceipt
     * @param \DateTime $PickDoneDate
     * @param \DateTime $PackDoneDate
     * @param \DateTime $LoadOutDoneDate
     * @param \DateTime $ExpectedDate
     * @param \DateTime $ReallocatedAfterPickTicketDate
     * @param \DateTime $ShipDate
     * @param \DateTime $EndOfDayDate
     * @param WarehouseTransactionFreightRateStatus $FreightRateStatus
     * @param int $WarehouseTransactionSourceID
     * @param int $WarehouseTransactionSourceSetupID
     */
    public function __construct($WarehouseTransactionID, $WarehouseTransactionTypeID, $CustomerID, $Status, $FacilityID, $UnderAllocated, $IsCOD, $IsInsurance, $UPSServiceOptionCharge, $UPSTransportationCharge, $AddFreightToCOD, $UPSIsResidential, $ASNSent, $RouteSent, $PkgsExported, $StorageChargePeriodTypeID, $ImportModuleID, $OrderFtpID, $LabelsExported, $BatchOrderID, $IsStageSet, $Stage, $PurchaseOrderID, $LoadedState, $LoadOutPercentage, $RequiresDeliveryConf, $RequiresReturnReceipt, \DateTime $PickDoneDate, \DateTime $PackDoneDate, \DateTime $LoadOutDoneDate, \DateTime $ExpectedDate, \DateTime $ReallocatedAfterPickTicketDate, \DateTime $ShipDate, \DateTime $EndOfDayDate, $FreightRateStatus, $WarehouseTransactionSourceID, $WarehouseTransactionSourceSetupID)
    {
      $this->WarehouseTransactionID = $WarehouseTransactionID;
      $this->WarehouseTransactionTypeID = $WarehouseTransactionTypeID;
      $this->CustomerID = $CustomerID;
      $this->Status = $Status;
      $this->FacilityID = $FacilityID;
      $this->UnderAllocated = $UnderAllocated;
      $this->IsCOD = $IsCOD;
      $this->IsInsurance = $IsInsurance;
      $this->UPSServiceOptionCharge = $UPSServiceOptionCharge;
      $this->UPSTransportationCharge = $UPSTransportationCharge;
      $this->AddFreightToCOD = $AddFreightToCOD;
      $this->UPSIsResidential = $UPSIsResidential;
      $this->ASNSent = $ASNSent;
      $this->RouteSent = $RouteSent;
      $this->PkgsExported = $PkgsExported;
      $this->StorageChargePeriodTypeID = $StorageChargePeriodTypeID;
      $this->ImportModuleID = $ImportModuleID;
      $this->OrderFtpID = $OrderFtpID;
      $this->LabelsExported = $LabelsExported;
      $this->BatchOrderID = $BatchOrderID;
      $this->IsStageSet = $IsStageSet;
      $this->Stage = $Stage;
      $this->PurchaseOrderID = $PurchaseOrderID;
      $this->LoadedState = $LoadedState;
      $this->LoadOutPercentage = $LoadOutPercentage;
      $this->RequiresDeliveryConf = $RequiresDeliveryConf;
      $this->RequiresReturnReceipt = $RequiresReturnReceipt;
      $this->PickDoneDate = $PickDoneDate->format(\DateTime::ATOM);
      $this->PackDoneDate = $PackDoneDate->format(\DateTime::ATOM);
      $this->LoadOutDoneDate = $LoadOutDoneDate->format(\DateTime::ATOM);
      $this->ExpectedDate = $ExpectedDate->format(\DateTime::ATOM);
      $this->ReallocatedAfterPickTicketDate = $ReallocatedAfterPickTicketDate->format(\DateTime::ATOM);
      $this->ShipDate = $ShipDate->format(\DateTime::ATOM);
      $this->EndOfDayDate = $EndOfDayDate->format(\DateTime::ATOM);
      $this->FreightRateStatus = $FreightRateStatus;
      $this->WarehouseTransactionSourceID = $WarehouseTransactionSourceID;
      $this->WarehouseTransactionSourceSetupID = $WarehouseTransactionSourceSetupID;
    }

    /**
     * @return int
     */
    public function getWarehouseTransactionID()
    {
      return $this->WarehouseTransactionID;
    }

    /**
     * @param int $WarehouseTransactionID
     * @return WarehouseTransaction
     */
    public function setWarehouseTransactionID($WarehouseTransactionID)
    {
      $this->WarehouseTransactionID = $WarehouseTransactionID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return WarehouseTransaction
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return WarehouseTransactionType
     */
    public function getWarehouseTransactionTypeID()
    {
      return $this->WarehouseTransactionTypeID;
    }

    /**
     * @param WarehouseTransactionType $WarehouseTransactionTypeID
     * @return WarehouseTransaction
     */
    public function setWarehouseTransactionTypeID($WarehouseTransactionTypeID)
    {
      $this->WarehouseTransactionTypeID = $WarehouseTransactionTypeID;
      return $this;
    }

    /**
     * @return string
     */
    public function getWarehouseTransactionTypeDesc()
    {
      return $this->WarehouseTransactionTypeDesc;
    }

    /**
     * @param string $WarehouseTransactionTypeDesc
     * @return WarehouseTransaction
     */
    public function setWarehouseTransactionTypeDesc($WarehouseTransactionTypeDesc)
    {
      $this->WarehouseTransactionTypeDesc = $WarehouseTransactionTypeDesc;
      return $this;
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
     * @return WarehouseTransaction
     */
    public function setCustomerID($CustomerID)
    {
      $this->CustomerID = $CustomerID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerDesc()
    {
      return $this->CustomerDesc;
    }

    /**
     * @param string $CustomerDesc
     * @return WarehouseTransaction
     */
    public function setCustomerDesc($CustomerDesc)
    {
      $this->CustomerDesc = $CustomerDesc;
      return $this;
    }

    /**
     * @return I18nDateTime
     */
    public function getCreationDate()
    {
      return $this->CreationDate;
    }

    /**
     * @param I18nDateTime $CreationDate
     * @return WarehouseTransaction
     */
    public function setCreationDate($CreationDate)
    {
      $this->CreationDate = $CreationDate;
      return $this;
    }

    /**
     * @return I18nDateTime
     */
    public function getLastModifiedDate()
    {
      return $this->LastModifiedDate;
    }

    /**
     * @param I18nDateTime $LastModifiedDate
     * @return WarehouseTransaction
     */
    public function setLastModifiedDate($LastModifiedDate)
    {
      $this->LastModifiedDate = $LastModifiedDate;
      return $this;
    }

    /**
     * @return TransactionInfo
     */
    public function getTransInfo()
    {
      return $this->TransInfo;
    }

    /**
     * @param TransactionInfo $TransInfo
     * @return WarehouseTransaction
     */
    public function setTransInfo($TransInfo)
    {
      $this->TransInfo = $TransInfo;
      return $this;
    }

    /**
     * @return UserLogin
     */
    public function getCreatedBy()
    {
      return $this->CreatedBy;
    }

    /**
     * @param UserLogin $CreatedBy
     * @return WarehouseTransaction
     */
    public function setCreatedBy($CreatedBy)
    {
      $this->CreatedBy = $CreatedBy;
      return $this;
    }

    /**
     * @return ContactInfo
     */
    public function getShipTo()
    {
      return $this->ShipTo;
    }

    /**
     * @param ContactInfo $ShipTo
     * @return WarehouseTransaction
     */
    public function setShipTo($ShipTo)
    {
      $this->ShipTo = $ShipTo;
      return $this;
    }

    /**
     * @return ContactInfo
     */
    public function getSoldTo()
    {
      return $this->SoldTo;
    }

    /**
     * @param ContactInfo $SoldTo
     * @return WarehouseTransaction
     */
    public function setSoldTo($SoldTo)
    {
      $this->SoldTo = $SoldTo;
      return $this;
    }

    /**
     * @return CostInfo
     */
    public function getCostInfo()
    {
      return $this->CostInfo;
    }

    /**
     * @param CostInfo $CostInfo
     * @return WarehouseTransaction
     */
    public function setCostInfo($CostInfo)
    {
      $this->CostInfo = $CostInfo;
      return $this;
    }

    /**
     * @return ShippingInstructions
     */
    public function getShippingInstructions()
    {
      return $this->ShippingInstructions;
    }

    /**
     * @param ShippingInstructions $ShippingInstructions
     * @return WarehouseTransaction
     */
    public function setShippingInstructions($ShippingInstructions)
    {
      $this->ShippingInstructions = $ShippingInstructions;
      return $this;
    }

    /**
     * @return TrackingInfo
     */
    public function getTrackingInfo()
    {
      return $this->TrackingInfo;
    }

    /**
     * @param TrackingInfo $TrackingInfo
     * @return WarehouseTransaction
     */
    public function setTrackingInfo($TrackingInfo)
    {
      $this->TrackingInfo = $TrackingInfo;
      return $this;
    }

    /**
     * @return ShipmentInfo
     */
    public function getShipmentInfo()
    {
      return $this->ShipmentInfo;
    }

    /**
     * @param ShipmentInfo $ShipmentInfo
     * @return WarehouseTransaction
     */
    public function setShipmentInfo($ShipmentInfo)
    {
      $this->ShipmentInfo = $ShipmentInfo;
      return $this;
    }

    /**
     * @return FulfillInvInfo
     */
    public function getFulfillInvInfo()
    {
      return $this->FulfillInvInfo;
    }

    /**
     * @param FulfillInvInfo $FulfillInvInfo
     * @return WarehouseTransaction
     */
    public function setFulfillInvInfo($FulfillInvInfo)
    {
      $this->FulfillInvInfo = $FulfillInvInfo;
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
     * @return WarehouseTransaction
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
      return $this;
    }

    /**
     * @return I18nDateTime
     */
    public function getProcessDate()
    {
      return $this->ProcessDate;
    }

    /**
     * @param I18nDateTime $ProcessDate
     * @return WarehouseTransaction
     */
    public function setProcessDate($ProcessDate)
    {
      $this->ProcessDate = $ProcessDate;
      return $this;
    }

    /**
     * @return I18nDateTime
     */
    public function getPickTicketPrintDate()
    {
      return $this->PickTicketPrintDate;
    }

    /**
     * @param I18nDateTime $PickTicketPrintDate
     * @return WarehouseTransaction
     */
    public function setPickTicketPrintDate($PickTicketPrintDate)
    {
      $this->PickTicketPrintDate = $PickTicketPrintDate;
      return $this;
    }

    /**
     * @return WarehouseTransactionStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param WarehouseTransactionStatus $Status
     * @return WarehouseTransaction
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return WarehouseTransaction
     */
    public function setFacilityID($FacilityID)
    {
      $this->FacilityID = $FacilityID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUnderAllocated()
    {
      return $this->UnderAllocated;
    }

    /**
     * @param boolean $UnderAllocated
     * @return WarehouseTransaction
     */
    public function setUnderAllocated($UnderAllocated)
    {
      $this->UnderAllocated = $UnderAllocated;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCOD()
    {
      return $this->IsCOD;
    }

    /**
     * @param boolean $IsCOD
     * @return WarehouseTransaction
     */
    public function setIsCOD($IsCOD)
    {
      $this->IsCOD = $IsCOD;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInsurance()
    {
      return $this->IsInsurance;
    }

    /**
     * @param boolean $IsInsurance
     * @return WarehouseTransaction
     */
    public function setIsInsurance($IsInsurance)
    {
      $this->IsInsurance = $IsInsurance;
      return $this;
    }

    /**
     * @return float
     */
    public function getUPSServiceOptionCharge()
    {
      return $this->UPSServiceOptionCharge;
    }

    /**
     * @param float $UPSServiceOptionCharge
     * @return WarehouseTransaction
     */
    public function setUPSServiceOptionCharge($UPSServiceOptionCharge)
    {
      $this->UPSServiceOptionCharge = $UPSServiceOptionCharge;
      return $this;
    }

    /**
     * @return float
     */
    public function getUPSTransportationCharge()
    {
      return $this->UPSTransportationCharge;
    }

    /**
     * @param float $UPSTransportationCharge
     * @return WarehouseTransaction
     */
    public function setUPSTransportationCharge($UPSTransportationCharge)
    {
      $this->UPSTransportationCharge = $UPSTransportationCharge;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAddFreightToCOD()
    {
      return $this->AddFreightToCOD;
    }

    /**
     * @param boolean $AddFreightToCOD
     * @return WarehouseTransaction
     */
    public function setAddFreightToCOD($AddFreightToCOD)
    {
      $this->AddFreightToCOD = $AddFreightToCOD;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUPSIsResidential()
    {
      return $this->UPSIsResidential;
    }

    /**
     * @param boolean $UPSIsResidential
     * @return WarehouseTransaction
     */
    public function setUPSIsResidential($UPSIsResidential)
    {
      $this->UPSIsResidential = $UPSIsResidential;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getASNSent()
    {
      return $this->ASNSent;
    }

    /**
     * @param boolean $ASNSent
     * @return WarehouseTransaction
     */
    public function setASNSent($ASNSent)
    {
      $this->ASNSent = $ASNSent;
      return $this;
    }

    /**
     * @return I18nDateTime
     */
    public function getASNSentDate()
    {
      return $this->ASNSentDate;
    }

    /**
     * @param I18nDateTime $ASNSentDate
     * @return WarehouseTransaction
     */
    public function setASNSentDate($ASNSentDate)
    {
      $this->ASNSentDate = $ASNSentDate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRouteSent()
    {
      return $this->RouteSent;
    }

    /**
     * @param boolean $RouteSent
     * @return WarehouseTransaction
     */
    public function setRouteSent($RouteSent)
    {
      $this->RouteSent = $RouteSent;
      return $this;
    }

    /**
     * @return I18nDateTime
     */
    public function getRoutePickupDate()
    {
      return $this->RoutePickupDate;
    }

    /**
     * @param I18nDateTime $RoutePickupDate
     * @return WarehouseTransaction
     */
    public function setRoutePickupDate($RoutePickupDate)
    {
      $this->RoutePickupDate = $RoutePickupDate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPkgsExported()
    {
      return $this->PkgsExported;
    }

    /**
     * @param boolean $PkgsExported
     * @return WarehouseTransaction
     */
    public function setPkgsExported($PkgsExported)
    {
      $this->PkgsExported = $PkgsExported;
      return $this;
    }

    /**
     * @return StorageChargePeriodType
     */
    public function getStorageChargePeriodTypeID()
    {
      return $this->StorageChargePeriodTypeID;
    }

    /**
     * @param StorageChargePeriodType $StorageChargePeriodTypeID
     * @return WarehouseTransaction
     */
    public function setStorageChargePeriodTypeID($StorageChargePeriodTypeID)
    {
      $this->StorageChargePeriodTypeID = $StorageChargePeriodTypeID;
      return $this;
    }

    /**
     * @return int
     */
    public function getImportModuleID()
    {
      return $this->ImportModuleID;
    }

    /**
     * @param int $ImportModuleID
     * @return WarehouseTransaction
     */
    public function setImportModuleID($ImportModuleID)
    {
      $this->ImportModuleID = $ImportModuleID;
      return $this;
    }

    /**
     * @return string
     */
    public function getExportModuleIDs()
    {
      return $this->ExportModuleIDs;
    }

    /**
     * @param string $ExportModuleIDs
     * @return WarehouseTransaction
     */
    public function setExportModuleIDs($ExportModuleIDs)
    {
      $this->ExportModuleIDs = $ExportModuleIDs;
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
     * @return WarehouseTransaction
     */
    public function setOrderFtpID($OrderFtpID)
    {
      $this->OrderFtpID = $OrderFtpID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLabelsExported()
    {
      return $this->LabelsExported;
    }

    /**
     * @param boolean $LabelsExported
     * @return WarehouseTransaction
     */
    public function setLabelsExported($LabelsExported)
    {
      $this->LabelsExported = $LabelsExported;
      return $this;
    }

    /**
     * @return int
     */
    public function getBatchOrderID()
    {
      return $this->BatchOrderID;
    }

    /**
     * @param int $BatchOrderID
     * @return WarehouseTransaction
     */
    public function setBatchOrderID($BatchOrderID)
    {
      $this->BatchOrderID = $BatchOrderID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsStageSet()
    {
      return $this->IsStageSet;
    }

    /**
     * @param boolean $IsStageSet
     * @return WarehouseTransaction
     */
    public function setIsStageSet($IsStageSet)
    {
      $this->IsStageSet = $IsStageSet;
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
     * @return WarehouseTransaction
     */
    public function setStage($Stage)
    {
      $this->Stage = $Stage;
      return $this;
    }

    /**
     * @return I18nDateTime
     */
    public function getInvoiceDeliveredDate()
    {
      return $this->InvoiceDeliveredDate;
    }

    /**
     * @param I18nDateTime $InvoiceDeliveredDate
     * @return WarehouseTransaction
     */
    public function setInvoiceDeliveredDate($InvoiceDeliveredDate)
    {
      $this->InvoiceDeliveredDate = $InvoiceDeliveredDate;
      return $this;
    }

    /**
     * @return CapacityType
     */
    public function getCapacityType()
    {
      return $this->CapacityType;
    }

    /**
     * @param CapacityType $CapacityType
     * @return WarehouseTransaction
     */
    public function setCapacityType($CapacityType)
    {
      $this->CapacityType = $CapacityType;
      return $this;
    }

    /**
     * @return TransactionEntryType
     */
    public function getTransactionEntryType()
    {
      return $this->TransactionEntryType;
    }

    /**
     * @param TransactionEntryType $TransactionEntryType
     * @return WarehouseTransaction
     */
    public function setTransactionEntryType($TransactionEntryType)
    {
      $this->TransactionEntryType = $TransactionEntryType;
      return $this;
    }

    /**
     * @return int
     */
    public function getPurchaseOrderID()
    {
      return $this->PurchaseOrderID;
    }

    /**
     * @param int $PurchaseOrderID
     * @return WarehouseTransaction
     */
    public function setPurchaseOrderID($PurchaseOrderID)
    {
      $this->PurchaseOrderID = $PurchaseOrderID;
      return $this;
    }

    /**
     * @return LoadOutLogState
     */
    public function getLoadedState()
    {
      return $this->LoadedState;
    }

    /**
     * @param LoadOutLogState $LoadedState
     * @return WarehouseTransaction
     */
    public function setLoadedState($LoadedState)
    {
      $this->LoadedState = $LoadedState;
      return $this;
    }

    /**
     * @return int
     */
    public function getLoadOutPercentage()
    {
      return $this->LoadOutPercentage;
    }

    /**
     * @param int $LoadOutPercentage
     * @return WarehouseTransaction
     */
    public function setLoadOutPercentage($LoadOutPercentage)
    {
      $this->LoadOutPercentage = $LoadOutPercentage;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRequiresDeliveryConf()
    {
      return $this->RequiresDeliveryConf;
    }

    /**
     * @param boolean $RequiresDeliveryConf
     * @return WarehouseTransaction
     */
    public function setRequiresDeliveryConf($RequiresDeliveryConf)
    {
      $this->RequiresDeliveryConf = $RequiresDeliveryConf;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRequiresReturnReceipt()
    {
      return $this->RequiresReturnReceipt;
    }

    /**
     * @param boolean $RequiresReturnReceipt
     * @return WarehouseTransaction
     */
    public function setRequiresReturnReceipt($RequiresReturnReceipt)
    {
      $this->RequiresReturnReceipt = $RequiresReturnReceipt;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPickDoneDate()
    {
      if ($this->PickDoneDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PickDoneDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PickDoneDate
     * @return WarehouseTransaction
     */
    public function setPickDoneDate(\DateTime $PickDoneDate)
    {
      $this->PickDoneDate = $PickDoneDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPackDoneDate()
    {
      if ($this->PackDoneDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PackDoneDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PackDoneDate
     * @return WarehouseTransaction
     */
    public function setPackDoneDate(\DateTime $PackDoneDate)
    {
      $this->PackDoneDate = $PackDoneDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLoadOutDoneDate()
    {
      if ($this->LoadOutDoneDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LoadOutDoneDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LoadOutDoneDate
     * @return WarehouseTransaction
     */
    public function setLoadOutDoneDate(\DateTime $LoadOutDoneDate)
    {
      $this->LoadOutDoneDate = $LoadOutDoneDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpectedDate()
    {
      if ($this->ExpectedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExpectedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExpectedDate
     * @return WarehouseTransaction
     */
    public function setExpectedDate(\DateTime $ExpectedDate)
    {
      $this->ExpectedDate = $ExpectedDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReallocatedAfterPickTicketDate()
    {
      if ($this->ReallocatedAfterPickTicketDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ReallocatedAfterPickTicketDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ReallocatedAfterPickTicketDate
     * @return WarehouseTransaction
     */
    public function setReallocatedAfterPickTicketDate(\DateTime $ReallocatedAfterPickTicketDate)
    {
      $this->ReallocatedAfterPickTicketDate = $ReallocatedAfterPickTicketDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getShipDate()
    {
      if ($this->ShipDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ShipDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ShipDate
     * @return WarehouseTransaction
     */
    public function setShipDate(\DateTime $ShipDate)
    {
      $this->ShipDate = $ShipDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndOfDayDate()
    {
      if ($this->EndOfDayDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndOfDayDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndOfDayDate
     * @return WarehouseTransaction
     */
    public function setEndOfDayDate(\DateTime $EndOfDayDate)
    {
      $this->EndOfDayDate = $EndOfDayDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return ArrayOfCodeDescrPair1
     */
    public function getSavedElements()
    {
      return $this->SavedElements;
    }

    /**
     * @param ArrayOfCodeDescrPair1 $SavedElements
     * @return WarehouseTransaction
     */
    public function setSavedElements($SavedElements)
    {
      $this->SavedElements = $SavedElements;
      return $this;
    }

    /**
     * @return ArrayOfOrderItem
     */
    public function getOrderItems()
    {
      return $this->orderItems;
    }

    /**
     * @param ArrayOfOrderItem $orderItems
     * @return WarehouseTransaction
     */
    public function setOrderItems($orderItems)
    {
      $this->orderItems = $orderItems;
      return $this;
    }

    /**
     * @return WarehouseTransactionFreightRateStatus
     */
    public function getFreightRateStatus()
    {
      return $this->FreightRateStatus;
    }

    /**
     * @param WarehouseTransactionFreightRateStatus $FreightRateStatus
     * @return WarehouseTransaction
     */
    public function setFreightRateStatus($FreightRateStatus)
    {
      $this->FreightRateStatus = $FreightRateStatus;
      return $this;
    }

    /**
     * @return ContactInfo
     */
    public function getBillTo()
    {
      return $this->BillTo;
    }

    /**
     * @param ContactInfo $BillTo
     * @return WarehouseTransaction
     */
    public function setBillTo($BillTo)
    {
      $this->BillTo = $BillTo;
      return $this;
    }

    /**
     * @return int
     */
    public function getWarehouseTransactionSourceID()
    {
      return $this->WarehouseTransactionSourceID;
    }

    /**
     * @param int $WarehouseTransactionSourceID
     * @return WarehouseTransaction
     */
    public function setWarehouseTransactionSourceID($WarehouseTransactionSourceID)
    {
      $this->WarehouseTransactionSourceID = $WarehouseTransactionSourceID;
      return $this;
    }

    /**
     * @return int
     */
    public function getWarehouseTransactionSourceSetupID()
    {
      return $this->WarehouseTransactionSourceSetupID;
    }

    /**
     * @param int $WarehouseTransactionSourceSetupID
     * @return WarehouseTransaction
     */
    public function setWarehouseTransactionSourceSetupID($WarehouseTransactionSourceSetupID)
    {
      $this->WarehouseTransactionSourceSetupID = $WarehouseTransactionSourceSetupID;
      return $this;
    }

    /**
     * @return string
     */
    public function getWarehouseTransactionSourceDisplay()
    {
      return $this->WarehouseTransactionSourceDisplay;
    }

    /**
     * @param string $WarehouseTransactionSourceDisplay
     * @return WarehouseTransaction
     */
    public function setWarehouseTransactionSourceDisplay($WarehouseTransactionSourceDisplay)
    {
      $this->WarehouseTransactionSourceDisplay = $WarehouseTransactionSourceDisplay;
      return $this;
    }

    /**
     * @return string
     */
    public function getTradingPartnerID()
    {
      return $this->TradingPartnerID;
    }

    /**
     * @param string $TradingPartnerID
     * @return WarehouseTransaction
     */
    public function setTradingPartnerID($TradingPartnerID)
    {
      $this->TradingPartnerID = $TradingPartnerID;
      return $this;
    }

}
