<?php namespace ZN\Helpers;

interface RounderInterface
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
	// Data
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param int    $number
	// @param int    $count
	// @param string $type: average, down, up
	//
	//--------------------------------------------------------------------------------------------------------
	public function data(String $number, Int $count = 0, String $type = 'average') : Float;

	//--------------------------------------------------------------------------------------------------------
	// Up
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $number
	// @param int    $count
	//
	//--------------------------------------------------------------------------------------------------------
	public function up(String $number, Int $count = 0) : Float;

	//--------------------------------------------------------------------------------------------------------
	// Down
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $number
	// @param int    $count
	//
	//--------------------------------------------------------------------------------------------------------
	public function down(String $number, Int $count = 0) : Float;

	//--------------------------------------------------------------------------------------------------------
	// Average
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $number
	// @param int    $count
	//
	//--------------------------------------------------------------------------------------------------------
	public function average(String $number, Int $count = 0) : Float;
}