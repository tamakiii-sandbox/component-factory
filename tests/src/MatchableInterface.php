<?php

namespace Concretehouse\Component\Factory\Test;

use Phake;

/**
 * Test for matchable factory interface.
 */
class MatchableInterfaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Set up
     */
    public function setUp()
    {
        $this->matchable = Phake::mock('Concretehouse\Component\Factory\MatchableInterface');
    }

    /**
     * @test
     */
    public function implementsFactoryInterface()
    {
        $this->assertInstanceOf('Concretehouse\Component\Factory\FactoryInterface', $this->matchable);
    }
}
