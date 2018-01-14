<?php namespace ZN\Filesystem\Exception;
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 */

use Exception;
use ZN\Language\Lang;

class FolderChangeDirException extends Exception
{
    public function __construct($folder)
    {
        parent::__construct(Lang::select('Exception', 'folderChangeDir', $folder));
    }
}
