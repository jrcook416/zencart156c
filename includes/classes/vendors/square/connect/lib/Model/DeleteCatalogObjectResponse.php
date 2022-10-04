<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * DeleteCatalogObjectResponse Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class DeleteCatalogObjectResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'errors' => '\SquareConnect\Model\Error[]',
        'deleted_object_ids' => 'string[]',
        'deleted_at' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'errors' => 'errors',
        'deleted_object_ids' => 'deleted_object_ids',
        'deleted_at' => 'deleted_at'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'errors' => 'setErrors',
        'deleted_object_ids' => 'setDeletedObjectIds',
        'deleted_at' => 'setDeletedAt'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'errors' => 'getErrors',
        'deleted_object_ids' => 'getDeletedObjectIds',
        'deleted_at' => 'getDeletedAt'
    );
  
    /**
      * $errors The set of [Error](#type-error)s encountered.
      * @var \SquareConnect\Model\Error[]
      */
    protected $errors;
    /**
      * $deleted_object_ids The IDs of all [CatalogObject](#type-catalogobject)s deleted by this request. Multiple IDs may be returned when associated objects are also deleted, for example a [CatalogItemVariation](#type-catalogitemvariation) will be deleted (and its ID included in this field) when its parent [CatalogItem](#type-catalogitem) is deleted.
      * @var string[]
      */
    protected $deleted_object_ids;
    /**
      * $deleted_at The database [timestamp](#workingwithdates) of this deletion in RFC 3339 format, e.g., \"2016-09-04T23:59:33.123Z\".
      * @var string
      */
    protected $deleted_at;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["errors"])) {
              $this->errors = $data["errors"];
            } else {
              $this->errors = null;
            }
            if (isset($data["deleted_object_ids"])) {
              $this->deleted_object_ids = $data["deleted_object_ids"];
            } else {
              $this->deleted_object_ids = null;
            }
            if (isset($data["deleted_at"])) {
              $this->deleted_at = $data["deleted_at"];
            } else {
              $this->deleted_at = null;
            }
        }
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
     * @param \SquareConnect\Model\Error[] $errors The set of [Error](#type-error)s encountered.
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;
        return $this;
    }
    /**
     * Gets deleted_object_ids
     * @return string[]
     */
    public function getDeletedObjectIds()
    {
        return $this->deleted_object_ids;
    }
  
    /**
     * Sets deleted_object_ids
     * @param string[] $deleted_object_ids The IDs of all [CatalogObject](#type-catalogobject)s deleted by this request. Multiple IDs may be returned when associated objects are also deleted, for example a [CatalogItemVariation](#type-catalogitemvariation) will be deleted (and its ID included in this field) when its parent [CatalogItem](#type-catalogitem) is deleted.
     * @return $this
     */
    public function setDeletedObjectIds($deleted_object_ids)
    {
        $this->deleted_object_ids = $deleted_object_ids;
        return $this;
    }
    /**
     * Gets deleted_at
     * @return string
     */
    public function getDeletedAt()
    {
        return $this->deleted_at;
    }
  
    /**
     * Sets deleted_at
     * @param string $deleted_at The database [timestamp](#workingwithdates) of this deletion in RFC 3339 format, e.g., \"2016-09-04T23:59:33.123Z\".
     * @return $this
     */
    public function setDeletedAt($deleted_at)
    {
        $this->deleted_at = $deleted_at;
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
