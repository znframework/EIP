<?php namespace ZN\IndividualStructures\Cart;

class Select extends CartExtends implements SelectInterface
{
    //--------------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Telif Hakkı: Copyright (c) 2012-2016, znframework.com
    //
    //--------------------------------------------------------------------------------------------------------

    //--------------------------------------------------------------------------------------------------------
    // Select Items
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function items() : Array
    {
        if( $sessionCart = $this->driver->select(md5('SystemCartData')) )
        {
            return Properties::$items = $sessionCart;
        }
        else
        {
            return [];
        }
    }

    //--------------------------------------------------------------------------------------------------------
    // Select Item
    //--------------------------------------------------------------------------------------------------------
    //
    // @param mixed $code
    //
    //--------------------------------------------------------------------------------------------------------
    public function item($code) : \stdClass
    {
        Properties::$items = ( $sessionCart = $this->driver->select(md5('SystemCartData')) )
                       ? $sessionCart
                       : '';

        if( empty(Properties::$items) )
        {
            return (object)[];
        }

        foreach( Properties::$items as $row )
        {
            if( ! is_array($code) )
            {
                $key = array_search($code, $row);
            }
            else
            {
                if( isset($row[key($code)]) && $row[key($code)] == current($code) )
                {
                    $key = $row;
                }
            }

            if( ! empty($key) )
            {
                return (object) $row;
            }
        }
    }
}
