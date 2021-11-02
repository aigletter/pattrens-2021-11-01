<?php

use Patterns\FactoryMethod\FactoryAbstract;

include __DIR__ . '/../../vendor/autoload.php';

function getInstance(FactoryAbstract $factory)
{
    $car = $factory->createCar();
    $shop = 'Shop ' . rand(1, 100);
    $car->moveToShop($shop);
}

$bmwFactory = new \Patterns\FactoryMethod\BmwFactory();
$toyotaFactory = new \Patterns\FactoryMethod\ToyotaFactory();

getInstance($bmwFactory);
getInstance($toyotaFactory);