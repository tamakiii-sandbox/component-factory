<?php

namespace Concretehouse\Component\Factory\Test;

use Phake;

/**
 * Test for registerable factory interface.
 */
class RegisterableInterfaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function canImplement()
    {
        Phake::mock('Concretehouse\Component\Factory\RegisterableInterface');
    }
}
