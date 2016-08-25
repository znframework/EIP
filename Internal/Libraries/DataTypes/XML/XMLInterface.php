<?php namespace ZN\DataTypes;

interface XMLInterface
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
    // Version                                                                                
    //--------------------------------------------------------------------------------------------------------
    //
    // Genel Kullanım: Bir XML belgesinin versiyonunu oluşturur.                                                                     
    //  
    // @param  string   $version -> 1.0
    // @return this
    //                                                                                            
    //--------------------------------------------------------------------------------------------------------
    public function version(String $version = '1.0') : InternalXML;
    
    //--------------------------------------------------------------------------------------------------------
    // Encoding                                                                               
    //--------------------------------------------------------------------------------------------------------
    //
    // Genel Kullanım: Bir XML belgesinin kodlama türünü belirtir.                                                                 
    //  
    // @param  string   $encoding -> UTF-8
    // @return this
    //                                                                                        
    //--------------------------------------------------------------------------------------------------------
    public function encoding(String $encoding = 'UTF-8') : InternalXML;

    
    //--------------------------------------------------------------------------------------------------------
    // Build                                                                                  
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array  $data
    // @param string $version
    // @param string $encoding
    //                                                                                            
    //--------------------------------------------------------------------------------------------------------
    public function build(Array $data, String $version = NULL, String $encoding = NULL) : String;
    
    //--------------------------------------------------------------------------------------------------------
    // Save                                                                                  
    //--------------------------------------------------------------------------------------------------------                                                                            
    // 
    // @param string $file
    // @param string $data 
    //                                                                                            
    //--------------------------------------------------------------------------------------------------------
    public function save(String $file, String $data) : Bool;
    
    //--------------------------------------------------------------------------------------------------------
    // Load                                                                                   
    //--------------------------------------------------------------------------------------------------------                                                                     
    //  
    // @param  string   $file
    // @return string
    //                                                                                            
    //--------------------------------------------------------------------------------------------------------
    public function load(String $file) : String;
    
    //--------------------------------------------------------------------------------------------------------
    // Parse Array                                                                                
    //--------------------------------------------------------------------------------------------------------
    //
    // Genel Kullanım: Bir XML verisini diziye çevirir.                                                                           
    // 
    // @param  string   $data
    // @return array
    //                                                                                            
    //--------------------------------------------------------------------------------------------------------
    public function parseArray(String $data) : Array;
    
    //--------------------------------------------------------------------------------------------------------
    // Parse Json                                                                                 
    //--------------------------------------------------------------------------------------------------------
    //
    // Genel Kullanım: Bir XML verisini json'a çevirir.                                                                           
    //  
    // @param  string   $data
    // @return array
    //                                                                                           
    //--------------------------------------------------------------------------------------------------------
    public function parseJson(String $data) : String;
    
    //--------------------------------------------------------------------------------------------------------
    // Parse Object
    //--------------------------------------------------------------------------------------------------------
    //
    // Genel Kullanım: Bir XML verisini object veri türüne çevirir.                                                               
    // 
    // @param  string   $data
    // @return object
    //                                                                                           
    //--------------------------------------------------------------------------------------------------------
    public function parseObject(String $data) : \stdClass;
    
    //--------------------------------------------------------------------------------------------------------
    // Parse
    //--------------------------------------------------------------------------------------------------------
    //
    // Genel Kullanım: Bir XML verisini object veri türüne çevirir.                                                               
    // 
    // @param  string   $data
    // @return object
    //                                                                                           
    //--------------------------------------------------------------------------------------------------------
    public function parse(String $xml, String $result = 'object');
}