<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * BatchRetrieveOrdersResponse Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class BatchRetrieveOrdersResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'orders' => '\SquareConnect\Model\Order[]',
        'errors' => '\SquareConnect\Model\Error[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'orders' => 'orders',
        'errors' => 'errors'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'orders' => 'setOrders',
        'errors' => 'setErrors'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'orders' => 'getOrders',
        'errors' => 'getErrors'
    );
  
    /**
      * $orders The requested orders. This will omit any requested orders that do not exist or are not charged.
      * @var \SquareConnect\Model\Order[]
      */
    protected $orders;
    /**
      * $errors Any errors that occurred during the request.
      * @var \SquareConnect\Model\Error[]
      */
    protected $errors;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["orders"])) {
              $this->orders = $data["orders"];
            } else {
              $this->orders = null;
            }
            if (isset($data["errors"])) {
              $this->errors = $data["errors"];
            } else {
              $this->errors = null;
            }
        }
    }
    /**
     * Gets orders
     * @return \SquareConnect\Model\Order[]
     */
    public function getOrders()
    {
        return $this->orders;
    }
  
    /**
     * Sets orders
     * @param \SquareConnect\Model\Order[] $orders The requested orders. This will omit any requested orders that do not exist or are not charged.
     * @return $this
     */
    public function setOrders($orders)
    {
        $this->orders = $orders;
        return $this;
    }
    /**
     * Gets errors
     * @return \SquareConnect\Model\Error[]
     */
    public function getErrors()
    {
        return $this->errors;
    }
  
    /**
     * Sets errors
     * @param \SquareConnect\Model\Error[] $errors Any errors that occurred during the request.
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
