<?php

$client = $_GET['client'] ?? 'home';

$iduser = null;
if (isset($_SESSION['user_id'])) {
    $iduser = $_SESSION['user_id'];
} elseif (isset($_GET['iduser'])) {
    $iduser = $_GET['iduser'];
}

$routes = require ROUTE_PATH . '/client.php';
$controller = $routes[$client] ?? $routes['home'];

require CONTROLLER_PATH . '/client/' . $controller;
