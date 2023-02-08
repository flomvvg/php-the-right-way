<?php

declare(strict_types=1);

use \App\PaymentGateway\Paddle\Transaction;

require __DIR__ . '/../vendor/autoload.php';

//encapsulation = access modifiers + setter & getter
//zb. property to private and use getter/setter do access it

$tx = new Transaction(25);

//abstraction: hide the implementation
//this process function should not care what happens afterwards
//the code should still work if changes are made somewhere else
$tx->process();