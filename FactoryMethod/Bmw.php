<?php


namespace Patterns\FactoryMethod;


class Bmw implements CarInterface
{
    public function moveToShop($shop)
    {
        echo 'Автомобиль BMW едет в магазин ' . $shop;
    }
}