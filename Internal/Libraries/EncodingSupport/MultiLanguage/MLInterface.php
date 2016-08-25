<?php namespace ZN\EncodingSupport;

interface MLInterface
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
    // Insert
    //--------------------------------------------------------------------------------------------------------
    //
    // Dil dosyasına kelime eklemek için kullanılır.
    // @param string $app 
    // @param mixed  $key
    // @param string $data
    //
    //--------------------------------------------------------------------------------------------------------
    public function insert(String $app, $key, String $data) : Bool;
    
    //--------------------------------------------------------------------------------------------------------
    // Delete
    //--------------------------------------------------------------------------------------------------------
    //
    // Silinecek dil dosyası.
    // @param string $app 
    // @param mixed  $key
    //
    // @return bool
    //
    //--------------------------------------------------------------------------------------------------------
    public function delete(String $app, $key) : Bool;
    
    //--------------------------------------------------------------------------------------------------------
    // Delete All
    //--------------------------------------------------------------------------------------------------------
    //
    // Silinecek dil dosyası.
    // @param string $app 
    //
    //--------------------------------------------------------------------------------------------------------
    public function deleteAll($app) : Bool;
    
    //--------------------------------------------------------------------------------------------------------
    // Update
    //--------------------------------------------------------------------------------------------------------
    //
    // Dil dosyasında yer alan bir kelimeyi güncellemek için kullanılır.
    // @param string $app 
    // @param mixed  $key
    // @param string $data
    //
    //--------------------------------------------------------------------------------------------------------
    public function update(String $app, $key, String $data) : Bool;
    
    //--------------------------------------------------------------------------------------------------------
    // Select
    //--------------------------------------------------------------------------------------------------------
    //
    // Dil dosyasın yer alan istenilen kelimeye erişmek için kullanılır.
    // @param mixed $key 
    // @return string
    //
    //--------------------------------------------------------------------------------------------------------
    public function select(String $key, $convert) : String;
    
    //--------------------------------------------------------------------------------------------------------
    // Select All
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  mixed $app 
    // @return array
    //
    //--------------------------------------------------------------------------------------------------------
    public function selectAll($app) : Array;
    
    //--------------------------------------------------------------------------------------------------------
    // Table
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  mixed $app 
    // @return string
    //
    //--------------------------------------------------------------------------------------------------------
    public function table($app = NULL) : String;
    
    //--------------------------------------------------------------------------------------------------------
    // Lang
    //--------------------------------------------------------------------------------------------------------
    //
    // Sayfanın aktif dilini ayarlamak için kullanılır.
    // @param string $lang 
    // @return bool
    //
    //--------------------------------------------------------------------------------------------------------
    public function lang(String $lang = 'tr') : Bool;
}