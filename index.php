<?php

ini_set('display_errors', 1);

require 'vendor/autoload.php';

use Philo\Blade\Blade;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';

$blade = new Blade($views, $cache);

$data = [
    'title' => 'Judul'
];

echo $blade->view()->make('hello', $data)->render();
