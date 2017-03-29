<?php namespace ZN\Requirements\System;

use Config;

class Restoration
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
    // Is Machines IP
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public static function isMachinesIP($manipulation = NULL)
    {
        $projects      = Config::get('Project');
        $restorationIP = $projects['restoration']['machinesIP'];

        if( PROJECT_MODE === 'restoration' || $manipulation !== NULL)
        {
            $ipv4 = ipv4();

            if( is_array($restorationIP) )
            {
                $result = in_array($ipv4, $restorationIP);
            }
            elseif( $ipv4 == $restorationIP )
            {
                $result = true;
            }
            else
            {
                $result = false;
            }
        }
        else
        {
            $result = false;
        }

        return (bool) $result;
    }

    //--------------------------------------------------------------------------------------------------------
    // Mode
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public static function mode($settings = NULL)
    {
        $restorable = NULL;

        if( isset($settings['machinesIP']) )
        {
            $restorable = true;

            Config::set('Project', 'restoration', ['machinesIP' => $settings['machinesIP']]);
        }

        if( self::isMachinesIP($settings) === true )
        {
            return false;
        }
        
        error_reporting(0);

        $currentPath          = $restorable === true ? strtolower(CURRENT_CFUNCTION) : strtolower(currentPath());
        $projects             = Config::get('Project');
        $restoration          = $projects['restoration'];
        $restorationPages     = $restorable === true && ! isset($settings['functions'])
                              ? ['main']
                              : (array) $settings['functions'] ?? $restoration['pages'];
        $restorationRoutePage = $settings['routePage'] ?? $restoration['routePage'];
        $routePage            = strtolower($restorationRoutePage);

        if( is_string($restorationPages) )
        {
            if( $restorationPages === 'all' )
            {
                if( $currentPath !== $routePage )
                {
                    redirect($restorationRoutePage);
                }
            }
        }

        if( isArray($restorationPages) )
        {
            if( $restorationPages[0] === 'all' )
            {
                if( $currentPath !== $routePage )
                {
                    redirect($restorationRoutePage);
                }
            }

            foreach( $restorationPages as $k => $rp )
            {
                if( strstr($currentPath, strtolower($k)) )
                {
                    redirect($rp);
                }
                else
                {
                    if( strstr($currentPath, strtolower($rp)) )
                    {
                        if( $currentPath !== $routePage )
                        {
                            redirect($restorationRoutePage);
                        }
                    }
                }
            }
        }
    }
}

class_alias('ZN\Requirements\System\Restoration', 'Restoration');
