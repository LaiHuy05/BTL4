<?php

require_once MIDDLEWARE_PATH . '/auth.php';

function require_admin()
{
    require_login();
}
