<?php

namespace Concretehouse\Component\Factory\Test\Providers;

use Concretehouse\Component\Factory\Providers\ServiceProvider;
use Phake;

/**
 * Test for factory service provider.
 */
class ServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Set up
     */
    public function setUp()
    {
        $this->container = new \Pimple\Container;
        $this->provider = new ServiceProvider;
    }

    /**
     * @test
     */
    public function registersFunctions()
    {
        $domain = ServiceProvider::DOMAIN;
        $this->provider->register($this->container);
        $this->assertInstanceOf('Concretehouse\Component\Factory\FunctionsInterface', $this->container["$domain.functions"]);
        $this->assertInstanceOf('Concretehouse\Component\Factory\Functions', $this->container["$domain.functions"]);
    }

    /**
     * @test
     */
    public function registersRegisterable()
    {
        $domain = ServiceProvider::DOMAIN;
        $this->provider->register($this->container);
        $this->assertInstanceOf('Concretehouse\Component\Factory\RegisterableInterface', $this->container["$domain.registerable"]);
        $this->assertInstanceOf('Concretehouse\Component\Factory\Registerable', $this->container["$domain.registerable"]);
    }

    /**
     * @test
     */
    public function registersRegisterableFactoryInjectable()
    {
        $domain = ServiceProvider::DOMAIN;
        $this->provider->register($this->container);
        $this->assertInstanceOf('Concretehouse\Component\Factory\RegisterableInterface', $this->container["$domain.registerable_factory_injectable"]);
        $this->assertInstanceOf('Concretehouse\Component\Factory\FactoryInjectableInterface', $this->container["$domain.registerable_factory_injectable"]);
        $this->assertInstanceOf('Concretehouse\Component\Factory\RegisterableFactoryInjectable', $this->container["$domain.registerable_factory_injectable"]);
    }
}
