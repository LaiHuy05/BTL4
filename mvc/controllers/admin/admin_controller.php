<?php

require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../models/danh-muc.php';
require_once __DIR__ . '/../../models/san-pham.php';
require_once __DIR__ . '/../../models/tai-khoan.php';
require_once __DIR__ . '/../../models/binh-luan.php';
require_once __DIR__ . '/../../models/don-hang.php';
require_once __DIR__ . '/../../models/thong-ke.php';
require_once __DIR__ . '/../../models/tong-doanh-thu.php';
require_once __DIR__ . '/../../models/gio-hang.php';

$admin = $_GET['admin'] ?? 'home';
$id = $_GET['id'] ?? '';

$routes = require __DIR__ . '/../../routes/admin.php';
$controller = $routes[$admin] ?? $routes['home'];

require __DIR__ . '/' . $controller;
