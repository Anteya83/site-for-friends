<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

session_start();
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD','');
define('DB_NAME','alexa');

set_include_path(get_include_path().PATH_SEPARATOR.'php');
spl_autoload_register();