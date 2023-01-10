<?php
define("PROJECT_PATH", dirname(path: __FILE__));
define("PRIVATE_PATH", dirname(path: PROJECT_PATH . '/private'));
define("SHARED_PATH", PRIVATE_PATH . '/shared');

include SHARED_PATH . '/functions.php';