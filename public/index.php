<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\Home;
use App\Controllers\Invoice;

echo '<pre>';
//print_r($_SERVER);
echo '</pre>';

$router = new App\Router();

$router->get('/', [Home::class, 'index'])
    ->get('/invoice', [Invoice::class, 'index'])
    ->get('/invoice/create', [Invoice::class, 'create'])
    ->post('/invoice/create', [Invoice::class, 'store']);

echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));