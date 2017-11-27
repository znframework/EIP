<?php namespace ZN\Services\Request;

use Method;
use ZN\DataTypes\Strings;

class InternalRequest implements InternalRequestInterface
{
    //--------------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Copyright  : (c) 2012-2016, znframework.com
    //
    //--------------------------------------------------------------------------------------------------------

    //--------------------------------------------------------------------------------------------------------
    // Magic Call
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $method
    // @param array  $parameters
    //
    //--------------------------------------------------------------------------------------------------------
    public function __call($method, $parameters)
    {
        if( $method === 'all' )
        {
            return Method::request();
        }

        return Method::request($method, $parameters[0] ?? NULL);
    }

    //--------------------------------------------------------------------------------------------------------
    // Scheme -> 4.3.5
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function scheme() : String
    {
        return server('requestScheme');
    }

    //--------------------------------------------------------------------------------------------------------
    // Method -> 4.3.5
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $casing = 'upper'
    //
    //--------------------------------------------------------------------------------------------------------
    public function method(String $casing = 'upper') : String
    {
        return Strings\Casing::use(server('requestMethod'), $casing);
    }

    //--------------------------------------------------------------------------------------------------------
    // Uri -> 4.3.5
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function uri() : String
    {
        return server('requestUri');
    }

    //--------------------------------------------------------------------------------------------------------
    // Time -> 4.3.5
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function time() : Int
    {
        return server('requestTime');
    }

    //--------------------------------------------------------------------------------------------------------
    // Time Float -> 4.3.5
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function timeFloat() : Float
    {
        return server('requestTimeFloat');
    }
}
