<?php

namespace Concretehouse\Dp\Factory\Concretes;

/**
 * Matchable factory with Closure.
 */
class MatchableClosure extends Factory implements MatchableInterface
{
    /**
     * @var \Closure
     */
    private $closure;

    /**
     * @var \FactoryInterface
     */
    private $factory;


    /**
     * @param \Closure $closure
     */
    public function __construct(\Closure $closure, FactoryInterface $factory, FunctionsInterface $functions)
    {
        parent::__construct($functions);
        $this->closure = $closure;
        $this->factory = $factory;
    }

    /**
     * @param string $interface
     * @return boolean
     */
    public function match($interface)
    {
        
    }
}
