<?php

function view($path, $data = [])
{
    if (!empty($data)) {
        extract($data, EXTR_SKIP);
    }

    $file = VIEW_PATH . '/' . ltrim($path, '/') . '.php';

    if (!is_file($file)) {
        throw new RuntimeException('Không tìm thấy view: ' . $path);
    }

    require $file;
}

function redirect($url)
{
    header('Location: ' . $url);
    exit;
}

function asset($path)
{
    return 'public/assets/' . ltrim($path, '/');
}
