<?php

define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));

define("SHARED_PATH", PRIVATE_PATH . '/shared');

define("PUBLIC_PATH", PROJECT_PATH . '/public');


$root = substr($_SERVER['SCRIPT_NAME'],
    0,
    strpos($_SERVER['SCRIPT_NAME'], '/shared/header.php') + 7);
define("ROOT_URL", $root);

function url_path($path) {
    if($path[0] != '/') {
        $path = "/" . $path;
    }
    return ROOT_URL . $path;
}