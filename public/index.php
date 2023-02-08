<?php

declare(strict_types=1);

use \App\PaymentGateway\Paddle\Transaction;
use \App\Enums\Status;

require __DIR__ . '/../vendor/autoload.php';

$tx = new Transaction();

$tx->setStatus(Status::PAID);

var_dump($tx);