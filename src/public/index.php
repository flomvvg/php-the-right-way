<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$id = new \Ramsey\Uuid\UuidFactory();

echo $id->uuid4();

$paddleTx = new \App\PaymentGateway\Paddle\Transaction();
var_dump($paddleTx);