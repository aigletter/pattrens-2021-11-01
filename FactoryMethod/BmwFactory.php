<?php


namespace Patterns\FactoryMethod;


class BmwFactory extends FactoryAbstract
{
    protected function createConcreteCar(): CarInterface
    {
        return new Bmw();
    }
}