<?php namespace ZN\EncodingSupport;

class InternalGT extends \CallController implements GTInterface
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
	// @param void
	//
	//--------------------------------------------------------------------------------------------------------
	public function __construct()
	{
		\Support::func('gettex', 'GT > Gettex()');
	}
	
	//--------------------------------------------------------------------------------------------------------
	// Data
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $message
	//
	//--------------------------------------------------------------------------------------------------------
	public function data(String $message) : String
	{
		return gettext($message);
	}
	
	//--------------------------------------------------------------------------------------------------------
	// Locale
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $category : all, collate, ctype, monetary, numeric, time, messages
	// @param mixed  $locale
	//
	//--------------------------------------------------------------------------------------------------------
	public function locale(String $category, $locale) : String
	{
		return setlocale(\Converter::toConstant($category, 'LC_'), $locale);
	}
	
	//--------------------------------------------------------------------------------------------------------
	// Datas
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $msgId1
	// @param string $msgId2
	// @param int    $count
	//
	//--------------------------------------------------------------------------------------------------------
	public function datas(String $msgId1, String $msgId2, Int $count = 0) : String
	{
		return ngettext($msgId1, $msgId2, $count);
	}
	
	//--------------------------------------------------------------------------------------------------------
	// Change
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $domain
	// @param string $message
	//
	//--------------------------------------------------------------------------------------------------------
	public function change(String $domain, String $message) : String
	{
		return dgettext($domain, $message);
	}
	
	//--------------------------------------------------------------------------------------------------------
	// Changes
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $domain
	// @param string $msgId1
	// @param string $msgId2
	// @param int    $count
	//
	//--------------------------------------------------------------------------------------------------------
	public function changes(String $domain, String $msgId1, String $msgId2, Int $count = 0) : String
	{
		return dngettext($domain, $msgId1, $msgId2, $count);
	}
	
	//--------------------------------------------------------------------------------------------------------
	// Search
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $domain
	// @param string $message
	// @param int    $category
	//
	//--------------------------------------------------------------------------------------------------------
	public function search(String $domain, String $message, Int $category = 0) : String
	{
		return dcgettext($domain, $message, $category);
	}
	
	//--------------------------------------------------------------------------------------------------------
	// Searches
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $domain
	// @param string $msgId1
	// @param string $msgId2
	// @param int    $count
	// @param int    $category
	//
	//--------------------------------------------------------------------------------------------------------
	public function searches(String $domain, String $msgId1, String $msgId2, Int $count = 0, Int $category = 0) : String
	{
		return dcngettext($domain, $msgId1, $msgId2, $count, $category);
	}
	
	//--------------------------------------------------------------------------------------------------------
	// Codeset
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $domain
	// @param string $codeset
	//
	//--------------------------------------------------------------------------------------------------------
	public function codeset(String $domain, String $codeset) : String
	{
		return bind_textdomain_codeset($domain, $codeset);
	}
	
	//--------------------------------------------------------------------------------------------------------
	// Dir
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $domain
	// @param string $directory
	//
	//--------------------------------------------------------------------------------------------------------
	public function dir(String $domain, String $directory) : String
	{
		return bindtextdomain($domain, $directory);
	}
	
	//--------------------------------------------------------------------------------------------------------
	// Name
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $textDomain
	//
	//--------------------------------------------------------------------------------------------------------
	public function name(String $textDomain) : String
	{
		return textdomain($textDomain);
	}
}