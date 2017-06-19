<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * SearchCatalogObjectsRequest Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://squareup.com/developers
 */
class SearchCatalogObjectsRequest implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'cursor' => 'string',
        'object_types' => 'string[]',
        'include_deleted_objects' => 'bool',
        'include_related_objects' => 'bool',
        'begin_time' => 'string',
        'query' => '\SquareConnect\Model\CatalogQuery',
        'limit' => 'int'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'cursor' => 'cursor',
        'object_types' => 'object_types',
        'include_deleted_objects' => 'include_deleted_objects',
        'include_related_objects' => 'include_related_objects',
        'begin_time' => 'begin_time',
        'query' => 'query',
        'limit' => 'limit'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'cursor' => 'setCursor',
        'object_types' => 'setObjectTypes',
        'include_deleted_objects' => 'setIncludeDeletedObjects',
        'include_related_objects' => 'setIncludeRelatedObjects',
        'begin_time' => 'setBeginTime',
        'query' => 'setQuery',
        'limit' => 'setLimit'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'cursor' => 'getCursor',
        'object_types' => 'getObjectTypes',
        'include_deleted_objects' => 'getIncludeDeletedObjects',
        'include_related_objects' => 'getIncludeRelatedObjects',
        'begin_time' => 'getBeginTime',
        'query' => 'getQuery',
        'limit' => 'getLimit'
    );
  
    /**
      * $cursor The pagination cursor returned in the previous response. Leave unset for an initial request. See [Paginating results](#paginatingresults) for more information.
      * @var string
      */
    protected $cursor;
    /**
      * $object_types The desired set of object types to apper in the search results. The legal values are taken from the [CatalogObjectType](#type-catalogobjecttype) enumeration, namely `\"ITEM\"`, `\"ITEM_VARIATION\"`, `\"CATEGORY\"`, `\"DISCOUNT\"`, `\"TAX\"`, `\"MODIFIER\"`, or `\"MODIFIER_LIST\"`.
      * @var string[]
      */
    protected $object_types;
    /**
      * $include_deleted_objects If `true`, deleted objects will be included in the results. Deleted objects will have their `is_deleted` field set to `true`.
      * @var bool
      */
    protected $include_deleted_objects;
    /**
      * $include_related_objects If `true`, the response will include additional objects that are related to the requested object, as follows:  If a [CatalogItem](#type-catalogitem) is returned in the object field of the response, its associated [CatalogCategory](#type-catalogcategory), [CatalogTax](#type-catalogtax)es, and [CatalogModifierList](#type-catalogmodifierlist)s will be included in the `related_objects` field of the response.  If a [CatalogItemVariation](#type-catalogitemvariation) is returned in the object field of the response, its parent [CatalogItem](#type-catalogitem) will be included in the `related_objects` field of the response.
      * @var bool
      */
    protected $include_related_objects;
    /**
      * $begin_time Return only objects that have been modified after this [timestamp](#workingwithdates) (in RFC 3339 format, e.g., \"2016-09-04T23:59:33.123Z\"). The timestamp is exclusive - objects whose timestamp is equal to `begin_time` will not be included in the response.
      * @var string
      */
    protected $begin_time;
    /**
      * $query A query to be used to filter or sort the results. If no query is specified, the entire catalog will be returned.
      * @var \SquareConnect\Model\CatalogQuery
      */
    protected $query;
    /**
      * $limit A limit on the number of results to be returned in a single page. The limit is advisory - the implementation may return more or fewer results. If the supplied limit is negative, zero, or is higher than the maximum limit of 1,000, it will be ignored.
      * @var int
      */
    protected $limit;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["cursor"])) {
              $this->cursor = $data["cursor"];
            } else {
              $this->cursor = null;
            }
            if (isset($data["object_types"])) {
              $this->object_types = $data["object_types"];
            } else {
              $this->object_types = null;
            }
            if (isset($data["include_deleted_objects"])) {
              $this->include_deleted_objects = $data["include_deleted_objects"];
            } else {
              $this->include_deleted_objects = null;
            }
            if (isset($data["include_related_objects"])) {
              $this->include_related_objects = $data["include_related_objects"];
            } else {
              $this->include_related_objects = null;
            }
            if (isset($data["begin_time"])) {
              $this->begin_time = $data["begin_time"];
            } else {
              $this->begin_time = null;
            }
            if (isset($data["query"])) {
              $this->query = $data["query"];
            } else {
              $this->query = null;
            }
            if (isset($data["limit"])) {
              $this->limit = $data["limit"];
            } else {
              $this->limit = null;
            }
        }
    }
    /**
     * Gets cursor
     * @return string
     */
    public function getCursor()
    {
        return $this->cursor;
    }
  
    /**
     * Sets cursor
     * @param string $cursor The pagination cursor returned in the previous response. Leave unset for an initial request. See [Paginating results](#paginatingresults) for more information.
     * @return $this
     */
    public function setCursor($cursor)
    {
        $this->cursor = $cursor;
        return $this;
    }
    /**
     * Gets object_types
     * @return string[]
     */
    public function getObjectTypes()
    {
        return $this->object_types;
    }
  
    /**
     * Sets object_types
     * @param string[] $object_types The desired set of object types to apper in the search results. The legal values are taken from the [CatalogObjectType](#type-catalogobjecttype) enumeration, namely `\"ITEM\"`, `\"ITEM_VARIATION\"`, `\"CATEGORY\"`, `\"DISCOUNT\"`, `\"TAX\"`, `\"MODIFIER\"`, or `\"MODIFIER_LIST\"`.
     * @return $this
     */
    public function setObjectTypes($object_types)
    {
        $this->object_types = $object_types;
        return $this;
    }
    /**
     * Gets include_deleted_objects
     * @return bool
     */
    public function getIncludeDeletedObjects()
    {
        return $this->include_deleted_objects;
    }
  
    /**
     * Sets include_deleted_objects
     * @param bool $include_deleted_objects If `true`, deleted objects will be included in the results. Deleted objects will have their `is_deleted` field set to `true`.
     * @return $this
     */
    public function setIncludeDeletedObjects($include_deleted_objects)
    {
        $this->include_deleted_objects = $include_deleted_objects;
        return $this;
    }
    /**
     * Gets include_related_objects
     * @return bool
     */
    public function getIncludeRelatedObjects()
    {
        return $this->include_related_objects;
    }
  
    /**
     * Sets include_related_objects
     * @param bool $include_related_objects If `true`, the response will include additional objects that are related to the requested object, as follows:  If a [CatalogItem](#type-catalogitem) is returned in the object field of the response, its associated [CatalogCategory](#type-catalogcategory), [CatalogTax](#type-catalogtax)es, and [CatalogModifierList](#type-catalogmodifierlist)s will be included in the `related_objects` field of the response.  If a [CatalogItemVariation](#type-catalogitemvariation) is returned in the object field of the response, its parent [CatalogItem](#type-catalogitem) will be included in the `related_objects` field of the response.
     * @return $this
     */
    public function setIncludeRelatedObjects($include_related_objects)
    {
        $this->include_related_objects = $include_related_objects;
        return $this;
    }
    /**
     * Gets begin_time
     * @return string
     */
    public function getBeginTime()
    {
        return $this->begin_time;
    }
  
    /**
     * Sets begin_time
     * @param string $begin_time Return only objects that have been modified after this [timestamp](#workingwithdates) (in RFC 3339 format, e.g., \"2016-09-04T23:59:33.123Z\"). The timestamp is exclusive - objects whose timestamp is equal to `begin_time` will not be included in the response.
     * @return $this
     */
    public function setBeginTime($begin_time)
    {
        $this->begin_time = $begin_time;
        return $this;
    }
    /**
     * Gets query
     * @return \SquareConnect\Model\CatalogQuery
     */
    public function getQuery()
    {
        return $this->query;
    }
  
    /**
     * Sets query
     * @param \SquareConnect\Model\CatalogQuery $query A query to be used to filter or sort the results. If no query is specified, the entire catalog will be returned.
     * @return $this
     */
    public function setQuery($query)
    {
        $this->query = $query;
        return $this;
    }
    /**
     * Gets limit
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }
  
    /**
     * Sets limit
     * @param int $limit A limit on the number of results to be returned in a single page. The limit is advisory - the implementation may return more or fewer results. If the supplied limit is negative, zero, or is higher than the maximum limit of 1,000, it will be ignored.
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
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
