<?php


namespace Patterns\FactoryMethod;


class ToyotaFactory extends FactoryAbstract
{
    protected function createConcreteCar(): CarInterface
    {
        return new Toyota();
    }
}