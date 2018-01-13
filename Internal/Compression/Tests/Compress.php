<?php namespace ZN\Compression\Tests;
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 */

class Compress extends \UnitTestController
{
    const unit =
    [
        'class'   => 'Compress',
        'methods' => 
        [
            #'extract' => ['source/example.txt', 'target/'],
            'write'    => ['example.txt', 'example value'],
            'read'     => ['example.txt'],
            'do'       => ['example-data'],
             #'undo'   => ['compressdata']
        ]
    ];
}
