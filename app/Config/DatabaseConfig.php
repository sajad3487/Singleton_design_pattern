<?php

namespace App\Config;

require_once __DIR__ . "/SingletonConfig.php";

use App\Config\SingletonConfig;
class DatabaseConfig extends SingletonConfig {
    private $configData;

    protected function loadConfig() {
        // Load database configuration data from file, database, etc.
        $this->configData = [
            'db_host' => 'localhost',
            'db_user' => 'root',
            'db_pass' => 'password',
            'db_name' => 'my_database'
        ];
    }

    public function get($key) {
        return $this->configData[$key] ?? null;
    }
}