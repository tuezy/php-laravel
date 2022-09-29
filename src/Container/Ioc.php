<?php
namespace Tuezy\Container;

use Tuezy\Traits\Reflection;

class IoC extends BaseContainer implements IocContract {

    use Reflection;

    public static $instance;

    public static function getInstance(): IocContract{
        return parent::getInstance();
    }
}