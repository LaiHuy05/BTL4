<?php

function require_login()
{
    if (!isset($_SESSION['login'])) {
        redirect('?client=login');
    }
}
