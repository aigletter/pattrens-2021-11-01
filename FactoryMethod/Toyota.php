<?php


namespace Patterns\FactoryMethod;


class Toyota implements CarInterface
{
    public function moveToShop($shop)
    {
        echo 'Автомобиль Toyota едет в магазин ' . $shop;
    }
}