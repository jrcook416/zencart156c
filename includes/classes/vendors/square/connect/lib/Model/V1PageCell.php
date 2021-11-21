<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * V1PageCell Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class V1PageCell implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'page_id' => 'string',
        'row' => 'int',
        'column' => 'int',
        'object_type' => 'string',
        'object_id' => 'string',
        'placeholder_type' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'page_id' => 'page_id',
        'row' => 'row',
        'column' => 'column',
        'object_type' => 'object_type',
        'object_id' => 'object_id',
        'placeholder_type' => 'placeholder_type'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'page_id' => 'setPageId',
        'row' => 'setRow',
        'column' => 'setColumn',
        'object_type' => 'setObjectType',
        'object_id' => 'setObjectId',
        'placeholder_type' => 'setPlaceholderType'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'page_id' => 'getPageId',
        'row' => 'getRow',
        'column' => 'getColumn',
        'object_type' => 'getObjectType',
        'object_id' => 'getObjectId',
        'placeholder_type' => 'getPlaceholderType'
    );
  
    /**
      * $page_id The unique identifier of the page the cell is included on.
      * @var string
      */
    protected $page_id;
    /**
      * $row The row of the cell. Always an integer between 0 and 4, inclusive.
      * @var int
      */
    protected $row;
    /**
      * $column The column of the cell. Always an integer between 0 and 4, inclusive.
      * @var int
      */
    protected $column;
    /**
      * $object_type The type of entity represented in the cell (ITEM, DISCOUNT, CATEGORY, or PLACEHOLDER).
      * @var string
      */
    protected $object_type;
    /**
      * $object_id The unique identifier of the entity represented in the cell. Not present for cells with an object_type of PLACEHOLDER.
      * @var string
      */
    protected $object_id;
    /**
      * $placeholder_type For a cell with an object_type of PLACEHOLDER, this value indicates the cell's special behavior.
      * @var string
      */
    protected $placeholder_type;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["page_id"])) {
              $this->page_id = $data["page_id"];
            } else {
              $this->page_id = null;
            }
            if (isset($data["row"])) {
              $this->row = $data["row"];
            } else {
              $this->row = null;
            }
            if (isset($data["column"])) {
              $this->column = $data["column"];
            } else {
              $this->column = null;
            }
            if (isset($data["object_type"])) {
              $this->object_type = $data["object_type"];
            } else {
              $this->object_type = null;
            }
            if (isset($data["object_id"])) {
              $this->object_id = $data["object_id"];
            } else {
              $this->object_id = null;
            }
            if (isset($data["placeholder_type"])) {
              $this->placeholder_type = $data["placeholder_type"];
            } else {
              $this->placeholder_type = null;
            }
        }
    }
    /**
     * Gets page_id
     * @return string
     */
    public function getPageId()
    {
        return $this->page_id;
    }
  
    /**
     * Sets page_id
     * @param string $page_id The unique identifier of the page the cell is included on.
     * @return $this
     */
    public function setPageId($page_id)
    {
        $this->page_id = $page_id;
        return $this;
    }
    /**
     * Gets row
     * @return int
     */
    public function getRow()
    {
        return $this->row;
    }
  
    /**
     * Sets row
     * @param int $row The row of the cell. Always an integer between 0 and 4, inclusive.
     * @return $this
     */
    public function setRow($row)
    {
        $this->row = $row;
        return $this;
    }
    /**
     * Gets column
     * @return int
     */
    public function getColumn()
    {
        return $this->column;
    }
  
    /**
     * Sets column
     * @param int $column The column of the cell. Always an integer between 0 and 4, inclusive.
     * @return $this
     */
    public function setColumn($column)
    {
        $this->column = $column;
        return $this;
    }
    /**
     * Gets object_type
     * @return string
     */
    public function getObjectType()
    {
        return $this->object_type;
    }
  
    /**
     * Sets object_type
     * @param string $object_type The type of entity represented in the cell (ITEM, DISCOUNT, CATEGORY, or PLACEHOLDER).
     * @return $this
     */
    public function setObjectType($object_type)
    {
        $this->object_type = $object_type;
        return $this;
    }
    /**
     * Gets object_id
     * @return string
     */
    public function getObjectId()
    {
        return $this->object_id;
    }
  
    /**
     * Sets object_id
     * @param string $object_id The unique identifier of the entity represented in the cell. Not present for cells with an object_type of PLACEHOLDER.
     * @return $this
     */
    public function setObjectId($object_id)
    {
        $this->object_id = $object_id;
        return $this;
    }
    /**
     * Gets placeholder_type
     * @return string
     */
    public function getPlaceholderType()
    {
        return $this->placeholder_type;
    }
  
    /**
     * Sets placeholder_type
     * @param string $placeholder_type For a cell with an object_type of PLACEHOLDER, this value indicates the cell's special behavior.
     * @return $this
     */
    public function setPlaceholderType($placeholder_type)
    {
        $this->placeholder_type = $placeholder_type;
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
