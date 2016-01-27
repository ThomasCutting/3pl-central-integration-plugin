<?php

class CostInfo
{

    /**
     * @var ArrayOfString $hasValueNumberFields
     */
    protected $hasValueNumberFields = null;

    /**
     * @var float $AutoCalcHandling
     */
    protected $AutoCalcHandling = null;

    /**
     * @var ArrayOfCostInfoDetail $AutoCalcHandlingDetail
     */
    protected $AutoCalcHandlingDetail = null;

    /**
     * @var float $Handling
     */
    protected $Handling = null;

    /**
     * @var ArrayOfCostInfoDetail $HandlingDetail
     */
    protected $HandlingDetail = null;

    /**
     * @var float $AutoCalcStorage
     */
    protected $AutoCalcStorage = null;

    /**
     * @var ArrayOfCostInfoDetail $AutoCalcStorageDetail
     */
    protected $AutoCalcStorageDetail = null;

    /**
     * @var float $Storage
     */
    protected $Storage = null;

    /**
     * @var ArrayOfCostInfoDetail $StorageDetail
     */
    protected $StorageDetail = null;

    /**
     * @var float $FreightPP
     */
    protected $FreightPP = null;

    /**
     * @var ArrayOfCostInfoDetail $FreightPPDetail
     */
    protected $FreightPPDetail = null;

    /**
     * @var float $Materials
     */
    protected $Materials = null;

    /**
     * @var ArrayOfCostInfoDetail $MaterialsDetail
     */
    protected $MaterialsDetail = null;

    /**
     * @var float $SpecialCharges
     */
    protected $SpecialCharges = null;

    /**
     * @var ArrayOfCostInfoDetail $SpecialChargesDetail
     */
    protected $SpecialChargesDetail = null;

    /**
     * @var float $Freight3
     */
    protected $Freight3 = null;

    /**
     * @var ArrayOfCostInfoDetail $Freight3Detail
     */
    protected $Freight3Detail = null;

    /**
     * @param float $AutoCalcHandling
     * @param float $Handling
     * @param float $AutoCalcStorage
     * @param float $Storage
     * @param float $FreightPP
     * @param float $Materials
     * @param float $SpecialCharges
     * @param float $Freight3
     */
    public function __construct($AutoCalcHandling, $Handling, $AutoCalcStorage, $Storage, $FreightPP, $Materials, $SpecialCharges, $Freight3)
    {
      $this->AutoCalcHandling = $AutoCalcHandling;
      $this->Handling = $Handling;
      $this->AutoCalcStorage = $AutoCalcStorage;
      $this->Storage = $Storage;
      $this->FreightPP = $FreightPP;
      $this->Materials = $Materials;
      $this->SpecialCharges = $SpecialCharges;
      $this->Freight3 = $Freight3;
    }

    /**
     * @return ArrayOfString
     */
    public function getHasValueNumberFields()
    {
      return $this->hasValueNumberFields;
    }

    /**
     * @param ArrayOfString $hasValueNumberFields
     * @return CostInfo
     */
    public function setHasValueNumberFields($hasValueNumberFields)
    {
      $this->hasValueNumberFields = $hasValueNumberFields;
      return $this;
    }

    /**
     * @return float
     */
    public function getAutoCalcHandling()
    {
      return $this->AutoCalcHandling;
    }

    /**
     * @param float $AutoCalcHandling
     * @return CostInfo
     */
    public function setAutoCalcHandling($AutoCalcHandling)
    {
      $this->AutoCalcHandling = $AutoCalcHandling;
      return $this;
    }

    /**
     * @return ArrayOfCostInfoDetail
     */
    public function getAutoCalcHandlingDetail()
    {
      return $this->AutoCalcHandlingDetail;
    }

    /**
     * @param ArrayOfCostInfoDetail $AutoCalcHandlingDetail
     * @return CostInfo
     */
    public function setAutoCalcHandlingDetail($AutoCalcHandlingDetail)
    {
      $this->AutoCalcHandlingDetail = $AutoCalcHandlingDetail;
      return $this;
    }

    /**
     * @return float
     */
    public function getHandling()
    {
      return $this->Handling;
    }

    /**
     * @param float $Handling
     * @return CostInfo
     */
    public function setHandling($Handling)
    {
      $this->Handling = $Handling;
      return $this;
    }

    /**
     * @return ArrayOfCostInfoDetail
     */
    public function getHandlingDetail()
    {
      return $this->HandlingDetail;
    }

    /**
     * @param ArrayOfCostInfoDetail $HandlingDetail
     * @return CostInfo
     */
    public function setHandlingDetail($HandlingDetail)
    {
      $this->HandlingDetail = $HandlingDetail;
      return $this;
    }

    /**
     * @return float
     */
    public function getAutoCalcStorage()
    {
      return $this->AutoCalcStorage;
    }

    /**
     * @param float $AutoCalcStorage
     * @return CostInfo
     */
    public function setAutoCalcStorage($AutoCalcStorage)
    {
      $this->AutoCalcStorage = $AutoCalcStorage;
      return $this;
    }

    /**
     * @return ArrayOfCostInfoDetail
     */
    public function getAutoCalcStorageDetail()
    {
      return $this->AutoCalcStorageDetail;
    }

    /**
     * @param ArrayOfCostInfoDetail $AutoCalcStorageDetail
     * @return CostInfo
     */
    public function setAutoCalcStorageDetail($AutoCalcStorageDetail)
    {
      $this->AutoCalcStorageDetail = $AutoCalcStorageDetail;
      return $this;
    }

    /**
     * @return float
     */
    public function getStorage()
    {
      return $this->Storage;
    }

    /**
     * @param float $Storage
     * @return CostInfo
     */
    public function setStorage($Storage)
    {
      $this->Storage = $Storage;
      return $this;
    }

    /**
     * @return ArrayOfCostInfoDetail
     */
    public function getStorageDetail()
    {
      return $this->StorageDetail;
    }

    /**
     * @param ArrayOfCostInfoDetail $StorageDetail
     * @return CostInfo
     */
    public function setStorageDetail($StorageDetail)
    {
      $this->StorageDetail = $StorageDetail;
      return $this;
    }

    /**
     * @return float
     */
    public function getFreightPP()
    {
      return $this->FreightPP;
    }

    /**
     * @param float $FreightPP
     * @return CostInfo
     */
    public function setFreightPP($FreightPP)
    {
      $this->FreightPP = $FreightPP;
      return $this;
    }

    /**
     * @return ArrayOfCostInfoDetail
     */
    public function getFreightPPDetail()
    {
      return $this->FreightPPDetail;
    }

    /**
     * @param ArrayOfCostInfoDetail $FreightPPDetail
     * @return CostInfo
     */
    public function setFreightPPDetail($FreightPPDetail)
    {
      $this->FreightPPDetail = $FreightPPDetail;
      return $this;
    }

    /**
     * @return float
     */
    public function getMaterials()
    {
      return $this->Materials;
    }

    /**
     * @param float $Materials
     * @return CostInfo
     */
    public function setMaterials($Materials)
    {
      $this->Materials = $Materials;
      return $this;
    }

    /**
     * @return ArrayOfCostInfoDetail
     */
    public function getMaterialsDetail()
    {
      return $this->MaterialsDetail;
    }

    /**
     * @param ArrayOfCostInfoDetail $MaterialsDetail
     * @return CostInfo
     */
    public function setMaterialsDetail($MaterialsDetail)
    {
      $this->MaterialsDetail = $MaterialsDetail;
      return $this;
    }

    /**
     * @return float
     */
    public function getSpecialCharges()
    {
      return $this->SpecialCharges;
    }

    /**
     * @param float $SpecialCharges
     * @return CostInfo
     */
    public function setSpecialCharges($SpecialCharges)
    {
      $this->SpecialCharges = $SpecialCharges;
      return $this;
    }

    /**
     * @return ArrayOfCostInfoDetail
     */
    public function getSpecialChargesDetail()
    {
      return $this->SpecialChargesDetail;
    }

    /**
     * @param ArrayOfCostInfoDetail $SpecialChargesDetail
     * @return CostInfo
     */
    public function setSpecialChargesDetail($SpecialChargesDetail)
    {
      $this->SpecialChargesDetail = $SpecialChargesDetail;
      return $this;
    }

    /**
     * @return float
     */
    public function getFreight3()
    {
      return $this->Freight3;
    }

    /**
     * @param float $Freight3
     * @return CostInfo
     */
    public function setFreight3($Freight3)
    {
      $this->Freight3 = $Freight3;
      return $this;
    }

    /**
     * @return ArrayOfCostInfoDetail
     */
    public function getFreight3Detail()
    {
      return $this->Freight3Detail;
    }

    /**
     * @param ArrayOfCostInfoDetail $Freight3Detail
     * @return CostInfo
     */
    public function setFreight3Detail($Freight3Detail)
    {
      $this->Freight3Detail = $Freight3Detail;
      return $this;
    }

}
