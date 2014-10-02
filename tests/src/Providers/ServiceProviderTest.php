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

        $this->domain = ServiceProvider::DOMAIN;

        $this->provider->register($this->container);
    }

    /**
     * @test
     */
    public function registersFunctions()
    {
        $this->assertInstanceOf('Concretehouse\Component\Factory\FunctionsInterface', $this->container["$this->domain.functions"]);
        $this->assertInstanceOf('Concretehouse\Component\Factory\Functions', $this->container["$this->domain.functions"]);
    }

    /**
     * @test
     */
    public function registersRegisterable()
    {
        $this->assertInstanceOf('Concretehouse\Component\Factory\RegisterableInterface', $this->container["$this->domain.registerable"]);
        $this->assertInstanceOf('Concretehouse\Component\Factory\Registerable', $this->container["$this->domain.registerable"]);
    }

    /**
     * @test
     */
    public function registersRegisterableFactoryInjectable()
    {
        $this->assertInstanceOf('Concretehouse\Component\Factory\RegisterableInterface', $this->container["$this->domain.registerable_factory_injectable"]);
        $this->assertInstanceOf('Concretehouse\Component\Factory\FactoryInjectableInterface', $this->container["$this->domain.registerable_factory_injectable"]);
        $this->assertInstanceOf('Concretehouse\Component\Factory\RegisterableFactoryInjectable', $this->container["$this->domain.registerable_factory_injectable"]);
    }

    /**
     * @test
     */
    public function registerableIsNotSingleton()
    {
        $a = $this->container["$this->domain.registerable"];
        $b = $this->container["$this->domain.registerable"];

        $this->assertNotSame($a, $b);
        $this->assertSame(get_class($a), get_class($b));
    }
}
