<?php namespace ZN\Database;

interface DBUserInterface
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
	// name()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $name: USER()
	//
	//--------------------------------------------------------------------------------------------------------
	public function name(String $name) : InternalDBUser;
	
	//--------------------------------------------------------------------------------------------------------
	// host()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $host: localhost
	//
	//--------------------------------------------------------------------------------------------------------
	public function host(String $host) : InternalDBUser;

	//--------------------------------------------------------------------------------------------------------
	// password()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $authString: empty
	//
	//--------------------------------------------------------------------------------------------------------
	public function password(String $authString) : InternalDBUser;

	//--------------------------------------------------------------------------------------------------------
	// groups()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $authString: empty
	//
	//--------------------------------------------------------------------------------------------------------
	public function groups(String $authString) : InternalDBUser;

	//--------------------------------------------------------------------------------------------------------
	// members()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $authString: empty
	//
	//--------------------------------------------------------------------------------------------------------
	public function members(String $authString) : InternalDBUser;

	//--------------------------------------------------------------------------------------------------------
	// schema()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $authString: empty
	//
	//--------------------------------------------------------------------------------------------------------
	public function schema(String $authString) : InternalDBUser;
	
	//--------------------------------------------------------------------------------------------------------
	// identifiedBy()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $authString: empty
	//
	//--------------------------------------------------------------------------------------------------------
	public function identifiedBy(String $authString) : InternalDBUser;
	
	//--------------------------------------------------------------------------------------------------------
	// identifiedByPassword()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $hashString: empty
	//
	//--------------------------------------------------------------------------------------------------------
	public function identifiedByPassword(String $hashString) : InternalDBUser;

	//--------------------------------------------------------------------------------------------------------
	// identifiedWith()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $authPlugin: empty
	// @param string $type      : empty
	// @param string $authString: empty
	//
	//--------------------------------------------------------------------------------------------------------
	public function identifiedWith(String $authPlugin, String $type, String $authString) : InternalDBUser;
	
	//--------------------------------------------------------------------------------------------------------
	// identifiedWithBy()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $authPlugin: empty
	// @param string $authString: empty
	//
	//--------------------------------------------------------------------------------------------------------
	public function identifiedWithBy(String $authPlugin, String $authString) : InternalDBUser;
	
	//--------------------------------------------------------------------------------------------------------
	// identifiedWithAs()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $hashPlugin: empty
	// @param string $hashString: empty
	//
	//--------------------------------------------------------------------------------------------------------
	public function identifiedWithAs(String $hashPlugin, String $hashString) : InternalDBUser;
	
	//--------------------------------------------------------------------------------------------------------
	// required()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param void
	//
	//--------------------------------------------------------------------------------------------------------
	public function required() : InternalDBUser;
	
	//--------------------------------------------------------------------------------------------------------
	// with()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param void
	//
	//--------------------------------------------------------------------------------------------------------
	public function with() : InternalDBUser;

	//--------------------------------------------------------------------------------------------------------
	// option()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $name
	// @param string $value
	//
	//--------------------------------------------------------------------------------------------------------
	public function option(String $name, String $value) : InternalDBUser;
	
	//--------------------------------------------------------------------------------------------------------
	// encode()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $type     : SSL, X509, CIPHER value, ISSUER value, SUBJECT value 
	// @param string $string   : empty value
	// @param string $condition: and, or
	//
	//--------------------------------------------------------------------------------------------------------
	public function encode(String $type, String $string, String $condition) : InternalDBUser;
	
	//--------------------------------------------------------------------------------------------------------
	// resource()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $resource: query       => MAX_QUERIES_PER_HOUR
	//						    update 		=> 'MAX_UPDATES_PER_HOUR
	//						    connection 	=> 'MAX_CONNECTIONS_PER_HOUR
	//						    user 		=> 'MAX_USER_CONNECTIONS
	// @param string $count   : 0
	//
	//--------------------------------------------------------------------------------------------------------
	public function resource(String $resource, $count) : InternalDBUser;
	
	//--------------------------------------------------------------------------------------------------------
	// passwordExpire()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string  $type: empty, DEFAULT, NEVER, INTERVAL
	// @param numeric $n   : 0
	//
	//--------------------------------------------------------------------------------------------------------
	public function passwordExpire(String $type, $n) : InternalDBUser;
	
	//--------------------------------------------------------------------------------------------------------
	// lock()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string  $type: lock, unlock
	//
	//--------------------------------------------------------------------------------------------------------
	public function lock(String $type = 'lock') : InternalDBUser;
	
	//--------------------------------------------------------------------------------------------------------
	// unlock()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string  $type: unlock, lock
	//
	//--------------------------------------------------------------------------------------------------------
	public function unlock(String $type = 'unlock') : InternalDBUser;
	
	//--------------------------------------------------------------------------------------------------------
	// type()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string  $type: TABLE, FUNCTION, PROCEDURE
	//
	//--------------------------------------------------------------------------------------------------------
	public function type(String $type = 'TABLE') : InternalDBUser;
	
	//--------------------------------------------------------------------------------------------------------
	// select()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string  $select: *.*
	//
	//--------------------------------------------------------------------------------------------------------
	public function select(String $select = '*.*') : InternalDBUser;
	
	//--------------------------------------------------------------------------------------------------------
	// grantOption()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param void()
	//
	//--------------------------------------------------------------------------------------------------------
	public function grantOption() : InternalDBUser;


	//--------------------------------------------------------------------------------------------------------
	// firstName()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $authString: empty
	//
	//--------------------------------------------------------------------------------------------------------
	public function firstName(String $authString) : InternalDBUser;

	//--------------------------------------------------------------------------------------------------------
	// middleName()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $authString: empty
	//
	//--------------------------------------------------------------------------------------------------------
	public function middleName(String $authString) : InternalDBUser;

	//--------------------------------------------------------------------------------------------------------
	// lastName()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $authString: empty
	//
	//--------------------------------------------------------------------------------------------------------
	public function lastName(String $authString) : InternalDBUser;

	//--------------------------------------------------------------------------------------------------------
	// adminRole()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $authString: empty
	//
	//--------------------------------------------------------------------------------------------------------
	public function adminRole(String $authString = 'GRANT') : InternalDBUser;
	
	//--------------------------------------------------------------------------------------------------------
	// alter()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string  $name: USER()
	//
	//--------------------------------------------------------------------------------------------------------
	public function alter(String $name, $schema) : Bool;
	
	//--------------------------------------------------------------------------------------------------------
	// create()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string  $name: USER()
	//
	//--------------------------------------------------------------------------------------------------------
	public function create(String $name, $schema) : Bool;
	
	//--------------------------------------------------------------------------------------------------------
	// drop()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string  $name: USER()
	//
	//--------------------------------------------------------------------------------------------------------
	public function drop(String $name, $type) : Bool;
	
	//--------------------------------------------------------------------------------------------------------
	// grant()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string  $name  : ALL
	// @param string  $type  : *.*
	// @param string  $select: *.*
	//
	//--------------------------------------------------------------------------------------------------------
	public function grant(String $name = 'ALL', String $type = NULL, String $select = '*.*') : Bool;
	
	//--------------------------------------------------------------------------------------------------------
	// revoke()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string  $name  : ALL
	// @param string  $type  : *.*
	// @param string  $select: *.*
	//
	//--------------------------------------------------------------------------------------------------------
	public function revoke(String $name = 'ALL', String $type = NULL, String $select = '*.*') : Bool;
	
	//--------------------------------------------------------------------------------------------------------
	// rename()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string  $oldName: empty
	// @param string  $newName: empty
	//
	//--------------------------------------------------------------------------------------------------------
	public function rename(String $oldName, String $newName) : Bool;
	
	//--------------------------------------------------------------------------------------------------------
	// setPassword()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string  $user: empty
	// @param string  $pass: empty
	//
	//--------------------------------------------------------------------------------------------------------
	public function setPassword(String $user, String $pass) : Bool;
}