<?php
/**
 * GetCorporationsCorporationIdContractsContractIdBids200Ok
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.8.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * GetCorporationsCorporationIdContractsContractIdBids200Ok Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationsCorporationIdContractsContractIdBids200Ok implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_corporations_corporation_id_contracts_contract_id_bids_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'amount' => 'float',
        'bid_id' => 'int',
        'bidder_id' => 'int',
        'date_bid' => '\DateTime'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'amount' => 'amount',
        'bid_id' => 'bid_id',
        'bidder_id' => 'bidder_id',
        'date_bid' => 'date_bid'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'amount' => 'setAmount',
        'bid_id' => 'setBidId',
        'bidder_id' => 'setBidderId',
        'date_bid' => 'setDateBid'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'amount' => 'getAmount',
        'bid_id' => 'getBidId',
        'bidder_id' => 'getBidderId',
        'date_bid' => 'getDateBid'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['bid_id'] = isset($data['bid_id']) ? $data['bid_id'] : null;
        $this->container['bidder_id'] = isset($data['bidder_id']) ? $data['bidder_id'] : null;
        $this->container['date_bid'] = isset($data['date_bid']) ? $data['date_bid'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['amount'] === null) {
            $invalid_properties[] = "'amount' can't be null";
        }
        if ($this->container['bid_id'] === null) {
            $invalid_properties[] = "'bid_id' can't be null";
        }
        if ($this->container['bidder_id'] === null) {
            $invalid_properties[] = "'bidder_id' can't be null";
        }
        if ($this->container['date_bid'] === null) {
            $invalid_properties[] = "'date_bid' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['amount'] === null) {
            return false;
        }
        if ($this->container['bid_id'] === null) {
            return false;
        }
        if ($this->container['bidder_id'] === null) {
            return false;
        }
        if ($this->container['date_bid'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets amount
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param float $amount The amount bid, in ISK
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets bid_id
     * @return int
     */
    public function getBidId()
    {
        return $this->container['bid_id'];
    }

    /**
     * Sets bid_id
     * @param int $bid_id Unique ID for the bid
     * @return $this
     */
    public function setBidId($bid_id)
    {
        $this->container['bid_id'] = $bid_id;

        return $this;
    }

    /**
     * Gets bidder_id
     * @return int
     */
    public function getBidderId()
    {
        return $this->container['bidder_id'];
    }

    /**
     * Sets bidder_id
     * @param int $bidder_id Character ID of the bidder
     * @return $this
     */
    public function setBidderId($bidder_id)
    {
        $this->container['bidder_id'] = $bidder_id;

        return $this;
    }

    /**
     * Gets date_bid
     * @return \DateTime
     */
    public function getDateBid()
    {
        return $this->container['date_bid'];
    }

    /**
     * Sets date_bid
     * @param \DateTime $date_bid Datetime when the bid was placed
     * @return $this
     */
    public function setDateBid($date_bid)
    {
        $this->container['date_bid'] = $date_bid;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


