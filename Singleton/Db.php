<?php

namespace Patterns\Singleton;

class Db
{
    protected $connection;

    private static $instance;

    public static function createInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Db();
        }
        return self::$instance;
    }

    private function __construct()
    {
        $this->connection = 'connected';
    }

    public function get()
    {
        return 'Db data';
    }
}