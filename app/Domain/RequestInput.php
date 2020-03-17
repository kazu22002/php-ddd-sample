<?php
/**
 * Created by PhpStorm.
 * User: kazu22002
 * Date: 2019-11-15
 * Time: 14:59
 */

namespace App\Domain;


use App\Util\StringExchange;

trait RequestInput
{
    public function set(Array $param)
    {
        foreach($param as $key => $value ) {
            if( property_exists($this, $key)){
                $this->$key = $value;
            } else if ( property_exists($this, StringExchange::camelize($key)) ) {
                $camel = StringExchange::camelize($key);
                $this->$camel = $value;
            }
        }
    }

    public function toArray(): array
    {
        $args = get_object_vars($this);
        $list = [];
        foreach ($args as $key => $val) {
            $list[$key] = $val;
        }
        return $list;
    }

    public function toArrayIsNotNUll(): array
    {
        $args = get_object_vars($this);
        $list = [];
        foreach ($args as $key => $val) {
            if ( is_null($val) ) continue;
            $list[$key] = $val;
        }
        return $list;
    }
}
