<?php
//--------------------------------------------------------------------------------------------------
// Functions
//--------------------------------------------------------------------------------------------------
//
// Author     : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
// Site       : www.znframework.com
// License    : The MIT License
// Copyright  : Copyright (c) 2012-2016, ZN Framework
//
//--------------------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------------------
// sslStatus()
//--------------------------------------------------------------------------------------------------
//
// @param void
//
// @return string
//
//--------------------------------------------------------------------------------------------------
function sslStatus() : String
{
    if( Config::get('Services','uri')['ssl'] )
    {
        return 'https://';
    }
    else
    {
        return 'http://';
    }
}

//--------------------------------------------------------------------------------------------------
// indexStatus()
//--------------------------------------------------------------------------------------------------
//
// @param void
//
// @return string
//
//--------------------------------------------------------------------------------------------------
function indexStatus() : String
{
    if( Config::get('Htaccess', 'uri')['directoryIndex'] )
    {
        return DIRECTORY_INDEX.'/';
    }
    else
    {
        return '';
    }
}
