<?php namespace ZN\CryptoGraphy\Encode;

class GoldenAlgorithm extends EncodeExtends implements GoldenAlgorithmInterface
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
    // Golden
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $data
    // @param string $additional
    //
    //--------------------------------------------------------------------------------------------------------
    public function create(String $data, String $additional = 'default') : String
    {
        $algo = CRYPTOGRAPHY_ENCODE_CONFIG['type'];

        if( ! isHash($algo) )
        {
            $algo = 'md5';
        }
        // Ek veri şifreleniyor.

        $additional = hash($algo, $additional);

        // Veri şifreleniyor.
        $data = hash($algo, $data);

        // Veri ve ek yeniden şifreleniyor.
        return hash($algo, $data.$additional);
    }
}
