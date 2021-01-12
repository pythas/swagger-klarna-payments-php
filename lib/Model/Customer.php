<?php
/**
 * Customer
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Klarna Payments API V1
 *
 * API spec
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.7
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Customer Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Customer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'customer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date_of_birth' => 'string',
        'gender' => 'string',
        'last_four_ssn' => 'string',
        'national_identification_number' => 'string',
        'organization_entity_type' => 'string',
        'organization_registration_id' => 'string',
        'title' => 'string',
        'type' => 'string',
        'vat_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date_of_birth' => null,
        'gender' => null,
        'last_four_ssn' => null,
        'national_identification_number' => null,
        'organization_entity_type' => null,
        'organization_registration_id' => null,
        'title' => null,
        'type' => null,
        'vat_id' => null
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
        'date_of_birth' => 'date_of_birth',
        'gender' => 'gender',
        'last_four_ssn' => 'last_four_ssn',
        'national_identification_number' => 'national_identification_number',
        'organization_entity_type' => 'organization_entity_type',
        'organization_registration_id' => 'organization_registration_id',
        'title' => 'title',
        'type' => 'type',
        'vat_id' => 'vat_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_of_birth' => 'setDateOfBirth',
        'gender' => 'setGender',
        'last_four_ssn' => 'setLastFourSsn',
        'national_identification_number' => 'setNationalIdentificationNumber',
        'organization_entity_type' => 'setOrganizationEntityType',
        'organization_registration_id' => 'setOrganizationRegistrationId',
        'title' => 'setTitle',
        'type' => 'setType',
        'vat_id' => 'setVatId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_of_birth' => 'getDateOfBirth',
        'gender' => 'getGender',
        'last_four_ssn' => 'getLastFourSsn',
        'national_identification_number' => 'getNationalIdentificationNumber',
        'organization_entity_type' => 'getOrganizationEntityType',
        'organization_registration_id' => 'getOrganizationRegistrationId',
        'title' => 'getTitle',
        'type' => 'getType',
        'vat_id' => 'getVatId'
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

    const ORGANIZATION_ENTITY_TYPE_LIMITED_COMPANY = 'LIMITED_COMPANY';
    const ORGANIZATION_ENTITY_TYPE_PUBLIC_LIMITED_COMPANY = 'PUBLIC_LIMITED_COMPANY';
    const ORGANIZATION_ENTITY_TYPE_ENTREPRENEURIAL_COMPANY = 'ENTREPRENEURIAL_COMPANY';
    const ORGANIZATION_ENTITY_TYPE_LIMITED_PARTNERSHIP_LIMITED_COMPANY = 'LIMITED_PARTNERSHIP_LIMITED_COMPANY';
    const ORGANIZATION_ENTITY_TYPE_LIMITED_PARTNERSHIP = 'LIMITED_PARTNERSHIP';
    const ORGANIZATION_ENTITY_TYPE_GENERAL_PARTNERSHIP = 'GENERAL_PARTNERSHIP';
    const ORGANIZATION_ENTITY_TYPE_REGISTERED_SOLE_TRADER = 'REGISTERED_SOLE_TRADER';
    const ORGANIZATION_ENTITY_TYPE_SOLE_TRADER = 'SOLE_TRADER';
    const ORGANIZATION_ENTITY_TYPE_CIVIL_LAW_PARTNERSHIP = 'CIVIL_LAW_PARTNERSHIP';
    const ORGANIZATION_ENTITY_TYPE_PUBLIC_INSTITUTION = 'PUBLIC_INSTITUTION';
    const ORGANIZATION_ENTITY_TYPE_OTHER = 'OTHER';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrganizationEntityTypeAllowableValues()
    {
        return [
            self::ORGANIZATION_ENTITY_TYPE_LIMITED_COMPANY,
            self::ORGANIZATION_ENTITY_TYPE_PUBLIC_LIMITED_COMPANY,
            self::ORGANIZATION_ENTITY_TYPE_ENTREPRENEURIAL_COMPANY,
            self::ORGANIZATION_ENTITY_TYPE_LIMITED_PARTNERSHIP_LIMITED_COMPANY,
            self::ORGANIZATION_ENTITY_TYPE_LIMITED_PARTNERSHIP,
            self::ORGANIZATION_ENTITY_TYPE_GENERAL_PARTNERSHIP,
            self::ORGANIZATION_ENTITY_TYPE_REGISTERED_SOLE_TRADER,
            self::ORGANIZATION_ENTITY_TYPE_SOLE_TRADER,
            self::ORGANIZATION_ENTITY_TYPE_CIVIL_LAW_PARTNERSHIP,
            self::ORGANIZATION_ENTITY_TYPE_PUBLIC_INSTITUTION,
            self::ORGANIZATION_ENTITY_TYPE_OTHER,
        ];
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
        $this->container['date_of_birth'] = isset($data['date_of_birth']) ? $data['date_of_birth'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['last_four_ssn'] = isset($data['last_four_ssn']) ? $data['last_four_ssn'] : null;
        $this->container['national_identification_number'] = isset($data['national_identification_number']) ? $data['national_identification_number'] : null;
        $this->container['organization_entity_type'] = isset($data['organization_entity_type']) ? $data['organization_entity_type'] : null;
        $this->container['organization_registration_id'] = isset($data['organization_registration_id']) ? $data['organization_registration_id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['vat_id'] = isset($data['vat_id']) ? $data['vat_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['last_four_ssn']) && !preg_match("/^([0-9]{4}|[0-9]{9})$/", $this->container['last_four_ssn'])) {
            $invalidProperties[] = "invalid value for 'last_four_ssn', must be conform to the pattern /^([0-9]{4}|[0-9]{9})$/.";
        }

        $allowedValues = $this->getOrganizationEntityTypeAllowableValues();
        if (!is_null($this->container['organization_entity_type']) && !in_array($this->container['organization_entity_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'organization_entity_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets date_of_birth
     *
     * @return string
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param string $date_of_birth Customer’s date of birth. The format is ‘yyyy-mm-dd’
     *
     * @return $this
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->container['date_of_birth'] = $date_of_birth;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string $gender Customer’s gender - ‘male’ or ‘female’
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets last_four_ssn
     *
     * @return string
     */
    public function getLastFourSsn()
    {
        return $this->container['last_four_ssn'];
    }

    /**
     * Sets last_four_ssn
     *
     * @param string $last_four_ssn Last four digits of the customer's social security number. This value is available for US customers.
     *
     * @return $this
     */
    public function setLastFourSsn($last_four_ssn)
    {

        if (!is_null($last_four_ssn) && (!preg_match("/^([0-9]{4}|[0-9]{9})$/", $last_four_ssn))) {
            throw new \InvalidArgumentException("invalid value for $last_four_ssn when calling Customer., must conform to the pattern /^([0-9]{4}|[0-9]{9})$/.");
        }

        $this->container['last_four_ssn'] = $last_four_ssn;

        return $this;
    }

    /**
     * Gets national_identification_number
     *
     * @return string
     */
    public function getNationalIdentificationNumber()
    {
        return $this->container['national_identification_number'];
    }

    /**
     * Sets national_identification_number
     *
     * @param string $national_identification_number The customer's national identification number. This value is available for EU customers utilizing national identification numbers.
     *
     * @return $this
     */
    public function setNationalIdentificationNumber($national_identification_number)
    {
        $this->container['national_identification_number'] = $national_identification_number;

        return $this;
    }

    /**
     * Gets organization_entity_type
     *
     * @return string
     */
    public function getOrganizationEntityType()
    {
        return $this->container['organization_entity_type'];
    }

    /**
     * Sets organization_entity_type
     *
     * @param string $organization_entity_type Organization entity type. Only applicable for B2B customers. The following values are avaiable:
     *
     * @return $this
     */
    public function setOrganizationEntityType($organization_entity_type)
    {
        $allowedValues = $this->getOrganizationEntityTypeAllowableValues();
        if (!is_null($organization_entity_type) && !in_array($organization_entity_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'organization_entity_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['organization_entity_type'] = $organization_entity_type;

        return $this;
    }

    /**
     * Gets organization_registration_id
     *
     * @return string
     */
    public function getOrganizationRegistrationId()
    {
        return $this->container['organization_registration_id'];
    }

    /**
     * Sets organization_registration_id
     *
     * @param string $organization_registration_id Organization registration id. Only applicable for B2B customers.
     *
     * @return $this
     */
    public function setOrganizationRegistrationId($organization_registration_id)
    {
        $this->container['organization_registration_id'] = $organization_registration_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Customer’s Title. Allowed values per country: UK - \"Mr\", \"Ms\" DE - \"Herr\", \"Frau\" AT: \"Herr, \"Frau\" CH: de-CH: \"Herr, \"Frau\" it-CH: \"Sig.\", \"Sig.ra\" fr-CH: \"M\", \"Mme\"  BE: \"Dhr.\", \"Mevr.\" NL: \"Dhr.\", \"Mevr.\"
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of customer in the session. If nothing is added, a B2C session will be the default. If it is a b2b-session, you should enter organization to trigger a B2B session.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets vat_id
     *
     * @return string
     */
    public function getVatId()
    {
        return $this->container['vat_id'];
    }

    /**
     * Sets vat_id
     *
     * @param string $vat_id VAT ID. Only applicable for B2B customers.
     *
     * @return $this
     */
    public function setVatId($vat_id)
    {
        $this->container['vat_id'] = $vat_id;

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


