<?php namespace ZN\DataTypes;

class Objects
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
    // Construct                                                                      
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array $array
    //                                                                                        
    //--------------------------------------------------------------------------------------------------------
    public function __construct(Array $array = [])
    {
        if ( ! empty($array) ) 
        {
            foreach( $array as $key => $val ) 
            {
                $this->{$key} = $val;
            }
        }
    }
}

class_alias('ZN\DataTypes\Objects', 'Objects');