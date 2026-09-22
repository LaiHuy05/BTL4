<?php

require_once __DIR__ . '/core/bootstrap.php';

$act = $_GET['act'] ?? 'client';

if ($act === 'logout') {
    $_GET['client'] = 'logout';
    require CONTROLLER_PATH . '/client/client_controller.php';
} elseif ($act === 'admin' || isset($_GET['admin'])) {
    require CONTROLLER_PATH . '/admin/admin_controller.php';
} else {
    require CONTROLLER_PATH . '/client/client_controller.php';
}
