<?php


namespace Patterns\FactoryMethod;


abstract class FactoryAbstract
{
    public function createCar(): CarInterface
    {
        return $this->createConcreteCar();
    }

    abstract protected function createConcreteCar(): CarInterface;
}