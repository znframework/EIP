<?php namespace ZN\DataTypes;

interface SerialInterface
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
	// Encode                                                                
	//--------------------------------------------------------------------------------------------------------
	//
	// @param mixed $data
	//																						  
	//--------------------------------------------------------------------------------------------------------
	public function encode($data) : String;
	
	//--------------------------------------------------------------------------------------------------------
	// Decode                                                                
	//--------------------------------------------------------------------------------------------------------
	//
	// @param string $data
	// @param bool   $array
	//																						  
	//--------------------------------------------------------------------------------------------------------
	public function decode(String $data, Bool $array = false);
	
	//--------------------------------------------------------------------------------------------------------
	// Decode Object                                                                
	//--------------------------------------------------------------------------------------------------------
	//
	// @param string $data
	//																						  
	//--------------------------------------------------------------------------------------------------------
	public function decodeObject(String $data) : \stdClass;
	
	//--------------------------------------------------------------------------------------------------------
	// Decode Array                                                                
	//--------------------------------------------------------------------------------------------------------
	//
	// @param string $data
	//																						  
	//--------------------------------------------------------------------------------------------------------
	public function decodeArray(String $data) : Array;
}