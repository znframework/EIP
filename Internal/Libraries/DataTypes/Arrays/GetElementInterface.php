<?php namespace ZN\DataTypes\Arrays;

interface GetElementInterface
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
    // Get Last
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array   $array
    // @param numeric $count
    // @param bool    $preserveKey
    //
    //--------------------------------------------------------------------------------------------------------
    public function last(Array $array, Int $count = 1, Bool $preserveKey = false);

    //--------------------------------------------------------------------------------------------------------
    // Get First
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array   $array
    // @param numeric $count
    // @param bool    $preserveKey
    //
    //--------------------------------------------------------------------------------------------------------
    public function first(Array $array, Int $count = 1, Bool $preserveKey = false);
}
