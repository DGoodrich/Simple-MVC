<?php

use Illuminate\Database\Capsule\Manager as Capssule;

$capsule = new Capssule();

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'username' => 'root',
    'password' => 'secret',
    'database' => 'MVC',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => ''
]);

$capsule->bootEloquent();