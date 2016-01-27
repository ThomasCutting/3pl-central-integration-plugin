<?php

require 'autoload.php';
require 'classes/autoload.php';

/**
 * Class ThreeCentralApiWrapper
 * --
 * This class acts as the wrapper to the ~ApiClient class.
 */
class ThreeCentralWrapper
{

    /**
     * CARRIER, CARRIER_DESC, CARRIER_MODE, SCAC_CODE constants
     */
    const CARRIER = "FedEx";
    const CARRIER_DESC = "A Carrier Service";
    const CARRIER_MODE = "Generic";
    const SCAC_CODE = "2315";

    /**
     * @var $apiHandler
     * Acts as the ThreeCentralAPI instance
     */
    private $apiHandler;

    /**
     * Constructor Method
     * --
     * @param $api_key
     * @param $api_id
     * @param $api_customer_id
     * @param $api_facility_id
     * @param $api_login
     * @param $api_password
     */
    public function __construct($api_key, $api_id, $api_customer_id, $api_facility_id, $api_login, $api_password)
    {
        // Instantiate a new instance of the ApiClient.
        $this->apiHandler = new ThreeCentralAPI($api_key, $api_id, $api_customer_id, $api_facility_id, $api_login, $api_password);
    }

    /**
     * createItem
     * --
     * @param Item $item
     * @param $sku
     * @param $description
     * @return ArrayOfItem|int|mixed|null
     */
    public function createItem(Item $item, $sku, $description)
    {
        if ($item != null) {
            // Instantiate a new ArrayOfItem
            try {
                // Set SKU & description of new item
                $item->setSKU($sku);
                $item->setDescription($description);

                // Set array of items, inc. above item.
                $aoItems = new ArrayOfItem();
                $aoItems->setItem([$item]);

                // return the new [items].
                return $aoItems;
            } catch (Exception $e) {
                // Something went wrong - error_log & return error message
                error_log($e->getMessage() . "-" . $e->getTraceAsString());
                return $e->getCode();
            }
        } else {
            return null;
        }
    }

    /**
     * createOrder
     * --
     * @param $woo_commerce_order_id
     */
    public function createOrder($woo_commerce_order_id)
    {
        // Fetch order from WC.
        $woo_order = new WC_Order($woo_commerce_order_id);

        // Contact Information
        $contact_infomation = $this->buildContactInformation(
            $woo_order->billing_company,
            $woo_order->billing_first_name . " " . $woo_order->billing_last_name,
            "WC", $woo_order->billing_phone,
            $woo_order->shipping_first_name . " " . $woo_order->shipping_last_name,
            $woo_order->billing_email, "", ""
        );

        // Transaction Information
        $transaction_information = $this->buildTransactionInformation(
            new DateTime(),
            new DateTime(),
            new DateTime(),
            $woo_order->get_order_number(),
            $woo_order->get_order_number() . "-" . $woo_order->billing_last_name
        );

        // Address Information
        $address_information = $this->buildAddressInformation(
            $woo_order->shipping_address_1,
            $woo_order->shipping_address_2,
            $woo_order->shipping_city,
            $woo_order->shipping_state,
            $woo_order->shipping_country,
            $woo_order->shipping_postcode
        );

        // Shipping Instructions
        $shipping_instructions = $this->buildShippingInstructionInformation(
            $woo_order->customer_user,
            $woo_order->billing_postcode,
            $this::CARRIER, $this::CARRIER_DESC, $this::CARRIER_MODE,
            $woo_order->shipping_method_title,
            $woo_order->customer_note,
            $woo_order->shipping_postcode,
            $this::SCAC_CODE
        );

        // Extraneous Information.
        $shipping_info = null; // - not needed in this instance
        $fulfillment_info = null; // - not needed in this instance

        // Create new Order for API.
        $order = new Order(1);

        // Ship to, Transaction Info, Customer Notes
        $order->setShipTo($contact_infomation);
        $order->setTransInfo($transaction_information);
        $order->setNotes($woo_order->customer_note);

        // Shipping instructions
        $order->setShippingInstructions($shipping_instructions);

        // Order line item array
        $order_line_item_arr = [];

        // Loop over woo_commerce_order items, and
        // fetch products & product information out of every item.
        foreach ($woo_order->get_items() as $item) {

            // Retrieve product
            $product = $woo_order->get_product_from_item($item);

            // Build new order line item
            $arr_order = $this->buildOrderLineLitem(
                $product->get_sku(),
                "",
                $product->get_stock_quantity(),
                "",
                $product->get_dimensions(),
                new DateTime(),
                $product->sale_price,
                "",
                ""
            );

            // Push order line item to [line item arr]
            array_push($order_line_item_arr, $arr_order);

        }

        // Set order line items
        $order->setOrderLineItems($order_line_item_arr);

        // Create an ArrayOfOrder object.
        $aoOrder = new ArrayOfOrder();
        $aoOrder->setOrder([$order]);

        // Execute and return the order action
        return $this->apiHandler->getClient()->CreateOrders($this->apiHandler->getExtLoginData(), $aoOrder);
    }

    /**
     * buildContactInformation
     * --
     * @param $companyName
     * @param $customerName
     * @param $department
     * @param $phoneNumber
     * @param $name
     * @param $emailAddress
     * @param $fax
     * @param $vendor
     * @return ContactInfoExt
     */
    private function buildContactInformation($companyName, $customerName, $department, $phoneNumber, $name, $emailAddress, $fax, $vendor)
    {
        // New up a ContactInfoExt object.
        $contact_info = new ContactInfoExt($this->apiHandler->api_customer_id);

        // Set information via method attributes.
        $contact_info->setCompanyName($companyName);
        $contact_info->setCustomerName($customerName);
        $contact_info->setDept($department);
        $contact_info->setPhoneNumber1($phoneNumber);
        $contact_info->setName($name);
        $contact_info->setEmailAddress1($emailAddress);
        $contact_info->setFax($fax);
        $contact_info->setVendor($vendor);

        // Return the properly formatted ContactInfoExt object
        return $contact_info;
    }

    /**
     * @param $expected_date_time
     * @param $earliest_date_time
     * @param $ship_cancel_date_time
     * @param $PONumber
     * @param $ReferenceNum
     * @return TransactionInfoExt
     */
    private function buildTransactionInformation($expected_date_time, $earliest_date_time, $ship_cancel_date_time, $PONumber, $ReferenceNum)
    {
        // New up a TransactionInfoExt object
        $transaction = new TransactionInfoExt($expected_date_time, $earliest_date_time, $ship_cancel_date_time);

        // Set information via method attributes
        $transaction->setPONum($PONumber);
        $transaction->setReferenceNum($ReferenceNum);

        // Return the properly formatted TransactionInfoExt
        return $transaction;
    }

    /**
     * @param $address_1
     * @param $address_2
     * @param $city
     * @param $state
     * @param $country
     * @param $zip_code
     * @return AddressExt
     */
    private function buildAddressInformation($address_1, $address_2, $city, $state, $country, $zip_code)
    {
        // New up a AddressExt object
        $address = new AddressExt();

        // Set information via method attributes
        $address->setAddress1($address_1);
        $address->setAddress2($address_2);
        $address->setCity($city);
        $address->setState($state);
        $address->setCountry($country);
        $address->setZip($zip_code);

        // Return the properly formatted AddressExt object.
        return $address;
    }

    /**
     * @param $account
     * @param $billing_code
     * @param $carrier
     * @param $carrier_desc
     * @param $mode
     * @param $ship_service
     * @param $shipping_notes
     * @param $ship_point_zip
     * @param $scac_code
     * @return ShippingInstructions
     */
    private function buildShippingInstructionInformation($account, $billing_code, $carrier, $carrier_desc, $mode, $ship_service, $shipping_notes, $ship_point_zip, $scac_code)
    {
        // New up a ShippingInstructions object.
        $shipping_instructions = new ShippingInstructions();

        // Set information via method attributes
        $shipping_instructions->setAccount($account);
        $shipping_instructions->setBillingCode($billing_code);
        $shipping_instructions->setCarrier($carrier);
        $shipping_instructions->setCarrierDesc($carrier_desc);
        $shipping_instructions->setMode($mode);
        $shipping_instructions->setShipService($ship_service);
        $shipping_instructions->setShippingNotes($shipping_notes);
        $shipping_instructions->setShipPointZip($ship_point_zip);
        $shipping_instructions->setSCACCode($scac_code);

        // Return the properly formatted ShippingInstructions object
        return $shipping_instructions;
    }

    /**
     * @param ShipmentInfoExt $ext
     * @return ShipmentInfoExt
     */
    private function buildShippingInformation(ShipmentInfoExt $ext)
    {
        return $ext;
    }

    /**
     * @param $SKU
     * @param $notes
     * @param $qty
     * @param $packed
     * @param $cu_ft_per_carton
     * @param DateTime $expiration_date
     * @param $fulfillment_sale_price
     * @param $fulfillment_discount_percentage
     * @param $fulfillment_discount_amount
     * @return OrderLineItem
     */
    private function buildOrderLineLitem($SKU, $notes, $qty, $packed, $cu_ft_per_carton, \DateTime $expiration_date, $fulfillment_sale_price, $fulfillment_discount_percentage, $fulfillment_discount_amount)
    {
        // New up a OrderLineItem
        // Set information via method attributes
        $order_line_item = new OrderLineItem($qty, $packed, $cu_ft_per_carton, $expiration_date, $fulfillment_sale_price, $fulfillment_discount_percentage, $fulfillment_discount_amount);

        // Set (more) information method attributes
        $order_line_item->setSKU($SKU);
        $order_line_item->setNotes($notes);

        // Return the orderLineItem
        return $order_line_item;
    }

}