<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * InventoryPhysicalCount Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class InventoryPhysicalCount implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'reference_id' => 'string',
        'catalog_object_id' => 'string',
        'catalog_object_type' => 'string',
        'state' => 'string',
        'location_id' => 'string',
        'quantity' => 'string',
        'source' => '\SquareConnect\Model\SourceApplication',
        'employee_id' => 'string',
        'occurred_at' => 'string',
        'created_at' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'reference_id' => 'reference_id',
        'catalog_object_id' => 'catalog_object_id',
        'catalog_object_type' => 'catalog_object_type',
        'state' => 'state',
        'location_id' => 'location_id',
        'quantity' => 'quantity',
        'source' => 'source',
        'employee_id' => 'employee_id',
        'occurred_at' => 'occurred_at',
        'created_at' => 'created_at'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'reference_id' => 'setReferenceId',
        'catalog_object_id' => 'setCatalogObjectId',
        'catalog_object_type' => 'setCatalogObjectType',
        'state' => 'setState',
        'location_id' => 'setLocationId',
        'quantity' => 'setQuantity',
        'source' => 'setSource',
        'employee_id' => 'setEmployeeId',
        'occurred_at' => 'setOccurredAt',
        'created_at' => 'setCreatedAt'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'reference_id' => 'getReferenceId',
        'catalog_object_id' => 'getCatalogObjectId',
        'catalog_object_type' => 'getCatalogObjectType',
        'state' => 'getState',
        'location_id' => 'getLocationId',
        'quantity' => 'getQuantity',
        'source' => 'getSource',
        'employee_id' => 'getEmployeeId',
        'occurred_at' => 'getOccurredAt',
        'created_at' => 'getCreatedAt'
    );
  
    /**
      * $id A unique ID generated by Square for the [InventoryPhysicalCount](#type-inventoryphysicalcount).
      * @var string
      */
    protected $id;
    /**
      * $reference_id An optional ID provided by the application to tie the [InventoryPhysicalCount](#type-inventoryphysicalcount) to an external system.
      * @var string
      */
    protected $reference_id;
    /**
      * $catalog_object_id The Square generated ID of the [CatalogObject](#type-catalogobject) being tracked.
      * @var string
      */
    protected $catalog_object_id;
    /**
      * $catalog_object_type The [CatalogObjectType](#type-catalogobjecttype) of the [CatalogObject](#type-catalogobject) being tracked. Tracking is only supported for the `ITEM_VARIATION` type.
      * @var string
      */
    protected $catalog_object_type;
    /**
      * $state The current [InventoryState](#type-inventorystate) for the related quantity of items.
      * @var string
      */
    protected $state;
    /**
      * $location_id The Square ID of the [Location](#type-location) where the related quantity of items are being tracked.
      * @var string
      */
    protected $location_id;
    /**
      * $quantity The number of items affected by the physical count as a decimal string. Fractional quantities are not supported.
      * @var string
      */
    protected $quantity;
    /**
      * $source Read-only information about the application that submitted the physical count.
      * @var \SquareConnect\Model\SourceApplication
      */
    protected $source;
    /**
      * $employee_id The Square ID of the [Employee](#type-employee) responsible for the physical count.
      * @var string
      */
    protected $employee_id;
    /**
      * $occurred_at A client-generated timestamp in RFC 3339 format that indicates when the physical count took place. For write actions, the `occurred_at` timestamp cannot be older than 24 hours or in the future relative to the time of the request.
      * @var string
      */
    protected $occurred_at;
    /**
      * $created_at A read-only timestamp in RFC 3339 format that indicates when Square received the physical count.
      * @var string
      */
    protected $created_at;

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
            if (isset($data["reference_id"])) {
              $this->reference_id = $data["reference_id"];
            } else {
              $this->reference_id = null;
            }
            if (isset($data["catalog_object_id"])) {
              $this->catalog_object_id = $data["catalog_object_id"];
            } else {
              $this->catalog_object_id = null;
            }
            if (isset($data["catalog_object_type"])) {
              $this->catalog_object_type = $data["catalog_object_type"];
            } else {
              $this->catalog_object_type = null;
            }
            if (isset($data["state"])) {
              $this->state = $data["state"];
            } else {
              $this->state = null;
            }
            if (isset($data["location_id"])) {
              $this->location_id = $data["location_id"];
            } else {
              $this->location_id = null;
            }
            if (isset($data["quantity"])) {
              $this->quantity = $data["quantity"];
            } else {
              $this->quantity = null;
            }
            if (isset($data["source"])) {
              $this->source = $data["source"];
            } else {
              $this->source = null;
            }
            if (isset($data["employee_id"])) {
              $this->employee_id = $data["employee_id"];
            } else {
              $this->employee_id = null;
            }
            if (isset($data["occurred_at"])) {
              $this->occurred_at = $data["occurred_at"];
            } else {
              $this->occurred_at = null;
            }
            if (isset($data["created_at"])) {
              $this->created_at = $data["created_at"];
            } else {
              $this->created_at = null;
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
     * @param string $id A unique ID generated by Square for the [InventoryPhysicalCount](#type-inventoryphysicalcount).
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Gets reference_id
     * @return string
     */
    public function getReferenceId()
    {
        return $this->reference_id;
    }
  
    /**
     * Sets reference_id
     * @param string $reference_id An optional ID provided by the application to tie the [InventoryPhysicalCount](#type-inventoryphysicalcount) to an external system.
     * @return $this
     */
    public function setReferenceId($reference_id)
    {
        $this->reference_id = $reference_id;
        return $this;
    }
    /**
     * Gets catalog_object_id
     * @return string
     */
    public function getCatalogObjectId()
    {
        return $this->catalog_object_id;
    }
  
    /**
     * Sets catalog_object_id
     * @param string $catalog_object_id The Square generated ID of the [CatalogObject](#type-catalogobject) being tracked.
     * @return $this
     */
    public function setCatalogObjectId($catalog_object_id)
    {
        $this->catalog_object_id = $catalog_object_id;
        return $this;
    }
    /**
     * Gets catalog_object_type
     * @return string
     */
    public function getCatalogObjectType()
    {
        return $this->catalog_object_type;
    }
  
    /**
     * Sets catalog_object_type
     * @param string $catalog_object_type The [CatalogObjectType](#type-catalogobjecttype) of the [CatalogObject](#type-catalogobject) being tracked. Tracking is only supported for the `ITEM_VARIATION` type.
     * @return $this
     */
    public function setCatalogObjectType($catalog_object_type)
    {
        $this->catalog_object_type = $catalog_object_type;
        return $this;
    }
    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
  
    /**
     * Sets state
     * @param string $state The current [InventoryState](#type-inventorystate) for the related quantity of items.
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }
    /**
     * Gets location_id
     * @return string
     */
    public function getLocationId()
    {
        return $this->location_id;
    }
  
    /**
     * Sets location_id
     * @param string $location_id The Square ID of the [Location](#type-location) where the related quantity of items are being tracked.
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->location_id = $location_id;
        return $this;
    }
    /**
     * Gets quantity
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
  
    /**
     * Sets quantity
     * @param string $quantity The number of items affected by the physical count as a decimal string. Fractional quantities are not supported.
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Gets source
     * @return \SquareConnect\Model\SourceApplication
     */
    public function getSource()
    {
        return $this->source;
    }
  
    /**
     * Sets source
     * @param \SquareConnect\Model\SourceApplication $source Read-only information about the application that submitted the physical count.
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }
    /**
     * Gets employee_id
     * @return string
     */
    public function getEmployeeId()
    {
        return $this->employee_id;
    }
  
    /**
     * Sets employee_id
     * @param string $employee_id The Square ID of the [Employee](#type-employee) responsible for the physical count.
     * @return $this
     */
    public function setEmployeeId($employee_id)
    {
        $this->employee_id = $employee_id;
        return $this;
    }
    /**
     * Gets occurred_at
     * @return string
     */
    public function getOccurredAt()
    {
        return $this->occurred_at;
    }
  
    /**
     * Sets occurred_at
     * @param string $occurred_at A client-generated timestamp in RFC 3339 format that indicates when the physical count took place. For write actions, the `occurred_at` timestamp cannot be older than 24 hours or in the future relative to the time of the request.
     * @return $this
     */
    public function setOccurredAt($occurred_at)
    {
        $this->occurred_at = $occurred_at;
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
     * @param string $created_at A read-only timestamp in RFC 3339 format that indicates when Square received the physical count.
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
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
