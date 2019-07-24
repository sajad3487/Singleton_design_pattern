<?php
namespace App;
require_once __DIR__ . "/Config/DatabaseConfig.php";
require_once __DIR__ . "/Config/AppConfig.php";

use App\Config\DatabaseConfig;
use App\Config\AppConfig;

$dbConfig = DatabaseConfig::getInstance();
echo $dbConfig->get('db_host');
echo $dbConfig->get('db_user');

$appConfig = AppConfig::getInstance();
echo $appConfig->get('app_name');
echo $appConfig->get('debug_mode');