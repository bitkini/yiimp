<?php
// —————————————————————————————————————————
// 1) PHP errors & Yii debug (turn off in prod later)
// —————————————————————————————————————————
ini_set('display_errors',1);
error_reporting(E_ALL);
define('YII_DEBUG',       true);
define('YII_TRACE_LEVEL', 3);

// —————————————————————————————————————————
// 2) ensure we’re in the web root
// —————————————————————————————————————————
chdir(__DIR__);

// —————————————————————————————————————————
// 3) load your pool’s custom settings
// —————————————————————————————————————————
require_once __DIR__ . '/serverconfig.php';   // pool-specific UI settings
require_once '/etc/yiimp/keys.php';          // DB + RPC credentials

// —————————————————————————————————————————
// 4) load the Yii framework
// —————————————————————————————————————————
$yii = __DIR__ . '/framework/yii.php';
if (!is_file($yii)) {
    die("Error: Yii framework not found at <b>{$yii}</b>");
}
require_once $yii;

// —————————————————————————————————————————
// 5) load the Yiimp application config
// —————————————————————————————————————————
$config = __DIR__ . '/yaamp/config.php';
if (!is_file($config)) {
    die("Error: application config not found at <b>{$config}</b>");
}

// —————————————————————————————————————————
// 6) start the application
// —————————————————————————————————————————
Yii::createWebApplication($config)->run();