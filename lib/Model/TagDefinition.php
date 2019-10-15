<?php
/**
 * TagDefinition
 *
 * PHP version 5
 *
 * @category Class
 * @package  Killbill\Client\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kill Bill
 *
 * Kill Bill is an open-source billing and payments platform
 *
 * OpenAPI spec version: 0.20.13
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.12
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Killbill\Client\Swagger\Model;

use \ArrayAccess;
use \Killbill\Client\Swagger\ObjectSerializer;

/**
 * TagDefinition Class Doc Comment
 *
 * @category Class
 * @package  Killbill\Client\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TagDefinition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TagDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'isControlTag' => 'bool',
'name' => 'string',
'description' => 'string',
'applicableObjectTypes' => 'string[]',
'auditLogs' => '\Killbill\Client\Swagger\Model\AuditLog[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'isControlTag' => null,
'name' => null,
'description' => null,
'applicableObjectTypes' => null,
'auditLogs' => null    ];

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
        'id' => 'id',
'isControlTag' => 'isControlTag',
'name' => 'name',
'description' => 'description',
'applicableObjectTypes' => 'applicableObjectTypes',
'auditLogs' => 'auditLogs'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'isControlTag' => 'setIsControlTag',
'name' => 'setName',
'description' => 'setDescription',
'applicableObjectTypes' => 'setApplicableObjectTypes',
'auditLogs' => 'setAuditLogs'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'isControlTag' => 'getIsControlTag',
'name' => 'getName',
'description' => 'getDescription',
'applicableObjectTypes' => 'getApplicableObjectTypes',
'auditLogs' => 'getAuditLogs'    ];

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

    const APPLICABLE_OBJECT_TYPES_ACCOUNT = 'ACCOUNT';
const APPLICABLE_OBJECT_TYPES_ACCOUNT_EMAIL = 'ACCOUNT_EMAIL';
const APPLICABLE_OBJECT_TYPES_BLOCKING_STATES = 'BLOCKING_STATES';
const APPLICABLE_OBJECT_TYPES_BUNDLE = 'BUNDLE';
const APPLICABLE_OBJECT_TYPES_CUSTOM_FIELD = 'CUSTOM_FIELD';
const APPLICABLE_OBJECT_TYPES_INVOICE = 'INVOICE';
const APPLICABLE_OBJECT_TYPES_PAYMENT = 'PAYMENT';
const APPLICABLE_OBJECT_TYPES_TRANSACTION = 'TRANSACTION';
const APPLICABLE_OBJECT_TYPES_INVOICE_ITEM = 'INVOICE_ITEM';
const APPLICABLE_OBJECT_TYPES_INVOICE_PAYMENT = 'INVOICE_PAYMENT';
const APPLICABLE_OBJECT_TYPES_SUBSCRIPTION = 'SUBSCRIPTION';
const APPLICABLE_OBJECT_TYPES_SUBSCRIPTION_EVENT = 'SUBSCRIPTION_EVENT';
const APPLICABLE_OBJECT_TYPES_SERVICE_BROADCAST = 'SERVICE_BROADCAST';
const APPLICABLE_OBJECT_TYPES_PAYMENT_ATTEMPT = 'PAYMENT_ATTEMPT';
const APPLICABLE_OBJECT_TYPES_PAYMENT_METHOD = 'PAYMENT_METHOD';
const APPLICABLE_OBJECT_TYPES_TAG = 'TAG';
const APPLICABLE_OBJECT_TYPES_TAG_DEFINITION = 'TAG_DEFINITION';
const APPLICABLE_OBJECT_TYPES_TENANT = 'TENANT';
const APPLICABLE_OBJECT_TYPES_TENANT_KVS = 'TENANT_KVS';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getApplicableObjectTypesAllowableValues()
    {
        return [
            self::APPLICABLE_OBJECT_TYPES_ACCOUNT,
self::APPLICABLE_OBJECT_TYPES_ACCOUNT_EMAIL,
self::APPLICABLE_OBJECT_TYPES_BLOCKING_STATES,
self::APPLICABLE_OBJECT_TYPES_BUNDLE,
self::APPLICABLE_OBJECT_TYPES_CUSTOM_FIELD,
self::APPLICABLE_OBJECT_TYPES_INVOICE,
self::APPLICABLE_OBJECT_TYPES_PAYMENT,
self::APPLICABLE_OBJECT_TYPES_TRANSACTION,
self::APPLICABLE_OBJECT_TYPES_INVOICE_ITEM,
self::APPLICABLE_OBJECT_TYPES_INVOICE_PAYMENT,
self::APPLICABLE_OBJECT_TYPES_SUBSCRIPTION,
self::APPLICABLE_OBJECT_TYPES_SUBSCRIPTION_EVENT,
self::APPLICABLE_OBJECT_TYPES_SERVICE_BROADCAST,
self::APPLICABLE_OBJECT_TYPES_PAYMENT_ATTEMPT,
self::APPLICABLE_OBJECT_TYPES_PAYMENT_METHOD,
self::APPLICABLE_OBJECT_TYPES_TAG,
self::APPLICABLE_OBJECT_TYPES_TAG_DEFINITION,
self::APPLICABLE_OBJECT_TYPES_TENANT,
self::APPLICABLE_OBJECT_TYPES_TENANT_KVS,        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isControlTag'] = isset($data['isControlTag']) ? $data['isControlTag'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['applicableObjectTypes'] = isset($data['applicableObjectTypes']) ? $data['applicableObjectTypes'] : null;
        $this->container['auditLogs'] = isset($data['auditLogs']) ? $data['auditLogs'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets isControlTag
     *
     * @return bool
     */
    public function getIsControlTag()
    {
        return $this->container['isControlTag'];
    }

    /**
     * Sets isControlTag
     *
     * @param bool $isControlTag isControlTag
     *
     * @return $this
     */
    public function setIsControlTag($isControlTag)
    {
        $this->container['isControlTag'] = $isControlTag;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets applicableObjectTypes
     *
     * @return string[]
     */
    public function getApplicableObjectTypes()
    {
        return $this->container['applicableObjectTypes'];
    }

    /**
     * Sets applicableObjectTypes
     *
     * @param string[] $applicableObjectTypes applicableObjectTypes
     *
     * @return $this
     */
    public function setApplicableObjectTypes($applicableObjectTypes)
    {
        $allowedValues = $this->getApplicableObjectTypesAllowableValues();
        if (!is_null($applicableObjectTypes) && array_diff($applicableObjectTypes, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'applicableObjectTypes', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['applicableObjectTypes'] = $applicableObjectTypes;

        return $this;
    }

    /**
     * Gets auditLogs
     *
     * @return \Killbill\Client\Swagger\Model\AuditLog[]
     */
    public function getAuditLogs()
    {
        return $this->container['auditLogs'];
    }

    /**
     * Sets auditLogs
     *
     * @param \Killbill\Client\Swagger\Model\AuditLog[] $auditLogs auditLogs
     *
     * @return $this
     */
    public function setAuditLogs($auditLogs)
    {
        $this->container['auditLogs'] = $auditLogs;

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
