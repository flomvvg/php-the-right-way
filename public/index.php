<?php

declare(strict_types=1);


require __DIR__ . '/../vendor/autoload.php';

$invoice1 = new \App\Invoice();

//creates a copy of an object with a different memory location
//in this case invoice 2 is a new object which does not point to invoice 1 but has the same values
$invoice2 = clone $invoice1;

var_dump($invoice1, $invoice2, \App\Invoice::create());