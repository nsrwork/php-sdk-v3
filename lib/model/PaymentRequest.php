<?php

/**
 * PHP SDK for Cardpay API v3. All rights reserved.
 */

namespace Cardpay\model;

use \ArrayAccess;
use \Cardpay\ObjectSerializer;

class PaymentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'request' => '\Cardpay\model\Request',
        'card_account' => '\Cardpay\model\PaymentRequestCardAccount',
        'cryptocurrency_account' => '\Cardpay\model\PaymentRequestCryptocurrencyAccount',
        'customer' => '\Cardpay\model\PaymentRequestCustomer',
        'ewallet_account' => '\Cardpay\model\PaymentRequestEWalletAccount',
        'merchant_order' => '\Cardpay\model\PaymentRequestMerchantOrder',
        'payment_data' => '\Cardpay\model\PaymentRequestPaymentData',
        'payment_method' => 'string',
        'return_urls' => '\Cardpay\model\ReturnUrls'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'request' => null,
        'card_account' => null,
        'cryptocurrency_account' => null,
        'customer' => null,
        'ewallet_account' => null,
        'merchant_order' => null,
        'payment_data' => null,
        'payment_method' => null,
        'return_urls' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'request' => 'request',
        'card_account' => 'card_account',
        'cryptocurrency_account' => 'cryptocurrency_account',
        'customer' => 'customer',
        'ewallet_account' => 'ewallet_account',
        'merchant_order' => 'merchant_order',
        'payment_data' => 'payment_data',
        'payment_method' => 'payment_method',
        'return_urls' => 'return_urls'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'request' => 'setRequest',
        'card_account' => 'setCardAccount',
        'cryptocurrency_account' => 'setCryptocurrencyAccount',
        'customer' => 'setCustomer',
        'ewallet_account' => 'setEwalletAccount',
        'merchant_order' => 'setMerchantOrder',
        'payment_data' => 'setPaymentData',
        'payment_method' => 'setPaymentMethod',
        'return_urls' => 'setReturnUrls'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'request' => 'getRequest',
        'card_account' => 'getCardAccount',
        'cryptocurrency_account' => 'getCryptocurrencyAccount',
        'customer' => 'getCustomer',
        'ewallet_account' => 'getEwalletAccount',
        'merchant_order' => 'getMerchantOrder',
        'payment_data' => 'getPaymentData',
        'payment_method' => 'getPaymentMethod',
        'return_urls' => 'getReturnUrls'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['request'] = isset($data['request']) ? $data['request'] : null;
        $this->container['card_account'] = isset($data['card_account']) ? $data['card_account'] : null;
        $this->container['cryptocurrency_account'] = isset($data['cryptocurrency_account']) ? $data['cryptocurrency_account'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['ewallet_account'] = isset($data['ewallet_account']) ? $data['ewallet_account'] : null;
        $this->container['merchant_order'] = isset($data['merchant_order']) ? $data['merchant_order'] : null;
        $this->container['payment_data'] = isset($data['payment_data']) ? $data['payment_data'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['return_urls'] = isset($data['return_urls']) ? $data['return_urls'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['request'] === null) {
            $invalidProperties[] = "'request' can't be null";
        }
        if ($this->container['card_account'] === null) {
            $invalidProperties[] = "'card_account' can't be null";
        }
        if ($this->container['customer'] === null) {
            $invalidProperties[] = "'customer' can't be null";
        }
        if ($this->container['merchant_order'] === null) {
            $invalidProperties[] = "'merchant_order' can't be null";
        }
        if ($this->container['payment_data'] === null) {
            $invalidProperties[] = "'payment_data' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets request
     *
     * @return \Cardpay\model\Request
     */
    public function getRequest()
    {
        return $this->container['request'];
    }

    /**
     * Sets request
     *
     * @param \Cardpay\model\Request $request Request
     *
     * @return $this
     */
    public function setRequest($request)
    {
        $this->container['request'] = $request;

        return $this;
    }

    /**
     * Gets card_account
     *
     * @return \Cardpay\model\PaymentRequestCardAccount
     */
    public function getCardAccount()
    {
        return $this->container['card_account'];
    }

    /**
     * Sets card_account
     *
     * @param \Cardpay\model\PaymentRequestCardAccount $card_account Information about card *(for BANKCARD payment method only)*
     *
     * @return $this
     */
    public function setCardAccount($card_account)
    {
        $this->container['card_account'] = $card_account;

        return $this;
    }

    /**
     * Gets cryptocurrency_account
     *
     * @return \Cardpay\model\PaymentRequestCryptocurrencyAccount
     */
    public function getCryptocurrencyAccount()
    {
        return $this->container['cryptocurrency_account'];
    }

    /**
     * Sets cryptocurrency_account
     *
     * @param \Cardpay\model\PaymentRequestCryptocurrencyAccount $cryptocurrency_account Cryptocurrency data *(for BITCOIN payment method only)*
     *
     * @return $this
     */
    public function setCryptocurrencyAccount($cryptocurrency_account)
    {
        $this->container['cryptocurrency_account'] = $cryptocurrency_account;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \Cardpay\model\PaymentRequestCustomer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Cardpay\model\PaymentRequestCustomer $customer Customer data
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets ewallet_account
     *
     * @return \Cardpay\model\PaymentRequestEWalletAccount
     */
    public function getEwalletAccount()
    {
        return $this->container['ewallet_account'];
    }

    /**
     * Sets ewallet_account
     *
     * @param \Cardpay\model\PaymentRequestEWalletAccount $ewallet_account eWallet account data
     *
     * @return $this
     */
    public function setEwalletAccount($ewallet_account)
    {
        $this->container['ewallet_account'] = $ewallet_account;

        return $this;
    }

    /**
     * Gets merchant_order
     *
     * @return \Cardpay\model\PaymentRequestMerchantOrder
     */
    public function getMerchantOrder()
    {
        return $this->container['merchant_order'];
    }

    /**
     * Sets merchant_order
     *
     * @param \Cardpay\model\PaymentRequestMerchantOrder $merchant_order Merchant order data
     *
     * @return $this
     */
    public function setMerchantOrder($merchant_order)
    {
        $this->container['merchant_order'] = $merchant_order;

        return $this;
    }

    /**
     * Gets payment_data
     *
     * @return \Cardpay\model\PaymentRequestPaymentData
     */
    public function getPaymentData()
    {
        return $this->container['payment_data'];
    }

    /**
     * Sets payment_data
     *
     * @param \Cardpay\model\PaymentRequestPaymentData $payment_data Payment data
     *
     * @return $this
     */
    public function setPaymentData($payment_data)
    {
        $this->container['payment_data'] = $payment_data;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string $payment_method Used payment method type name from payment methods list
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets return_urls
     *
     * @return \Cardpay\model\ReturnUrls
     */
    public function getReturnUrls()
    {
        return $this->container['return_urls'];
    }

    /**
     * Sets return_urls
     *
     * @param \Cardpay\model\ReturnUrls $return_urls Return URLs are the URLs where Customer returns by pressing 'Back to the shop' or 'Cancel' button in Payment page mode and redirected automatically in Gateway mode
     *
     * @return $this
     */
    public function setReturnUrls($return_urls)
    {
        $this->container['return_urls'] = $return_urls;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

