<?php
namespace Tuezy\Core;

use Illuminate\Container\Container;
use Tuezy\Core\Contract\Provider as ProviderInterface;

abstract class ServiceProvider implements ProviderInterface {

    protected Container $container;

    public function __construct(Container $container = null)
    {
        $this->container = $container ?? Container::getInstance();
    }
}