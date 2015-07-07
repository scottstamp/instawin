<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";
require_once "database.inc.php";

$isDevMode = true;
$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

//$conn = array(
//    'driver' => 'mysqli',
//    'host' => 'cerberus.hypermine.com',
//    'port' => 3306,
//    'user' => 'instawin',
//    'password' => '5jH7uiC[){uGETG4',
//    'dbname' => 'instawin'
//);

$em = EntityManager::create($conn, $config);
