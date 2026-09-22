<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

define('ROOT_PATH', dirname(__DIR__));
define('CORE_PATH', ROOT_PATH . '/core');
define('CONFIG_PATH', ROOT_PATH . '/config');
define('CONTROLLER_PATH', ROOT_PATH . '/controllers');
define('MODEL_PATH', ROOT_PATH . '/models');
define('VIEW_PATH', ROOT_PATH . '/views');
define('ROUTE_PATH', ROOT_PATH . '/routes');
define('HELPER_PATH', ROOT_PATH . '/helpers');
define('MIDDLEWARE_PATH', ROOT_PATH . '/middlewares');
define('VALIDATE_PATH', ROOT_PATH . '/validates');
define('PUBLIC_PATH', ROOT_PATH . '/public');
define('UPLOAD_PATH', ROOT_PATH . '/upload');
define('BASE_URL', '/BTL4/');

require_once CONFIG_PATH . '/database.php';
require_once HELPER_PATH . '/view.php';

foreach (glob(MODEL_PATH . '/*.php') as $modelFile) {
    require_once $modelFile;
}
