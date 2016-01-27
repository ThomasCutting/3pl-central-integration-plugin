<?php

require 'autoload.php';
require 'classes/autoload.php';

/**
 * Class ThreeCentralAPI
 * --
 * This class acts as the connection between our interface and 3PL Central's API.
 */
class ThreeCentralAPI
{
    /**
     * @const API_URL
     */
    const API_URL = "https://secure-wms.com/webserviceexternal/contracts.asmx?wsdl";
    /**
     * @var $api_key
     * 3PL Central Api Key
     */
    public $api_key;

    /**
     * @var $api_id
     * 3PL Central Api Identifier number
     */
    public $api_id;

    /**
     * @var $api_login
     * 3PL Central Username/(General) Login
     */
    public $api_login;

    /**
     * @var $api_password
     * 3PL Central Password
     */
    public $api_password;

    /**
     * @var $api_customer_id
     * 3PL Central Customer Identifier Number
     */
    public $api_customer_id;

    /**
     * @var $api_facility_id
     * 3PL Central Facility Identifier Number
     */
    public $api_facility_id;

    /**
     * @var $client
     * SoapClient used to connect to our WSDL.
     */
    protected $client;

    /**
     * @var $extLoginData
     * External login data ( e.g. Username & Password )
     */
    protected $extLoginData;

    /**
     * Construct()
     * @return mixed
     */
    public function __construct($api_key, $api_id, $api_customer_id, $api_facility_id, $api_login, $api_password)
    {

        // Associate all object variables with constructor variables;
        $this->api_key = $api_key;
        $this->api_id = $api_id;
        $this->api_customer_id = $api_customer_id;
        $this->api_facility_id = $api_facility_id;

        // Generate a new external login information object
        $this->extLoginData = $this->buildExternalLoginData($api_key, $api_login, $api_password, $api_facility_id, $api_customer_id);

        // Generate a SoapClient
        $this->client = $this->buildSoapClient();
    }

    /**
     * GetClient()
     * @return SoapClient
     */
    public function getClient()
    {
        // return the soap client
        return $this->client;
    }

    public function getExtLoginData()
    {
        // return the external login data
        return $this->extLoginData;
    }

    private function buildSoapClient()
    {
        $objSoapClient = new SoapClient(
            $this::API_URL,
            [
                'ThreePLKey' => $this->api_key,
                'Login' => $this->api_login,
                'Password' => $this->api_password,
                'FacilityID' => $this->api_facility_id
            ]
        );

        // return the sufficient soap client with credentials in place.
        return $objSoapClient;
    }

    /**
     * Build External Login Data Method
     * @param $login
     * @param $password
     * @param $facility_id
     * @param $customer_id
     * @return mixed
     */
    private function buildExternalLoginData($api_key, $login, $password, $facility_id, $customer_id)
    {
        // Generate external login information object
        $ext_login_data = new ExternalLoginData($facility_id, $customer_id);

        // Set proper credentials
        $ext_login_data->setThreePLKey($api_key);
        $ext_login_data->setLogin($login);
        $ext_login_data->setPassword($password);

        // Return the completed external login information object
        return $ext_login_data;
    }

}