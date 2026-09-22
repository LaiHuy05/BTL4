<?php

require_once MIDDLEWARE_PATH . '/admin.php';
require_admin();

$admin = $_GET['admin'] ?? 'home';
$id = $_GET['id'] ?? '';

$routes = require ROUTE_PATH . '/admin.php';
$controller = $routes[$admin] ?? $routes['home'];

require CONTROLLER_PATH . '/admin/' . $controller;
