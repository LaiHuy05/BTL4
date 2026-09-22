<?php

session_start();

$act = $_GET['act'] ?? 'client';

if ($act === 'logout') {
    require __DIR__ . '/views/client/login/logout.php';
} elseif ($act === 'admin' || isset($_GET['admin'])) {
    require __DIR__ . '/controllers/admin/admin_controller.php';
} else {
    require __DIR__ . '/controllers/client/client_controller.php';
}
