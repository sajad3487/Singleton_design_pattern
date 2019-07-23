<?php

namespace App\Config;

require_once __DIR__ . "/SingletonConfig.php";

use App\Config\SingletonConfig;
class AppConfig extends SingletonConfig {
    private $configData;

    protected function loadConfig() {
        // Load application configuration data from file, database, etc.
        $this->configData = [
            'app_name' => 'My App',
            'debug_mode' => true,
            // Other configuration options...
        ];
    }

    public function get($key) {
        return $this->configData[$key] ?? null;
    }
}