<?php namespace ZN\IndividualStructures\Compress\Drivers;

use Support;
use ZN\FileSystem\File;

class ZipDriver extends Abstracts\CompressDriverMappingAbstract
{
    //--------------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Copyright  : (c) 2012-2016, znframework.com
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
        Support::library('ZipArchive', 'ZIP Archive');  
    }

    //--------------------------------------------------------------------------------------------------------
    // Extract
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param  string $source
    // @param  string $target
    // @return bool
    //
    //--------------------------------------------------------------------------------------------------------
    public function extract($source, $target, $password = NULL)
    {
        return File\Forge::zipExtract($source, $target);
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Write
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $file
    // @param string $data
    //
    //--------------------------------------------------------------------------------------------------------
    public function write($file, $data)
    {
        return uselib('GZDriver')->write($file, $data);
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Read
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string  $file
    //
    //--------------------------------------------------------------------------------------------------------
    public function read($file)
    {
        return uselib('GZDriver')->read($file);
    }

    //--------------------------------------------------------------------------------------------------------
    // Do
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string  $data
    //
    //--------------------------------------------------------------------------------------------------------
    public function do($data)
    {
        return uselib('GZDriver')->do($data);
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Undo
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string  $data
    //
    //--------------------------------------------------------------------------------------------------------
    public function undo($data)
    {
        return uselib('GZDriver')->undo($data);
    }
}