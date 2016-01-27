<?php

class ServiceExternal extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'WhoAmI' => '\\WhoAmI',
  'WhoAmIResponse' => '\\WhoAmIResponse',
  'ExternalLoginData' => '\\ExternalLoginData',
  'ArrayOfOrder' => '\\ArrayOfOrder',
  'Order' => '\\Order',
  'TransactionInfoExt' => '\\TransactionInfoExt',
  'ContactInfoExt' => '\\ContactInfoExt',
  'AddressExt' => '\\AddressExt',
  'ShippingInstructionsExt' => '\\ShippingInstructionsExt',
  'ShipmentInfoExt' => '\\ShipmentInfoExt',
  'TrackingInfoExt' => '\\TrackingInfoExt',
  'ArrayOfOrderLineItem' => '\\ArrayOfOrderLineItem',
  'OrderLineItem' => '\\OrderLineItem',
  'ArrayOfCodeDescrPair' => '\\ArrayOfCodeDescrPair',
  'CodeDescrPair' => '\\CodeDescrPair',
  'FulfillInvInfo' => '\\FulfillInvInfo',
  'ArrayOfUpdateOrder' => '\\ArrayOfUpdateOrder',
  'UpdateOrder' => '\\UpdateOrder',
  'ArrayOfCancelOrder' => '\\ArrayOfCancelOrder',
  'CancelOrder' => '\\CancelOrder',
  'UserLoginData' => '\\UserLoginData',
  'ArrayOfRetailer' => '\\ArrayOfRetailer',
  'Retailer' => '\\Retailer',
  'FindOrderCriteria' => '\\FindOrderCriteria',
  'ArrayOfInt' => '\\ArrayOfInt',
  'I18nDateTime' => '\\I18nDateTime',
  'ArrayOfStockStatusEntry' => '\\ArrayOfStockStatusEntry',
  'StockStatusEntry' => '\\StockStatusEntry',
  'ExtStockStatusEntry' => '\\ExtStockStatusEntry',
  'ArrayOfSmallParcel' => '\\ArrayOfSmallParcel',
  'SmallParcel' => '\\SmallParcel',
  'WarehouseTransaction' => '\\WarehouseTransaction',
  'TransactionInfo' => '\\TransactionInfo',
  'UserLogin' => '\\UserLogin',
  'ContactInfo' => '\\ContactInfo',
  'Address' => '\\Address',
  'CostInfo' => '\\CostInfo',
  'ArrayOfString' => '\\ArrayOfString',
  'ArrayOfCostInfoDetail' => '\\ArrayOfCostInfoDetail',
  'CostInfoDetail' => '\\CostInfoDetail',
  'ArrayOfRecurringBillingDetail' => '\\ArrayOfRecurringBillingDetail',
  'RecurringBillingDetail' => '\\RecurringBillingDetail',
  'ShippingInstructions' => '\\ShippingInstructions',
  'TrackingInfo' => '\\TrackingInfo',
  'ShipmentInfo' => '\\ShipmentInfo',
  'UnitOfMeasure' => '\\UnitOfMeasure',
  'CapacityType' => '\\CapacityType',
  'TransactionEntryType' => '\\TransactionEntryType',
  'ArrayOfCodeDescrPair1' => '\\ArrayOfCodeDescrPair1',
  'ArrayOfOrderItem' => '\\ArrayOfOrderItem',
  'OrderItem' => '\\OrderItem',
  'ArrayOfOrderItemReceiveItem' => '\\ArrayOfOrderItemReceiveItem',
  'OrderItemReceiveItem' => '\\OrderItemReceiveItem',
  'ReceiveItem' => '\\ReceiveItem',
  'ReceiveItemWithAllocations' => '\\ReceiveItemWithAllocations',
  'ArrayOfAllocation' => '\\ArrayOfAllocation',
  'Allocation' => '\\Allocation',
  'OrderItemReceiveItemNotYetPacked' => '\\OrderItemReceiveItemNotYetPacked',
  'Facility' => '\\Facility',
  'ArrayOfPackage' => '\\ArrayOfPackage',
  'Package' => '\\Package',
  'ArrayOfPackageContent' => '\\ArrayOfPackageContent',
  'PackageContent' => '\\PackageContent',
  'ArrayOfSmallParcelOrderItem' => '\\ArrayOfSmallParcelOrderItem',
  'SmallParcelOrderItem' => '\\SmallParcelOrderItem',
  'ArrayOfSmallParcelUpdateOrder' => '\\ArrayOfSmallParcelUpdateOrder',
  'SmallParcelUpdateOrder' => '\\SmallParcelUpdateOrder',
  'ArrayOfItem' => '\\ArrayOfItem',
  'Item' => '\\Item',
  'ArrayOfItemMaterial' => '\\ArrayOfItemMaterial',
  'ItemMaterial' => '\\ItemMaterial',
  'ArrayOfItemFacility' => '\\ArrayOfItemFacility',
  'ItemFacility' => '\\ItemFacility',
  'ArrayOfItemFacilityStorageRate' => '\\ArrayOfItemFacilityStorageRate',
  'ItemFacilityStorageRate' => '\\ItemFacilityStorageRate',
  'ArrayOfInt1' => '\\ArrayOfInt1',
  'ArrayOfExternalCustomer' => '\\ArrayOfExternalCustomer',
  'ExternalCustomer' => '\\ExternalCustomer',
  'ArrayOfExternalFacility' => '\\ArrayOfExternalFacility',
  'ExternalFacility' => '\\ExternalFacility',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'https://secure-wms.com/webserviceexternal/contracts.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Create Orders
     *
     * @param WhoAmI $parameters
     * @return WhoAmIResponse
     */
    public function WhoAmI(WhoAmI $parameters)
    {
      return $this->__soapCall('WhoAmI', array($parameters));
    }

    /**
     * Create Orders
     *
     * @param ExternalLoginData $extLoginData
     * @param ArrayOfOrder $orders
     * @param string $warnings
     * @return list(int $CreateOrdersResult, string $warnings)
     */
    public function CreateOrders(ExternalLoginData $extLoginData, ArrayOfOrder $orders, $warnings)
    {
      return $this->__soapCall('CreateOrders', array($extLoginData, $orders, $warnings));
    }

    /**
     * Update Orders
     *
     * @param ExternalLoginData $extLoginData
     * @param ArrayOfUpdateOrder $updateOrders
     * @param string $warnings
     * @return list(int $UpdateOrdersResult, string $warnings)
     */
    public function UpdateOrders(ExternalLoginData $extLoginData, ArrayOfUpdateOrder $updateOrders, $warnings)
    {
      return $this->__soapCall('UpdateOrders', array($extLoginData, $updateOrders, $warnings));
    }

    /**
     * Cancel Orders
     *
     * @param ExternalLoginData $extLoginData
     * @param ArrayOfCancelOrder $cancelOrders
     * @return int
     */
    public function CancelOrders(ExternalLoginData $extLoginData, ArrayOfCancelOrder $cancelOrders)
    {
      return $this->__soapCall('CancelOrders', array($extLoginData, $cancelOrders));
    }

    /**
     * Report all Retailers for a customer
     *
     * @param UserLoginData $userLoginData
     * @return ArrayOfRetailer
     */
    public function ReportRetailers(UserLoginData $userLoginData)
    {
      return $this->__soapCall('ReportRetailers', array($userLoginData));
    }

    /**
     * Find Order records for given 'find' parameters
     *
     * @param UserLoginData $userLoginData
     * @param FindOrderCriteria $focr
     * @param int $limitCount
     * @return list(string $FindOrdersResult, int $totalOrders)
     */
    public function FindOrders(UserLoginData $userLoginData, FindOrderCriteria $focr, $limitCount)
    {
      return $this->__soapCall('FindOrders', array($userLoginData, $focr, $limitCount));
    }

    /**
     * Find Order records for given 'find' parameters
     *
     * @param ExternalLoginData $extLoginData
     * @param FindOrderCriteria $focr
     * @param int $limitCount
     * @return list(string $FindOrdersExtResult, int $totalOrders)
     */
    public function FindOrdersExt(ExternalLoginData $extLoginData, FindOrderCriteria $focr, $limitCount)
    {
      return $this->__soapCall('FindOrdersExt', array($extLoginData, $focr, $limitCount));
    }

    /**
     * Report stockstatus for a customer
     *
     * @param UserLoginData $userLoginData
     * @return string
     */
    public function ReportStockStatus(UserLoginData $userLoginData)
    {
      return $this->__soapCall('ReportStockStatus', array($userLoginData));
    }

    /**
     * Report stockstatus for a customer
     *
     * @param ExternalLoginData $extLoginData
     * @return string
     */
    public function ReportStockStatusExt(ExternalLoginData $extLoginData)
    {
      return $this->__soapCall('ReportStockStatusExt', array($extLoginData));
    }

    /**
     * Report stockstatus for a customer
     *
     * @param ExternalLoginData $extLoginData
     * @return ArrayOfStockStatusEntry
     */
    public function ReportStockStatusSSExt(ExternalLoginData $extLoginData)
    {
      return $this->__soapCall('ReportStockStatusSSExt', array($extLoginData));
    }

    /**
     * Get Small Parcel Order records for given 'find' parameters
     *
     * @param UserLoginData $userLoginData
     * @param FindOrderCriteria $focr
     * @param int $limitCount
     * @return list(ArrayOfSmallParcel $SmallParcelOrdersResult, int $totalOrders)
     */
    public function SmallParcelOrders(UserLoginData $userLoginData, FindOrderCriteria $focr, $limitCount)
    {
      return $this->__soapCall('SmallParcelOrders', array($userLoginData, $focr, $limitCount));
    }

    /**
     * Update Tracking Numbers
     *
     * @param ExternalLoginData $extLoginData
     * @param ArrayOfUpdateOrder $updateOrders
     * @return list(int $SmallParcelUpdateTrackingNumbersResult, ArrayOfInt $notUpdated)
     */
    public function SmallParcelUpdateTrackingNumbers(ExternalLoginData $extLoginData, ArrayOfUpdateOrder $updateOrders)
    {
      return $this->__soapCall('SmallParcelUpdateTrackingNumbers', array($extLoginData, $updateOrders));
    }

    /**
     * Update the SmallParcelOrders
     *
     * @param ExternalLoginData $extLoginData
     * @param ArrayOfSmallParcelUpdateOrder $spUpdateOrders
     * @return list(int $SmallParcelUpdateOrdersResult, ArrayOfInt $notUpdated)
     */
    public function SmallParcelUpdateOrders(ExternalLoginData $extLoginData, ArrayOfSmallParcelUpdateOrder $spUpdateOrders)
    {
      return $this->__soapCall('SmallParcelUpdateOrders', array($extLoginData, $spUpdateOrders));
    }

    /**
     * Create Items
     *
     * @param ExternalLoginData $extLoginData
     * @param ArrayOfItem $Items
     * @param string $warnings
     * @return list(ArrayOfInt1 $CreateItemsResult, string $warnings)
     */
    public function CreateItems(ExternalLoginData $extLoginData, ArrayOfItem $Items, $warnings)
    {
      return $this->__soapCall('CreateItems', array($extLoginData, $Items, $warnings));
    }

    /**
     * Get Customers
     *
     * @param ExternalLoginData $extLoginData
     * @param boolean $includeInactive
     * @return ArrayOfExternalCustomer
     */
    public function GetCustomers(ExternalLoginData $extLoginData, $includeInactive)
    {
      return $this->__soapCall('GetCustomers', array($extLoginData, $includeInactive));
    }

}
