<?php

namespace Concretehouse\Component\Factory;

/**
 * Factory injectable interface.
 */
interface FactoryInjectableInterface extends FactoryInterface
{
    /**
     * @param string $name
     * @param array $args
     * @return mixed
     */
    public function addFactory(MatchableInterface $factory);
}
