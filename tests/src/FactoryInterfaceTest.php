<?php

namespace Concretehouse\Component\Factory\Test;

use Phake;

/**
 * Test for factory interface.
 */
class FactoryInterfaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function canImplement()
    {
        Phake::mock('Concretehouse\Component\Factory\FactoryInterface');
    }
}
