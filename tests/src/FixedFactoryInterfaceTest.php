<?php

namespace Concretehouse\Component\Factory\Test;

use Phake;

/**
 * Test for fixed-factory interface.
 */
class FixedFactoryInterface extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function canImplement()
    {
        Phake::mock('Concretehouse\Component\Factory\FixedFactoryInterface');
    }
}
