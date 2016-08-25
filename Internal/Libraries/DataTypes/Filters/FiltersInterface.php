<?php namespace ZN\DataTypes;

interface FiltersInterface
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
    // Get Var                                                                   
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $varName
    //                                                                                        
    //--------------------------------------------------------------------------------------------------------
    public function getVar(String $varName) : Bool;
    
    //--------------------------------------------------------------------------------------------------------
    // Post Var                                                                   
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $varName
    //                                                                                        
    //--------------------------------------------------------------------------------------------------------
    public function postVar(String $varName) : Bool;    
    
    //--------------------------------------------------------------------------------------------------------
    // Cookie Var                                                                   
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $varName
    //                                                                                        
    //--------------------------------------------------------------------------------------------------------
    public function cookieVar(String $varName) : Bool;
    
    //--------------------------------------------------------------------------------------------------------
    // Env Var                                                                   
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $varName
    //                                                                                        
    //--------------------------------------------------------------------------------------------------------
    public function envVar(String $varName) : Bool;

    //--------------------------------------------------------------------------------------------------------
    // Server Var                                                                   
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $varName
    //                                                                                        
    //--------------------------------------------------------------------------------------------------------
    public function serverVar(String $varName) : Bool;
    
    //--------------------------------------------------------------------------------------------------------
    // ID                                                                  
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $filterName
    //                                                                                        
    //--------------------------------------------------------------------------------------------------------
    public function id(String $filterName) : Int;
    
    //--------------------------------------------------------------------------------------------------------
    // Get List                                                                
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //                                                                                        
    //--------------------------------------------------------------------------------------------------------
    public function getList() : Array;
    
    //--------------------------------------------------------------------------------------------------------
    // Input Array                                                                   
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $type
    // @param mixed  $definition
    // @param bool   $addEmpty
    //                                                                                        
    //--------------------------------------------------------------------------------------------------------
    public function inputArray(String $type = 'post', $definition = NULL, Bool $addEmpty = true);
    
    //--------------------------------------------------------------------------------------------------------
    // Var Array                                                                   
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array  $data
    // @param mixed  $definition
    // @param bool   $addEmpty
    //                                                                                        
    //--------------------------------------------------------------------------------------------------------
    public function varArray(Array $data, $definition = NULL, Bool $addEmpty = true);
    
    //--------------------------------------------------------------------------------------------------------
    // Input                                                                  
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $var
    // @param string $type
    // @param string $filter
    // @param mixed  $options
    //                                                                                        
    //--------------------------------------------------------------------------------------------------------
    public function input(String $var, String $type = 'post', String $filter = 'default' , $options = NULL);
    
    //--------------------------------------------------------------------------------------------------------
    // Vars                                                                  
    //--------------------------------------------------------------------------------------------------------
    //
    // @param mixed  $var
    // @param string $filter
    // @param mixed  $options
    //                                                                                        
    //--------------------------------------------------------------------------------------------------------
    public function vars($var, String $filter = 'default', $options = NULL);
    
    //--------------------------------------------------------------------------------------------------------
    // Sanitize
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param string $const;
    //
    //--------------------------------------------------------------------------------------------------------
    public function sanitize(String $const);
    
    //--------------------------------------------------------------------------------------------------------
    // Validate
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param string $const;
    //
    //--------------------------------------------------------------------------------------------------------
    public function validate(String $const);
    
    //--------------------------------------------------------------------------------------------------------
    // Force
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param string $const;
    //
    //--------------------------------------------------------------------------------------------------------
    public function force(String $const);
    
    //--------------------------------------------------------------------------------------------------------
    // Flag
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param string $const;
    //
    //--------------------------------------------------------------------------------------------------------
    public function flag(String $const);
    
    //--------------------------------------------------------------------------------------------------------
    // Required
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param string $const;
    //
    //--------------------------------------------------------------------------------------------------------
    public function required(String $const);
}