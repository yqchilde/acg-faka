<?php
declare (strict_types=1);

return [
    'driver' => env('DB_DRIVER', 'mysql'),
    'host' => env('DB_HOST', '127.0.0.1'),
    'database' => env('DB_DATABASE', 'demo'),
    'username' => env('DB_USERNAME', 'demo'),
    'password' => env('DB_PASSWORD', 'TbfXmL2JTcXYYrWZ'),
    'charset' => env('DB_CHARSET', 'utf8mb4'),
    'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
    'prefix' => env('DB_PREFIX', 'acg_'),
];