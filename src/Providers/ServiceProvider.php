<?php

namespace Concretehouse\Component\Factory\Providers;

use Concretehouse\Component\Factory;

/**
 * Provides factory service.
 */
class ServiceProvider implements \Pimple\ServiceProviderInterface
{
    const DOMAIN = 'concretehouse.component.factory';

    /**
     * @param \Pimple\Container $container
     */
    public function register(\Pimple\Container $container)
    {
        $domain = self::DOMAIN;

        $container["$domain.functions"] = function($c) {
            return new Factory\Functions;
        };

        $container["$domain.registerable"] = function($c) use ($domain) {
            return new Factory\Registerable($c["$domain.functions"]);
        };

        $container["$domain.registerable_factory_injectable"] = function($c) use ($domain) {
            return new Factory\RegisterableFactoryInjectable($c["$domain.functions"]);
        };
    }
}
