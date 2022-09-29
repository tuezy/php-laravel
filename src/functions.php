<?php
use \Tuezy\Container\IoC as IoC;
use \Illuminate\Support\Collection;

if (! function_exists('compiled')) {
    /**
     * @param $str
     * @return string
     */
    function compiled($str) : string
    {
        return preg_replace('/({+[^\/]+})/', '[a-zA-Z0-9]', $str);
    }
}

if (! function_exists('ioc')) {
    /**
     * @param $str
     * @return mixed
     */
    function ioc(string $obj = null)
    {
        $ioc = IoC::getInstance();
        if(!is_null($obj)){
            if(!$ioc->has($obj))
                $ioc->{$obj} = new Collection();
            return $ioc->get($obj);
        }
        return $ioc;
    }
}
