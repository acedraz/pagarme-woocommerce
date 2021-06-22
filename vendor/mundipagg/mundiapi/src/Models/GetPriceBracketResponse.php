<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;

/**
 *Response object for getting a price bracket
 */
class GetPriceBracketResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @maps start_quantity
     * @var integer $startQuantity public property
     */
    public $startQuantity;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $price public property
     */
    public $price;

    /**
     * @todo Write general description for this property
     * @maps end_quantity
     * @var integer|null $endQuantity public property
     */
    public $endQuantity;

    /**
     * @todo Write general description for this property
     * @maps overage_price
     * @var integer|null $overagePrice public property
     */
    public $overagePrice;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $startQuantity Initialization value for $this->startQuantity
     * @param integer $price         Initialization value for $this->price
     * @param integer $endQuantity   Initialization value for $this->endQuantity
     * @param integer $overagePrice  Initialization value for $this->overagePrice
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->startQuantity = func_get_arg(0);
            $this->price         = func_get_arg(1);
            $this->endQuantity   = func_get_arg(2);
            $this->overagePrice  = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['start_quantity'] = $this->startQuantity;
        $json['price']          = $this->price;
        $json['end_quantity']   = $this->endQuantity;
        $json['overage_price']  = $this->overagePrice;

        return $json;
    }
}