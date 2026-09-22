<?php

require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../models/san-pham.php';
require_once __DIR__ . '/../../models/gio-hang.php';
require_once __DIR__ . '/../../models/danh-muc.php';
require_once __DIR__ . '/../../models/tai-khoan.php';
require_once __DIR__ . '/../../models/don-hang.php';
require_once __DIR__ . '/../../models/binh-luan.php';

$client = $_GET['client'] ?? 'home';

$iduser = null;
if (isset($_SESSION['user_id'])) {
    $iduser = $_SESSION['user_id'];
} elseif (isset($_GET['iduser'])) {
    $iduser = $_GET['iduser'];
}

$routes = require __DIR__ . '/../../routes/client.php';
$controller = $routes[$client] ?? $routes['home'];

require __DIR__ . '/' . $controller;
