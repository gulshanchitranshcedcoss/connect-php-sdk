<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * CatalogTax Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://squareup.com/developers
 */
class CatalogTax implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'name' => 'string',
        'calculation_phase' => 'string',
        'inclusion_type' => 'string',
        'percentage' => 'string',
        'applies_to_custom_amounts' => 'bool',
        'enabled' => 'bool'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'name' => 'name',
        'calculation_phase' => 'calculation_phase',
        'inclusion_type' => 'inclusion_type',
        'percentage' => 'percentage',
        'applies_to_custom_amounts' => 'applies_to_custom_amounts',
        'enabled' => 'enabled'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'name' => 'setName',
        'calculation_phase' => 'setCalculationPhase',
        'inclusion_type' => 'setInclusionType',
        'percentage' => 'setPercentage',
        'applies_to_custom_amounts' => 'setAppliesToCustomAmounts',
        'enabled' => 'setEnabled'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'name' => 'getName',
        'calculation_phase' => 'getCalculationPhase',
        'inclusion_type' => 'getInclusionType',
        'percentage' => 'getPercentage',
        'applies_to_custom_amounts' => 'getAppliesToCustomAmounts',
        'enabled' => 'getEnabled'
    );
  
    /**
      * $name The tax's name. Searchable.
      * @var string
      */
    protected $name;
    /**
      * $calculation_phase Whether the tax is calculated based on a payment's subtotal or total. See [TaxCalculationPhase](#type-taxcalculationphase) for all possible values.
      * @var string
      */
    protected $calculation_phase;
    /**
      * $inclusion_type Whether the tax is `ADDITIVE` or `INCLUSIVE`. See [TaxInclusionType](#type-taxinclusiontype) for all possible values.
      * @var string
      */
    protected $inclusion_type;
    /**
      * $percentage The percentage of the tax in decimal form, using a `'.'` as the decimal separator and without a `'%'` sign. A value of `7.5` corresponds to 7.5%.
      * @var string
      */
    protected $percentage;
    /**
      * $applies_to_custom_amounts If `true`, the fee applies to custom amounts entered into the Square Point of Sale app that are not associated with a particular [CatalogItem](#type-catalogitem).
      * @var bool
      */
    protected $applies_to_custom_amounts;
    /**
      * $enabled If `true`, the tax will be shown as enabled in the Square Point of Sale app.
      * @var bool
      */
    protected $enabled;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["name"])) {
              $this->name = $data["name"];
            } else {
              $this->name = null;
            }
            if (isset($data["calculation_phase"])) {
              $this->calculation_phase = $data["calculation_phase"];
            } else {
              $this->calculation_phase = null;
            }
            if (isset($data["inclusion_type"])) {
              $this->inclusion_type = $data["inclusion_type"];
            } else {
              $this->inclusion_type = null;
            }
            if (isset($data["percentage"])) {
              $this->percentage = $data["percentage"];
            } else {
              $this->percentage = null;
            }
            if (isset($data["applies_to_custom_amounts"])) {
              $this->applies_to_custom_amounts = $data["applies_to_custom_amounts"];
            } else {
              $this->applies_to_custom_amounts = null;
            }
            if (isset($data["enabled"])) {
              $this->enabled = $data["enabled"];
            } else {
              $this->enabled = null;
            }
        }
    }
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name The tax's name. Searchable.
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Gets calculation_phase
     * @return string
     */
    public function getCalculationPhase()
    {
        return $this->calculation_phase;
    }
  
    /**
     * Sets calculation_phase
     * @param string $calculation_phase Whether the tax is calculated based on a payment's subtotal or total. See [TaxCalculationPhase](#type-taxcalculationphase) for all possible values.
     * @return $this
     */
    public function setCalculationPhase($calculation_phase)
    {
        $this->calculation_phase = $calculation_phase;
        return $this;
    }
    /**
     * Gets inclusion_type
     * @return string
     */
    public function getInclusionType()
    {
        return $this->inclusion_type;
    }
  
    /**
     * Sets inclusion_type
     * @param string $inclusion_type Whether the tax is `ADDITIVE` or `INCLUSIVE`. See [TaxInclusionType](#type-taxinclusiontype) for all possible values.
     * @return $this
     */
    public function setInclusionType($inclusion_type)
    {
        $this->inclusion_type = $inclusion_type;
        return $this;
    }
    /**
     * Gets percentage
     * @return string
     */
    public function getPercentage()
    {
        return $this->percentage;
    }
  
    /**
     * Sets percentage
     * @param string $percentage The percentage of the tax in decimal form, using a `'.'` as the decimal separator and without a `'%'` sign. A value of `7.5` corresponds to 7.5%.
     * @return $this
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;
        return $this;
    }
    /**
     * Gets applies_to_custom_amounts
     * @return bool
     */
    public function getAppliesToCustomAmounts()
    {
        return $this->applies_to_custom_amounts;
    }
  
    /**
     * Sets applies_to_custom_amounts
     * @param bool $applies_to_custom_amounts If `true`, the fee applies to custom amounts entered into the Square Point of Sale app that are not associated with a particular [CatalogItem](#type-catalogitem).
     * @return $this
     */
    public function setAppliesToCustomAmounts($applies_to_custom_amounts)
    {
        $this->applies_to_custom_amounts = $applies_to_custom_amounts;
        return $this;
    }
    /**
     * Gets enabled
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }
  
    /**
     * Sets enabled
     * @param bool $enabled If `true`, the tax will be shown as enabled in the Square Point of Sale app.
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
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
