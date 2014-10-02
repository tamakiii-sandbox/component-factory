<?php

namespace Concretehouse\Component\Factory;

use Concretehouse\Component\Factory\FactoryInterface;
use Concretehouse\Component\Factory\FunctionsInterface;

/**
 * Factory.
 */
class Factory implements FactoryInterface
{
    /**
     * @var FunctionsInterface
     */
    private $functions;


    /**
     * @param FunctionsInterface $functions
     */
    public function __construct(FunctionsInterface $functions)
    {
        $this->functions = $functions;
    }

    /**
     * @param string $class
     * @param array $args
     * @return object
     */
    public function make($class, array $args = array())
    {
        // Instantiate
        $object = $this->getFunctions()->newInstanceArgs($class, $args);

        // Check if $object is not object
        if (empty($object) || !is_object($object)) {
            throw new \UnexpectedValueException("Failed to create new instance with {$class}");
        }

        return $object;
    }

    /**
     * @return FunctionsInterface
     */
    protected function getFunctions()
    {
        return $this->functions;
    }
}
