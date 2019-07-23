<?php

namespace App\Config;

abstract class SingletonConfig
{
    private static $instances = [];

    protected function __construct() {
        // Load configuration data
        $this->loadConfig();
    }

    abstract protected function loadConfig();

    public static function getInstance() {
        $className = static::class;
        if (!isset(self::$instances[$className])) {
            self::$instances[$className] = new static();
        }
        return self::$instances[$className];
    }
}