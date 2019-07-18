<?php
//ERROR REPORTING
error_reporting(E_ALL & ~E_NOTICE);

//DATABASE SETTINGS
define('DB_HOST', 'localhost');
define('DB_NAME', 'e-store');
define('DB_CHARSET', 'utf8mb4');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_PORT', 3306);

// FILE PATHS
define("PATH_LIB", __DIR__ . DIRECTORY_SEPARATOR);
define("PATH_PUBLIC", "public" . DIRECTORY_SEPARATOR);