<?php namespace ZN\ViewObjects\Bootstrap\JSP;

interface RunInterface
{
    //--------------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Copyright  : (c) 2012-2016, znframework.com
    //
    //--------------------------------------------------------------------------------------------------------

    public function use(Callable $callback, Bool $jquery = true, Bool $jqueryAnimate = false);
}
