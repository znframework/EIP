<?php namespace ZN\Captcha\Tests;
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 */

use ZN\UnitTestController;

class Captcha extends \UnitTestController
{
    const unit =
    [
        'class'   => 'Captcha',
        'methods' => 
        [
            'create'        => [true],
            'getCode'       => []
        ]
    ];
}
