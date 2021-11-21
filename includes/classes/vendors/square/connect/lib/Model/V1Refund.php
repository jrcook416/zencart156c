<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * V1Refund Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class V1Refund implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'type' => 'string',
        'reason' => 'string',
        'refunded_money' => '\SquareConnect\Model\V1Money',
        'refunded_processing_fee_money' => '\SquareConnect\Model\V1Money',
        'refunded_tax_money' => '\SquareConnect\Model\V1Money',
        'refunded_additive_tax_money' => '\SquareConnect\Model\V1Money',
        'refunded_additive_tax' => '\SquareConnect\Model\V1PaymentTax[]',
        'refunded_inclusive_tax_money' => '\SquareConnect\Model\V1Money',
        'refunded_inclusive_tax' => '\SquareConnect\Model\V1PaymentTax[]',
        'refunded_tip_money' => '\SquareConnect\Model\V1Money',
        'refunded_discount_money' => '\SquareConnect\Model\V1Money',
        'refunded_surcharge_money' => '\SquareConnect\Model\V1Money',
        'refunded_surcharges' => '\SquareConnect\Model\V1PaymentSurcharge[]',
        'created_at' => 'string',
        'processed_at' => 'string',
        'payment_id' => 'string',
        'merchant_id' => 'string',
        'is_exchange' => 'bool'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'type' => 'type',
        'reason' => 'reason',
        'refunded_money' => 'refunded_money',
        'refunded_processing_fee_money' => 'refunded_processing_fee_money',
        'refunded_tax_money' => 'refunded_tax_money',
        'refunded_additive_tax_money' => 'refunded_additive_tax_money',
        'refunded_additive_tax' => 'refunded_additive_tax',
        'refunded_inclusive_tax_money' => 'refunded_inclusive_tax_money',
        'refunded_inclusive_tax' => 'refunded_inclusive_tax',
        'refunded_tip_money' => 'refunded_tip_money',
        'refunded_discount_money' => 'refunded_discount_money',
        'refunded_surcharge_money' => 'refunded_surcharge_money',
        'refunded_surcharges' => 'refunded_surcharges',
        'created_at' => 'created_at',
        'processed_at' => 'processed_at',
        'payment_id' => 'payment_id',
        'merchant_id' => 'merchant_id',
        'is_exchange' => 'is_exchange'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'type' => 'setType',
        'reason' => 'setReason',
        'refunded_money' => 'setRefundedMoney',
        'refunded_processing_fee_money' => 'setRefundedProcessingFeeMoney',
        'refunded_tax_money' => 'setRefundedTaxMoney',
        'refunded_additive_tax_money' => 'setRefundedAdditiveTaxMoney',
        'refunded_additive_tax' => 'setRefundedAdditiveTax',
        'refunded_inclusive_tax_money' => 'setRefundedInclusiveTaxMoney',
        'refunded_inclusive_tax' => 'setRefundedInclusiveTax',
        'refunded_tip_money' => 'setRefundedTipMoney',
        'refunded_discount_money' => 'setRefundedDiscountMoney',
        'refunded_surcharge_money' => 'setRefundedSurchargeMoney',
        'refunded_surcharges' => 'setRefundedSurcharges',
        'created_at' => 'setCreatedAt',
        'processed_at' => 'setProcessedAt',
        'payment_id' => 'setPaymentId',
        'merchant_id' => 'setMerchantId',
        'is_exchange' => 'setIsExchange'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'type' => 'getType',
        'reason' => 'getReason',
        'refunded_money' => 'getRefundedMoney',
        'refunded_processing_fee_money' => 'getRefundedProcessingFeeMoney',
        'refunded_tax_money' => 'getRefundedTaxMoney',
        'refunded_additive_tax_money' => 'getRefundedAdditiveTaxMoney',
        'refunded_additive_tax' => 'getRefundedAdditiveTax',
        'refunded_inclusive_tax_money' => 'getRefundedInclusiveTaxMoney',
        'refunded_inclusive_tax' => 'getRefundedInclusiveTax',
        'refunded_tip_money' => 'getRefundedTipMoney',
        'refunded_discount_money' => 'getRefundedDiscountMoney',
        'refunded_surcharge_money' => 'getRefundedSurchargeMoney',
        'refunded_surcharges' => 'getRefundedSurcharges',
        'created_at' => 'getCreatedAt',
        'processed_at' => 'getProcessedAt',
        'payment_id' => 'getPaymentId',
        'merchant_id' => 'getMerchantId',
        'is_exchange' => 'getIsExchange'
    );
  
    /**
      * $type The type of refund
      * @var string
      */
    protected $type;
    /**
      * $reason The merchant-specified reason for the refund.
      * @var string
      */
    protected $reason;
    /**
      * $refunded_money The amount of money refunded. This amount is always negative.
      * @var \SquareConnect\Model\V1Money
      */
    protected $refunded_money;
    /**
      * $refunded_processing_fee_money The amount of processing fee money refunded. This amount is always positive.
      * @var \SquareConnect\Model\V1Money
      */
    protected $refunded_processing_fee_money;
    /**
      * $refunded_tax_money The total amount of tax money refunded. This amount is always negative.
      * @var \SquareConnect\Model\V1Money
      */
    protected $refunded_tax_money;
    /**
      * $refunded_additive_tax_money The amount of additive tax money refunded. This amount is always negative.
      * @var \SquareConnect\Model\V1Money
      */
    protected $refunded_additive_tax_money;
    /**
      * $refunded_additive_tax All of the additive taxes associated with the refund.
      * @var \SquareConnect\Model\V1PaymentTax[]
      */
    protected $refunded_additive_tax;
    /**
      * $refunded_inclusive_tax_money The amount of inclusive tax money refunded. This amount is always negative.
      * @var \SquareConnect\Model\V1Money
      */
    protected $refunded_inclusive_tax_money;
    /**
      * $refunded_inclusive_tax All of the inclusive taxes associated with the refund.
      * @var \SquareConnect\Model\V1PaymentTax[]
      */
    protected $refunded_inclusive_tax;
    /**
      * $refunded_tip_money The amount of tip money refunded. This amount is always negative.
      * @var \SquareConnect\Model\V1Money
      */
    protected $refunded_tip_money;
    /**
      * $refunded_discount_money The amount of discount money refunded. This amount is always positive.
      * @var \SquareConnect\Model\V1Money
      */
    protected $refunded_discount_money;
    /**
      * $refunded_surcharge_money The amount of surcharge money refunded. This amount is always negative.
      * @var \SquareConnect\Model\V1Money
      */
    protected $refunded_surcharge_money;
    /**
      * $refunded_surcharges A list of all surcharges associated with the refund.
      * @var \SquareConnect\Model\V1PaymentSurcharge[]
      */
    protected $refunded_surcharges;
    /**
      * $created_at The time when the merchant initiated the refund for Square to process, in ISO 8601 format.
      * @var string
      */
    protected $created_at;
    /**
      * $processed_at The time when Square processed the refund on behalf of the merchant, in ISO 8601 format.
      * @var string
      */
    protected $processed_at;
    /**
      * $payment_id A Square-issued ID associated with the refund. For single-tender refunds, payment_id is the ID of the original payment ID. For split-tender refunds, payment_id is the ID of the original tender. For exchange-based refunds (is_exchange == true), payment_id is the ID of the original payment ID even if the payment includes other tenders.
      * @var string
      */
    protected $payment_id;
    /**
      * $merchant_id 
      * @var string
      */
    protected $merchant_id;
    /**
      * $is_exchange Indicates whether or not the refund is associated with an exchange. If is_exchange is true, the refund reflects the value of goods returned in the exchange not the total money refunded.
      * @var bool
      */
    protected $is_exchange;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["type"])) {
              $this->type = $data["type"];
            } else {
              $this->type = null;
            }
            if (isset($data["reason"])) {
              $this->reason = $data["reason"];
            } else {
              $this->reason = null;
            }
            if (isset($data["refunded_money"])) {
              $this->refunded_money = $data["refunded_money"];
            } else {
              $this->refunded_money = null;
            }
            if (isset($data["refunded_processing_fee_money"])) {
              $this->refunded_processing_fee_money = $data["refunded_processing_fee_money"];
            } else {
              $this->refunded_processing_fee_money = null;
            }
            if (isset($data["refunded_tax_money"])) {
              $this->refunded_tax_money = $data["refunded_tax_money"];
            } else {
              $this->refunded_tax_money = null;
            }
            if (isset($data["refunded_additive_tax_money"])) {
              $this->refunded_additive_tax_money = $data["refunded_additive_tax_money"];
            } else {
              $this->refunded_additive_tax_money = null;
            }
            if (isset($data["refunded_additive_tax"])) {
              $this->refunded_additive_tax = $data["refunded_additive_tax"];
            } else {
              $this->refunded_additive_tax = null;
            }
            if (isset($data["refunded_inclusive_tax_money"])) {
              $this->refunded_inclusive_tax_money = $data["refunded_inclusive_tax_money"];
            } else {
              $this->refunded_inclusive_tax_money = null;
            }
            if (isset($data["refunded_inclusive_tax"])) {
              $this->refunded_inclusive_tax = $data["refunded_inclusive_tax"];
            } else {
              $this->refunded_inclusive_tax = null;
            }
            if (isset($data["refunded_tip_money"])) {
              $this->refunded_tip_money = $data["refunded_tip_money"];
            } else {
              $this->refunded_tip_money = null;
            }
            if (isset($data["refunded_discount_money"])) {
              $this->refunded_discount_money = $data["refunded_discount_money"];
            } else {
              $this->refunded_discount_money = null;
            }
            if (isset($data["refunded_surcharge_money"])) {
              $this->refunded_surcharge_money = $data["refunded_surcharge_money"];
            } else {
              $this->refunded_surcharge_money = null;
            }
            if (isset($data["refunded_surcharges"])) {
              $this->refunded_surcharges = $data["refunded_surcharges"];
            } else {
              $this->refunded_surcharges = null;
            }
            if (isset($data["created_at"])) {
              $this->created_at = $data["created_at"];
            } else {
              $this->created_at = null;
            }
            if (isset($data["processed_at"])) {
              $this->processed_at = $data["processed_at"];
            } else {
              $this->processed_at = null;
            }
            if (isset($data["payment_id"])) {
              $this->payment_id = $data["payment_id"];
            } else {
              $this->payment_id = null;
            }
            if (isset($data["merchant_id"])) {
              $this->merchant_id = $data["merchant_id"];
            } else {
              $this->merchant_id = null;
            }
            if (isset($data["is_exchange"])) {
              $this->is_exchange = $data["is_exchange"];
            } else {
              $this->is_exchange = null;
            }
        }
    }
    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
  
    /**
     * Sets type
     * @param string $type The type of refund
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Gets reason
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }
  
    /**
     * Sets reason
     * @param string $reason The merchant-specified reason for the refund.
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }
    /**
     * Gets refunded_money
     * @return \SquareConnect\Model\V1Money
     */
    public function getRefundedMoney()
    {
        return $this->refunded_money;
    }
  
    /**
     * Sets refunded_money
     * @param \SquareConnect\Model\V1Money $refunded_money The amount of money refunded. This amount is always negative.
     * @return $this
     */
    public function setRefundedMoney($refunded_money)
    {
        $this->refunded_money = $refunded_money;
        return $this;
    }
    /**
     * Gets refunded_processing_fee_money
     * @return \SquareConnect\Model\V1Money
     */
    public function getRefundedProcessingFeeMoney()
    {
        return $this->refunded_processing_fee_money;
    }
  
    /**
     * Sets refunded_processing_fee_money
     * @param \SquareConnect\Model\V1Money $refunded_processing_fee_money The amount of processing fee money refunded. This amount is always positive.
     * @return $this
     */
    public function setRefundedProcessingFeeMoney($refunded_processing_fee_money)
    {
        $this->refunded_processing_fee_money = $refunded_processing_fee_money;
        return $this;
    }
    /**
     * Gets refunded_tax_money
     * @return \SquareConnect\Model\V1Money
     */
    public function getRefundedTaxMoney()
    {
        return $this->refunded_tax_money;
    }
  
    /**
     * Sets refunded_tax_money
     * @param \SquareConnect\Model\V1Money $refunded_tax_money The total amount of tax money refunded. This amount is always negative.
     * @return $this
     */
    public function setRefundedTaxMoney($refunded_tax_money)
    {
        $this->refunded_tax_money = $refunded_tax_money;
        return $this;
    }
    /**
     * Gets refunded_additive_tax_money
     * @return \SquareConnect\Model\V1Money
     */
    public function getRefundedAdditiveTaxMoney()
    {
        return $this->refunded_additive_tax_money;
    }
  
    /**
     * Sets refunded_additive_tax_money
     * @param \SquareConnect\Model\V1Money $refunded_additive_tax_money The amount of additive tax money refunded. This amount is always negative.
     * @return $this
     */
    public function setRefundedAdditiveTaxMoney($refunded_additive_tax_money)
    {
        $this->refunded_additive_tax_money = $refunded_additive_tax_money;
        return $this;
    }
    /**
     * Gets refunded_additive_tax
     * @return \SquareConnect\Model\V1PaymentTax[]
     */
    public function getRefundedAdditiveTax()
    {
        return $this->refunded_additive_tax;
    }
  
    /**
     * Sets refunded_additive_tax
     * @param \SquareConnect\Model\V1PaymentTax[] $refunded_additive_tax All of the additive taxes associated with the refund.
     * @return $this
     */
    public function setRefundedAdditiveTax($refunded_additive_tax)
    {
        $this->refunded_additive_tax = $refunded_additive_tax;
        return $this;
    }
    /**
     * Gets refunded_inclusive_tax_money
     * @return \SquareConnect\Model\V1Money
     */
    public function getRefundedInclusiveTaxMoney()
    {
        return $this->refunded_inclusive_tax_money;
    }
  
    /**
     * Sets refunded_inclusive_tax_money
     * @param \SquareConnect\Model\V1Money $refunded_inclusive_tax_money The amount of inclusive tax money refunded. This amount is always negative.
     * @return $this
     */
    public function setRefundedInclusiveTaxMoney($refunded_inclusive_tax_money)
    {
        $this->refunded_inclusive_tax_money = $refunded_inclusive_tax_money;
        return $this;
    }
    /**
     * Gets refunded_inclusive_tax
     * @return \SquareConnect\Model\V1PaymentTax[]
     */
    public function getRefundedInclusiveTax()
    {
        return $this->refunded_inclusive_tax;
    }
  
    /**
     * Sets refunded_inclusive_tax
     * @param \SquareConnect\Model\V1PaymentTax[] $refunded_inclusive_tax All of the inclusive taxes associated with the refund.
     * @return $this
     */
    public function setRefundedInclusiveTax($refunded_inclusive_tax)
    {
        $this->refunded_inclusive_tax = $refunded_inclusive_tax;
        return $this;
    }
    /**
     * Gets refunded_tip_money
     * @return \SquareConnect\Model\V1Money
     */
    public function getRefundedTipMoney()
    {
        return $this->refunded_tip_money;
    }
  
    /**
     * Sets refunded_tip_money
     * @param \SquareConnect\Model\V1Money $refunded_tip_money The amount of tip money refunded. This amount is always negative.
     * @return $this
     */
    public function setRefundedTipMoney($refunded_tip_money)
    {
        $this->refunded_tip_money = $refunded_tip_money;
        return $this;
    }
    /**
     * Gets refunded_discount_money
     * @return \SquareConnect\Model\V1Money
     */
    public function getRefundedDiscountMoney()
    {
        return $this->refunded_discount_money;
    }
  
    /**
     * Sets refunded_discount_money
     * @param \SquareConnect\Model\V1Money $refunded_discount_money The amount of discount money refunded. This amount is always positive.
     * @return $this
     */
    public function setRefundedDiscountMoney($refunded_discount_money)
    {
        $this->refunded_discount_money = $refunded_discount_money;
        return $this;
    }
    /**
     * Gets refunded_surcharge_money
     * @return \SquareConnect\Model\V1Money
     */
    public function getRefundedSurchargeMoney()
    {
        return $this->refunded_surcharge_money;
    }
  
    /**
     * Sets refunded_surcharge_money
     * @param \SquareConnect\Model\V1Money $refunded_surcharge_money The amount of surcharge money refunded. This amount is always negative.
     * @return $this
     */
    public function setRefundedSurchargeMoney($refunded_surcharge_money)
    {
        $this->refunded_surcharge_money = $refunded_surcharge_money;
        return $this;
    }
    /**
     * Gets refunded_surcharges
     * @return \SquareConnect\Model\V1PaymentSurcharge[]
     */
    public function getRefundedSurcharges()
    {
        return $this->refunded_surcharges;
    }
  
    /**
     * Sets refunded_surcharges
     * @param \SquareConnect\Model\V1PaymentSurcharge[] $refunded_surcharges A list of all surcharges associated with the refund.
     * @return $this
     */
    public function setRefundedSurcharges($refunded_surcharges)
    {
        $this->refunded_surcharges = $refunded_surcharges;
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
     * @param string $created_at The time when the merchant initiated the refund for Square to process, in ISO 8601 format.
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }
    /**
     * Gets processed_at
     * @return string
     */
    public function getProcessedAt()
    {
        return $this->processed_at;
    }
  
    /**
     * Sets processed_at
     * @param string $processed_at The time when Square processed the refund on behalf of the merchant, in ISO 8601 format.
     * @return $this
     */
    public function setProcessedAt($processed_at)
    {
        $this->processed_at = $processed_at;
        return $this;
    }
    /**
     * Gets payment_id
     * @return string
     */
    public function getPaymentId()
    {
        return $this->payment_id;
    }
  
    /**
     * Sets payment_id
     * @param string $payment_id A Square-issued ID associated with the refund. For single-tender refunds, payment_id is the ID of the original payment ID. For split-tender refunds, payment_id is the ID of the original tender. For exchange-based refunds (is_exchange == true), payment_id is the ID of the original payment ID even if the payment includes other tenders.
     * @return $this
     */
    public function setPaymentId($payment_id)
    {
        $this->payment_id = $payment_id;
        return $this;
    }
    /**
     * Gets merchant_id
     * @return string
     */
    public function getMerchantId()
    {
        return $this->merchant_id;
    }
  
    /**
     * Sets merchant_id
     * @param string $merchant_id 
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->merchant_id = $merchant_id;
        return $this;
    }
    /**
     * Gets is_exchange
     * @return bool
     */
    public function getIsExchange()
    {
        return $this->is_exchange;
    }
  
    /**
     * Sets is_exchange
     * @param bool $is_exchange Indicates whether or not the refund is associated with an exchange. If is_exchange is true, the refund reflects the value of goods returned in the exchange not the total money refunded.
     * @return $this
     */
    public function setIsExchange($is_exchange)
    {
        $this->is_exchange = $is_exchange;
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
