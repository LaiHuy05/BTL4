<?php
// mvc/index.php
session_start(); 
include_once './config/database.php';

$act = $_GET['act'] ?? 'client';

if ($act === 'logout') {
    // Xử lý logout thẳng ở đây hoặc gọi file logout
    include_once 'views/client/login/logout.php';
} elseif ($act === 'admin' || isset($_GET['admin'])) {
    include_once 'controllers/admin/admin_controller.php';
} else {
    // Luồng client
    include_once 'controllers/client/client_controller.php';
}