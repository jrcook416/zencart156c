<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * AdditionalRecipientReceivable Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class AdditionalRecipientReceivable implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'transaction_id' => 'string',
        'transaction_location_id' => 'string',
        'amount_money' => '\SquareConnect\Model\Money',
        'created_at' => 'string',
        'refunds' => '\SquareConnect\Model\AdditionalRecipientReceivableRefund[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'transaction_id' => 'transaction_id',
        'transaction_location_id' => 'transaction_location_id',
        'amount_money' => 'amount_money',
        'created_at' => 'created_at',
        'refunds' => 'refunds'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'transaction_id' => 'setTransactionId',
        'transaction_location_id' => 'setTransactionLocationId',
        'amount_money' => 'setAmountMoney',
        'created_at' => 'setCreatedAt',
        'refunds' => 'setRefunds'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'transaction_id' => 'getTransactionId',
        'transaction_location_id' => 'getTransactionLocationId',
        'amount_money' => 'getAmountMoney',
        'created_at' => 'getCreatedAt',
        'refunds' => 'getRefunds'
    );
  
    /**
      * $id The additional recipient receivable's unique ID, issued by Square payments servers.
      * @var string
      */
    protected $id;
    /**
      * $transaction_id The ID of the transaction that the additional recipient receivable was applied to.
      * @var string
      */
    protected $transaction_id;
    /**
      * $transaction_location_id The ID of the location that created the receivable. This is the location ID on the associated transaction.
      * @var string
      */
    protected $transaction_location_id;
    /**
      * $amount_money The amount of the receivable. This will always be non-negative.
      * @var \SquareConnect\Model\Money
      */
    protected $amount_money;
    /**
      * $created_at The time when the additional recipient receivable was created, in RFC 3339 format.
      * @var string
      */
    protected $created_at;
    /**
      * $refunds Any refunds of the receivable that have been applied.
      * @var \SquareConnect\Model\AdditionalRecipientReceivableRefund[]
      */
    protected $refunds;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["id"])) {
              $this->id = $data["id"];
            } else {
              $this->id = null;
            }
            if (isset($data["transaction_id"])) {
              $this->transaction_id = $data["transaction_id"];
            } else {
              $this->transaction_id = null;
            }
            if (isset($data["transaction_location_id"])) {
              $this->transaction_location_id = $data["transaction_location_id"];
            } else {
              $this->transaction_location_id = null;
            }
            if (isset($data["amount_money"])) {
              $this->amount_money = $data["amount_money"];
            } else {
              $this->amount_money = null;
            }
            if (isset($data["created_at"])) {
              $this->created_at = $data["created_at"];
            } else {
              $this->created_at = null;
            }
            if (isset($data["refunds"])) {
              $this->refunds = $data["refunds"];
            } else {
              $this->refunds = null;
            }
        }
    }
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id The additional recipient receivable's unique ID, issued by Square payments servers.
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Gets transaction_id
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transaction_id;
    }
  
    /**
     * Sets transaction_id
     * @param string $transaction_id The ID of the transaction that the additional recipient receivable was applied to.
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        $this->transaction_id = $transaction_id;
        return $this;
    }
    /**
     * Gets transaction_location_id
     * @return string
     */
    public function getTransactionLocationId()
    {
        return $this->transaction_location_id;
    }
  
    /**
     * Sets transaction_location_id
     * @param string $transaction_location_id The ID of the location that created the receivable. This is the location ID on the associated transaction.
     * @return $this
     */
    public function setTransactionLocationId($transaction_location_id)
    {
        $this->transaction_location_id = $transaction_location_id;
        return $this;
    }
    /**
     * Gets amount_money
     * @return \SquareConnect\Model\Money
     */
    public function getAmountMoney()
    {
        return $this->amount_money;
    }
  
    /**
     * Sets amount_money
     * @param \SquareConnect\Model\Money $amount_money The amount of the receivable. This will always be non-negative.
     * @return $this
     */
    public function setAmountMoney($amount_money)
    {
        $this->amount_money = $amount_money;
        return $this;
    }
    /**
     * Gets created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
  
    /**
     * Sets created_at
     * @param string $created_at The time when the additional recipient receivable was created, in RFC 3339 format.
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }
    /**
     * Gets refunds
     * @return \SquareConnect\Model\AdditionalRecipientReceivableRefund[]
     */
    public function getRefunds()
    {
        return $this->refunds;
    }
  
    /**
     * Sets refunds
     * @param \SquareConnect\Model\AdditionalRecipientReceivableRefund[] $refunds Any refunds of the receivable that have been applied.
     * @return $this
     */
    public function setRefunds($refunds)
    {
        $this->refunds = $refunds;
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
