<?php
/**
 * Service
 *
 * PHP version 5
 *
 * @category Class
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Integration for DHL Express MyDHL Service
 *
 * OpenAPI description for the Integration with MyDHL
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: thomas@spysystem.dk
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MyDHL\Model;

use \ArrayAccess;
use \MyDHL\ObjectSerializer;

/**
 * Service Class Doc Comment
 *
 * @category Class
 * @package  MyDHL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Service implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Service';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'delivery_time' => 'string',
        'delivery_type' => 'string',
        'cutoff_time' => 'string',
        'cutoff_time_gmt' => 'string',
        'cutoff_time_offset' => 'string',
        'next_business_day_ind' => 'string',
        'pickup_window_earliest_time' => 'string',
        'pickup_window_latest_time' => 'string',
        'service_name' => 'string',
        'local_service_type' => 'string',
        'local_service_country_code' => 'string',
        'network_type_code' => 'string',
        'customer_aggreement_ind' => 'string',
        'total_transit_days' => 'int',
        'pickup_additional_dates' => 'int',
        'delivery_additional_days' => 'int',
        'volumetric_weight' => 'float',
        'quoted_weight' => 'float',
        'unit_of_measurement' => 'string',
        'pickup_day_of_week' => 'string',
        'destination_day_of_week' => 'string',
        'pricing_date' => 'string',
        'origin_service_area' => '\MyDHL\Model\ServiceArea',
        'destination_service_area' => '\MyDHL\Model\ServiceArea',
        'total_net' => '\MyDHL\Model\RateRequestTotalNet[]',
        'charges' => '\MyDHL\Model\Charges',
        'total_charge_types' => '\MyDHL\Model\TotalChargeTypes[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'type' => null,
        'delivery_time' => null,
        'delivery_type' => null,
        'cutoff_time' => null,
        'cutoff_time_gmt' => null,
        'cutoff_time_offset' => null,
        'next_business_day_ind' => null,
        'pickup_window_earliest_time' => null,
        'pickup_window_latest_time' => null,
        'service_name' => null,
        'local_service_type' => null,
        'local_service_country_code' => null,
        'network_type_code' => null,
        'customer_aggreement_ind' => null,
        'total_transit_days' => null,
        'pickup_additional_dates' => null,
        'delivery_additional_days' => null,
        'volumetric_weight' => null,
        'quoted_weight' => null,
        'unit_of_measurement' => null,
        'pickup_day_of_week' => null,
        'destination_day_of_week' => null,
        'pricing_date' => null,
        'origin_service_area' => null,
        'destination_service_area' => null,
        'total_net' => null,
        'charges' => null,
        'total_charge_types' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'type' => '@type',
        'delivery_time' => 'DeliveryTime',
        'delivery_type' => 'DeliveryType',
        'cutoff_time' => 'CutoffTime',
        'cutoff_time_gmt' => 'CutoffTimeGMT',
        'cutoff_time_offset' => 'CutoffTimeOffset',
        'next_business_day_ind' => 'NextBusinessDayInd',
        'pickup_window_earliest_time' => 'PickupWindowEarliestTime',
        'pickup_window_latest_time' => 'PickupWindowLatestTime',
        'service_name' => 'ServiceName',
        'local_service_type' => 'LocalServiceType',
        'local_service_country_code' => 'LocalServiceCountryCode',
        'network_type_code' => 'NetworkTypeCode',
        'customer_aggreement_ind' => 'CustomerAggreementInd',
        'total_transit_days' => 'TotalTransitDays',
        'pickup_additional_dates' => 'PickupAdditionalDates',
        'delivery_additional_days' => 'DeliveryAdditionalDays',
        'volumetric_weight' => 'VolumetricWeight',
        'quoted_weight' => 'QuotedWeight',
        'unit_of_measurement' => 'UnitOfMeasurement',
        'pickup_day_of_week' => 'PickupDayOfWeek',
        'destination_day_of_week' => 'DestinationDayOfWeek',
        'pricing_date' => 'PricingDate',
        'origin_service_area' => 'OriginServiceArea',
        'destination_service_area' => 'DestinationServiceArea',
        'total_net' => 'TotalNet',
        'charges' => 'Charges',
        'total_charge_types' => 'TotalChargeTypes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'delivery_time' => 'setDeliveryTime',
        'delivery_type' => 'setDeliveryType',
        'cutoff_time' => 'setCutoffTime',
        'cutoff_time_gmt' => 'setCutoffTimeGmt',
        'cutoff_time_offset' => 'setCutoffTimeOffset',
        'next_business_day_ind' => 'setNextBusinessDayInd',
        'pickup_window_earliest_time' => 'setPickupWindowEarliestTime',
        'pickup_window_latest_time' => 'setPickupWindowLatestTime',
        'service_name' => 'setServiceName',
        'local_service_type' => 'setLocalServiceType',
        'local_service_country_code' => 'setLocalServiceCountryCode',
        'network_type_code' => 'setNetworkTypeCode',
        'customer_aggreement_ind' => 'setCustomerAggreementInd',
        'total_transit_days' => 'setTotalTransitDays',
        'pickup_additional_dates' => 'setPickupAdditionalDates',
        'delivery_additional_days' => 'setDeliveryAdditionalDays',
        'volumetric_weight' => 'setVolumetricWeight',
        'quoted_weight' => 'setQuotedWeight',
        'unit_of_measurement' => 'setUnitOfMeasurement',
        'pickup_day_of_week' => 'setPickupDayOfWeek',
        'destination_day_of_week' => 'setDestinationDayOfWeek',
        'pricing_date' => 'setPricingDate',
        'origin_service_area' => 'setOriginServiceArea',
        'destination_service_area' => 'setDestinationServiceArea',
        'total_net' => 'setTotalNet',
        'charges' => 'setCharges',
        'total_charge_types' => 'setTotalChargeTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'delivery_time' => 'getDeliveryTime',
        'delivery_type' => 'getDeliveryType',
        'cutoff_time' => 'getCutoffTime',
        'cutoff_time_gmt' => 'getCutoffTimeGmt',
        'cutoff_time_offset' => 'getCutoffTimeOffset',
        'next_business_day_ind' => 'getNextBusinessDayInd',
        'pickup_window_earliest_time' => 'getPickupWindowEarliestTime',
        'pickup_window_latest_time' => 'getPickupWindowLatestTime',
        'service_name' => 'getServiceName',
        'local_service_type' => 'getLocalServiceType',
        'local_service_country_code' => 'getLocalServiceCountryCode',
        'network_type_code' => 'getNetworkTypeCode',
        'customer_aggreement_ind' => 'getCustomerAggreementInd',
        'total_transit_days' => 'getTotalTransitDays',
        'pickup_additional_dates' => 'getPickupAdditionalDates',
        'delivery_additional_days' => 'getDeliveryAdditionalDays',
        'volumetric_weight' => 'getVolumetricWeight',
        'quoted_weight' => 'getQuotedWeight',
        'unit_of_measurement' => 'getUnitOfMeasurement',
        'pickup_day_of_week' => 'getPickupDayOfWeek',
        'destination_day_of_week' => 'getDestinationDayOfWeek',
        'pricing_date' => 'getPricingDate',
        'origin_service_area' => 'getOriginServiceArea',
        'destination_service_area' => 'getDestinationServiceArea',
        'total_net' => 'getTotalNet',
        'charges' => 'getCharges',
        'total_charge_types' => 'getTotalChargeTypes'
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
        return self::$openAPIModelName;
    }

    const NEXT_BUSINESS_DAY_IND_Y = 'Y';
    const NEXT_BUSINESS_DAY_IND_N = 'N';
    const UNIT_OF_MEASUREMENT_SI = 'SI';
    const UNIT_OF_MEASUREMENT_SU = 'SU';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNextBusinessDayIndAllowableValues()
    {
        return [
            self::NEXT_BUSINESS_DAY_IND_Y,
            self::NEXT_BUSINESS_DAY_IND_N,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnitOfMeasurementAllowableValues()
    {
        return [
            self::UNIT_OF_MEASUREMENT_SI,
            self::UNIT_OF_MEASUREMENT_SU,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['delivery_time'] = isset($data['delivery_time']) ? $data['delivery_time'] : null;
        $this->container['delivery_type'] = isset($data['delivery_type']) ? $data['delivery_type'] : null;
        $this->container['cutoff_time'] = isset($data['cutoff_time']) ? $data['cutoff_time'] : null;
        $this->container['cutoff_time_gmt'] = isset($data['cutoff_time_gmt']) ? $data['cutoff_time_gmt'] : null;
        $this->container['cutoff_time_offset'] = isset($data['cutoff_time_offset']) ? $data['cutoff_time_offset'] : null;
        $this->container['next_business_day_ind'] = isset($data['next_business_day_ind']) ? $data['next_business_day_ind'] : null;
        $this->container['pickup_window_earliest_time'] = isset($data['pickup_window_earliest_time']) ? $data['pickup_window_earliest_time'] : null;
        $this->container['pickup_window_latest_time'] = isset($data['pickup_window_latest_time']) ? $data['pickup_window_latest_time'] : null;
        $this->container['service_name'] = isset($data['service_name']) ? $data['service_name'] : null;
        $this->container['local_service_type'] = isset($data['local_service_type']) ? $data['local_service_type'] : null;
        $this->container['local_service_country_code'] = isset($data['local_service_country_code']) ? $data['local_service_country_code'] : null;
        $this->container['network_type_code'] = isset($data['network_type_code']) ? $data['network_type_code'] : null;
        $this->container['customer_aggreement_ind'] = isset($data['customer_aggreement_ind']) ? $data['customer_aggreement_ind'] : null;
        $this->container['total_transit_days'] = isset($data['total_transit_days']) ? $data['total_transit_days'] : null;
        $this->container['pickup_additional_dates'] = isset($data['pickup_additional_dates']) ? $data['pickup_additional_dates'] : null;
        $this->container['delivery_additional_days'] = isset($data['delivery_additional_days']) ? $data['delivery_additional_days'] : null;
        $this->container['volumetric_weight'] = isset($data['volumetric_weight']) ? $data['volumetric_weight'] : null;
        $this->container['quoted_weight'] = isset($data['quoted_weight']) ? $data['quoted_weight'] : null;
        $this->container['unit_of_measurement'] = isset($data['unit_of_measurement']) ? $data['unit_of_measurement'] : null;
        $this->container['pickup_day_of_week'] = isset($data['pickup_day_of_week']) ? $data['pickup_day_of_week'] : null;
        $this->container['destination_day_of_week'] = isset($data['destination_day_of_week']) ? $data['destination_day_of_week'] : null;
        $this->container['pricing_date'] = isset($data['pricing_date']) ? $data['pricing_date'] : null;
        $this->container['origin_service_area'] = isset($data['origin_service_area']) ? $data['origin_service_area'] : null;
        $this->container['destination_service_area'] = isset($data['destination_service_area']) ? $data['destination_service_area'] : null;
        $this->container['total_net'] = isset($data['total_net']) ? $data['total_net'] : null;
        $this->container['charges'] = isset($data['charges']) ? $data['charges'] : null;
        $this->container['total_charge_types'] = isset($data['total_charge_types']) ? $data['total_charge_types'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getNextBusinessDayIndAllowableValues();
        if (!is_null($this->container['next_business_day_ind']) && !in_array($this->container['next_business_day_ind'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'next_business_day_ind', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getUnitOfMeasurementAllowableValues();
        if (!is_null($this->container['unit_of_measurement']) && !in_array($this->container['unit_of_measurement'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'unit_of_measurement', must be one of '%s'",
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
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets delivery_time
     *
     * @return string|null
     */
    public function getDeliveryTime()
    {
        return $this->container['delivery_time'];
    }

    /**
     * Sets delivery_time
     *
     * @param string|null $delivery_time delivery_time
     *
     * @return $this
     */
    public function setDeliveryTime($delivery_time)
    {
        $this->container['delivery_time'] = $delivery_time;

        return $this;
    }

    /**
     * Gets delivery_type
     *
     * @return string|null
     */
    public function getDeliveryType()
    {
        return $this->container['delivery_type'];
    }

    /**
     * Sets delivery_type
     *
     * @param string|null $delivery_type delivery_type
     *
     * @return $this
     */
    public function setDeliveryType($delivery_type)
    {
        $this->container['delivery_type'] = $delivery_type;

        return $this;
    }

    /**
     * Gets cutoff_time
     *
     * @return string|null
     */
    public function getCutoffTime()
    {
        return $this->container['cutoff_time'];
    }

    /**
     * Sets cutoff_time
     *
     * @param string|null $cutoff_time cutoff_time
     *
     * @return $this
     */
    public function setCutoffTime($cutoff_time)
    {
        $this->container['cutoff_time'] = $cutoff_time;

        return $this;
    }

    /**
     * Gets cutoff_time_gmt
     *
     * @return string|null
     */
    public function getCutoffTimeGmt()
    {
        return $this->container['cutoff_time_gmt'];
    }

    /**
     * Sets cutoff_time_gmt
     *
     * @param string|null $cutoff_time_gmt cutoff_time_gmt
     *
     * @return $this
     */
    public function setCutoffTimeGmt($cutoff_time_gmt)
    {
        $this->container['cutoff_time_gmt'] = $cutoff_time_gmt;

        return $this;
    }

    /**
     * Gets cutoff_time_offset
     *
     * @return string|null
     */
    public function getCutoffTimeOffset()
    {
        return $this->container['cutoff_time_offset'];
    }

    /**
     * Sets cutoff_time_offset
     *
     * @param string|null $cutoff_time_offset cutoff_time_offset
     *
     * @return $this
     */
    public function setCutoffTimeOffset($cutoff_time_offset)
    {
        $this->container['cutoff_time_offset'] = $cutoff_time_offset;

        return $this;
    }

    /**
     * Gets next_business_day_ind
     *
     * @return string|null
     */
    public function getNextBusinessDayInd()
    {
        return $this->container['next_business_day_ind'];
    }

    /**
     * Sets next_business_day_ind
     *
     * @param string|null $next_business_day_ind next_business_day_ind
     *
     * @return $this
     */
    public function setNextBusinessDayInd($next_business_day_ind)
    {
        $allowedValues = $this->getNextBusinessDayIndAllowableValues();
        if (!is_null($next_business_day_ind) && !in_array($next_business_day_ind, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'next_business_day_ind', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['next_business_day_ind'] = $next_business_day_ind;

        return $this;
    }

    /**
     * Gets pickup_window_earliest_time
     *
     * @return string|null
     */
    public function getPickupWindowEarliestTime()
    {
        return $this->container['pickup_window_earliest_time'];
    }

    /**
     * Sets pickup_window_earliest_time
     *
     * @param string|null $pickup_window_earliest_time pickup_window_earliest_time
     *
     * @return $this
     */
    public function setPickupWindowEarliestTime($pickup_window_earliest_time)
    {
        $this->container['pickup_window_earliest_time'] = $pickup_window_earliest_time;

        return $this;
    }

    /**
     * Gets pickup_window_latest_time
     *
     * @return string|null
     */
    public function getPickupWindowLatestTime()
    {
        return $this->container['pickup_window_latest_time'];
    }

    /**
     * Sets pickup_window_latest_time
     *
     * @param string|null $pickup_window_latest_time pickup_window_latest_time
     *
     * @return $this
     */
    public function setPickupWindowLatestTime($pickup_window_latest_time)
    {
        $this->container['pickup_window_latest_time'] = $pickup_window_latest_time;

        return $this;
    }

    /**
     * Gets service_name
     *
     * @return string|null
     */
    public function getServiceName()
    {
        return $this->container['service_name'];
    }

    /**
     * Sets service_name
     *
     * @param string|null $service_name service_name
     *
     * @return $this
     */
    public function setServiceName($service_name)
    {
        $this->container['service_name'] = $service_name;

        return $this;
    }

    /**
     * Gets local_service_type
     *
     * @return string|null
     */
    public function getLocalServiceType()
    {
        return $this->container['local_service_type'];
    }

    /**
     * Sets local_service_type
     *
     * @param string|null $local_service_type local_service_type
     *
     * @return $this
     */
    public function setLocalServiceType($local_service_type)
    {
        $this->container['local_service_type'] = $local_service_type;

        return $this;
    }

    /**
     * Gets local_service_country_code
     *
     * @return string|null
     */
    public function getLocalServiceCountryCode()
    {
        return $this->container['local_service_country_code'];
    }

    /**
     * Sets local_service_country_code
     *
     * @param string|null $local_service_country_code local_service_country_code
     *
     * @return $this
     */
    public function setLocalServiceCountryCode($local_service_country_code)
    {
        $this->container['local_service_country_code'] = $local_service_country_code;

        return $this;
    }

    /**
     * Gets network_type_code
     *
     * @return string|null
     */
    public function getNetworkTypeCode()
    {
        return $this->container['network_type_code'];
    }

    /**
     * Sets network_type_code
     *
     * @param string|null $network_type_code network_type_code
     *
     * @return $this
     */
    public function setNetworkTypeCode($network_type_code)
    {
        $this->container['network_type_code'] = $network_type_code;

        return $this;
    }

    /**
     * Gets customer_aggreement_ind
     *
     * @return string|null
     */
    public function getCustomerAggreementInd()
    {
        return $this->container['customer_aggreement_ind'];
    }

    /**
     * Sets customer_aggreement_ind
     *
     * @param string|null $customer_aggreement_ind customer_aggreement_ind
     *
     * @return $this
     */
    public function setCustomerAggreementInd($customer_aggreement_ind)
    {
        $this->container['customer_aggreement_ind'] = $customer_aggreement_ind;

        return $this;
    }

    /**
     * Gets total_transit_days
     *
     * @return int|null
     */
    public function getTotalTransitDays()
    {
        return $this->container['total_transit_days'];
    }

    /**
     * Sets total_transit_days
     *
     * @param int|null $total_transit_days total_transit_days
     *
     * @return $this
     */
    public function setTotalTransitDays($total_transit_days)
    {
        $this->container['total_transit_days'] = $total_transit_days;

        return $this;
    }

    /**
     * Gets pickup_additional_dates
     *
     * @return int|null
     */
    public function getPickupAdditionalDates()
    {
        return $this->container['pickup_additional_dates'];
    }

    /**
     * Sets pickup_additional_dates
     *
     * @param int|null $pickup_additional_dates pickup_additional_dates
     *
     * @return $this
     */
    public function setPickupAdditionalDates($pickup_additional_dates)
    {
        $this->container['pickup_additional_dates'] = $pickup_additional_dates;

        return $this;
    }

    /**
     * Gets delivery_additional_days
     *
     * @return int|null
     */
    public function getDeliveryAdditionalDays()
    {
        return $this->container['delivery_additional_days'];
    }

    /**
     * Sets delivery_additional_days
     *
     * @param int|null $delivery_additional_days delivery_additional_days
     *
     * @return $this
     */
    public function setDeliveryAdditionalDays($delivery_additional_days)
    {
        $this->container['delivery_additional_days'] = $delivery_additional_days;

        return $this;
    }

    /**
     * Gets volumetric_weight
     *
     * @return float|null
     */
    public function getVolumetricWeight()
    {
        return $this->container['volumetric_weight'];
    }

    /**
     * Sets volumetric_weight
     *
     * @param float|null $volumetric_weight volumetric_weight
     *
     * @return $this
     */
    public function setVolumetricWeight($volumetric_weight)
    {
        $this->container['volumetric_weight'] = $volumetric_weight;

        return $this;
    }

    /**
     * Gets quoted_weight
     *
     * @return float|null
     */
    public function getQuotedWeight()
    {
        return $this->container['quoted_weight'];
    }

    /**
     * Sets quoted_weight
     *
     * @param float|null $quoted_weight quoted_weight
     *
     * @return $this
     */
    public function setQuotedWeight($quoted_weight)
    {
        $this->container['quoted_weight'] = $quoted_weight;

        return $this;
    }

    /**
     * Gets unit_of_measurement
     *
     * @return string|null
     */
    public function getUnitOfMeasurement()
    {
        return $this->container['unit_of_measurement'];
    }

    /**
     * Sets unit_of_measurement
     *
     * @param string|null $unit_of_measurement unit_of_measurement
     *
     * @return $this
     */
    public function setUnitOfMeasurement($unit_of_measurement)
    {
        $allowedValues = $this->getUnitOfMeasurementAllowableValues();
        if (!is_null($unit_of_measurement) && !in_array($unit_of_measurement, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'unit_of_measurement', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['unit_of_measurement'] = $unit_of_measurement;

        return $this;
    }

    /**
     * Gets pickup_day_of_week
     *
     * @return string|null
     */
    public function getPickupDayOfWeek()
    {
        return $this->container['pickup_day_of_week'];
    }

    /**
     * Sets pickup_day_of_week
     *
     * @param string|null $pickup_day_of_week pickup_day_of_week
     *
     * @return $this
     */
    public function setPickupDayOfWeek($pickup_day_of_week)
    {
        $this->container['pickup_day_of_week'] = $pickup_day_of_week;

        return $this;
    }

    /**
     * Gets destination_day_of_week
     *
     * @return string|null
     */
    public function getDestinationDayOfWeek()
    {
        return $this->container['destination_day_of_week'];
    }

    /**
     * Sets destination_day_of_week
     *
     * @param string|null $destination_day_of_week destination_day_of_week
     *
     * @return $this
     */
    public function setDestinationDayOfWeek($destination_day_of_week)
    {
        $this->container['destination_day_of_week'] = $destination_day_of_week;

        return $this;
    }

    /**
     * Gets pricing_date
     *
     * @return string|null
     */
    public function getPricingDate()
    {
        return $this->container['pricing_date'];
    }

    /**
     * Sets pricing_date
     *
     * @param string|null $pricing_date pricing_date
     *
     * @return $this
     */
    public function setPricingDate($pricing_date)
    {
        $this->container['pricing_date'] = $pricing_date;

        return $this;
    }

    /**
     * Gets origin_service_area
     *
     * @return \MyDHL\Model\ServiceArea|null
     */
    public function getOriginServiceArea()
    {
        return $this->container['origin_service_area'];
    }

    /**
     * Sets origin_service_area
     *
     * @param \MyDHL\Model\ServiceArea|null $origin_service_area origin_service_area
     *
     * @return $this
     */
    public function setOriginServiceArea($origin_service_area)
    {
        $this->container['origin_service_area'] = $origin_service_area;

        return $this;
    }

    /**
     * Gets destination_service_area
     *
     * @return \MyDHL\Model\ServiceArea|null
     */
    public function getDestinationServiceArea()
    {
        return $this->container['destination_service_area'];
    }

    /**
     * Sets destination_service_area
     *
     * @param \MyDHL\Model\ServiceArea|null $destination_service_area destination_service_area
     *
     * @return $this
     */
    public function setDestinationServiceArea($destination_service_area)
    {
        $this->container['destination_service_area'] = $destination_service_area;

        return $this;
    }

    /**
     * Gets total_net
     *
     * @return \MyDHL\Model\RateRequestTotalNet[]|null
     */
    public function getTotalNet()
    {
        return $this->container['total_net'];
    }

    /**
     * Sets total_net
     *
     * @param \MyDHL\Model\RateRequestTotalNet[]|null $total_net total_net
     *
     * @return $this
     */
    public function setTotalNet($total_net)
    {
        $this->container['total_net'] = $total_net;

        return $this;
    }

    /**
     * Gets charges
     *
     * @return \MyDHL\Model\Charges|null
     */
    public function getCharges()
    {
        return $this->container['charges'];
    }

    /**
     * Sets charges
     *
     * @param \MyDHL\Model\Charges|null $charges charges
     *
     * @return $this
     */
    public function setCharges($charges)
    {
        $this->container['charges'] = $charges;

        return $this;
    }

    /**
     * Gets total_charge_types
     *
     * @return \MyDHL\Model\TotalChargeTypes[]|null
     */
    public function getTotalChargeTypes()
    {
        return $this->container['total_charge_types'];
    }

    /**
     * Sets total_charge_types
     *
     * @param \MyDHL\Model\TotalChargeTypes[]|null $total_charge_types total_charge_types
     *
     * @return $this
     */
    public function setTotalChargeTypes($total_charge_types)
    {
        $this->container['total_charge_types'] = $total_charge_types;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


