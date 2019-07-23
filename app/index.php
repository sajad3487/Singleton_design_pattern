<?php
namespace App;
require_once __DIR__ . "/Config/DatabaseConfig.php";
require_once __DIR__ . "/Config/AppConfig.php";

use App\Config\DatabaseConfig;
use App\Config\AppConfig;
$dbConfig = DatabaseConfig::getInstance();
echo $dbConfig->get('db_host'); // Outputs: localhost
echo $dbConfig->get('db_user'); // Outputs: root

$appConfig = AppConfig::getInstance();
echo $appConfig->get('app_name'); // Outputs: My App
echo $appConfig->get('debug_mode'); // Outputs: 1