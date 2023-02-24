<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\Home;
use App\Controllers\Invoice;

echo '<pre>';
print_r($_SERVER);
echo '</pre>';

$router = new App\Router();

$router->register('/', [Home::class, 'index'])
    ->register('/invoices', [Invoice::class, 'index'])
    ->register('/invoices/create', [Invoice::class, 'create']);

echo $router->resolve($_SERVER['REQUEST_URI']);