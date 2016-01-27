<?php

require 'autoload.php';
require 'classes/autoload.php';

// Create a new ThreeCentralAPI Class
$a = new ThreeCentralAPI("{ae89686b-e927-4abc-8c60-c340995f9b72}", "479", "23", "1", "Incapi", "Incapi");

// Retrieve the SoapClient
$b = $a->getClient();

// Retrieve the ExternalLoginInformation
$external_login_information = $a->getExtLoginData();

// Array of items
$aoItems = new ArrayOfItem();

// New item
$item = new Item($a->api_customer_id, 0.00, 1.00, 1.00, 1, InventoryMethod::LIFO, 0.99, 12.00, true, true, true, true, true, true, true, true, true, true, true, 5.00, MeasurementSystemType::USImperial, 25.00, 15.00, 10.00, 10.00, false, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 50.00, false, HazMatPackingGroup::aDefault, HazMatFlag::aDefault, 25.00, 0);

// set sku of that item
$item->setSKU("TEST1");

// set description
$item->setDescription("Testing API");

// add item to arr.
$aoItems->setItem([$item]);

// create order
$order = new Order(1);

// contact information
$contact_info = new ContactInfoExt(3);

// company name
$contact_info->setCompanyName("Some Company");

// contact information
$contact_info->setCustomerName("John Doe");
$contact_info->setDept("IT");
$contact_info->setPhoneNumber1("9547854455");
$contact_info->setName("Johnathon Doe");
$contact_info->setEmailAddress1("john@doe.com");
$contact_info->setFax("9548884213");
$contact_info->setVendor("A Vendor");

// transaction information
$transaction = new TransactionInfoExt(new DateTime(), new DateTime(), new DateTime());
$transaction->setPONum("293473718734");
$transaction->setReferenceNum("ThisIsATest1234");

// address ext information
$address = new AddressExt();
$address->setAddress1("1233 Garden Rd.");
$address->setAddress2("");
$address->setCity("Weston");
$address->setState("Florida");
$address->setCountry("United States");
$address->setZip("33327");

// contact info set address
$contact_info->setAddress($address);
$order->setShipTo($contact_info);
$order->setNotes("Hello World, Testing from Fulfillment API plugin");
$order->setTransInfo($transaction);

// shipping instructions object
$shipping_instructions = new ShippingInstructions();

// all details
$shipping_instructions->setAccount("An Account");
$shipping_instructions->setBillingCode("6555-5554");
$shipping_instructions->setCarrier("A Carrier");
$shipping_instructions->setCarrierDesc("Carrier Description");
$shipping_instructions->setMode("Generic");
$shipping_instructions->setShipService("FedEx");
$shipping_instructions->setShippingNotes("Shipping Notes");
$shipping_instructions->setShipPointZip("33327");
$shipping_instructions->setSCACCode("2135");

// etc. information
$shipping_info = new ShipmentInfoExt(1, 1, 1.0, 1, 25.00, 23.00);
$fulfillment_info = new FulfillInvInfo(24.00, 26.88, 12.99);

// set shipping information
$order->setShippingInstructions($shipping_instructions);

// set shipment information
$order->setShipmentInfo($shipping_info);
$order->setShipTo($contact_info);

// order line item ( new up & instantiate )
$order_line_item = new OrderLineItem(1.00, 1.00, 2.00, new DateTime(), 29.99, 1.00, 1.00);
$order_line_item->setQty(2.00);
$order_line_item->setSKU("Test1");

// array of order line items
$order_line_items = new ArrayOfOrderLineItem();
$order_line_items->setOrderLineItem([$order_line_item]);

// set order line items to be order line items
$order->setOrderLineItems($order_line_items);

// new up & instantiate a new ArrayOfOrder object, and set the main order to the order above.
$aoOrders = new ArrayOfOrder();
$aoOrders->setOrder([$order]);

// let's echo out all functions.
try {

    // let's execute an order with the integrated soap client.
    echo "<pre>" . var_export($b->CreateOrders($external_login_infomation, $aoOrders), 1) . " </pre > ";

} catch (Exception $e) {
    error_log($e->getCode() . "-" . $e->getMessage() . "-" . $e->getTraceAsString());
}