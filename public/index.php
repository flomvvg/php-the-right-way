<?php

declare(strict_types=1);


require __DIR__ . '/../vendor/autoload.php';

$invoice1 = new \App\Invoice(25, 'inv 1');
$invoice2 = new \App\CustomInvoice(25, 'inv 1');

//points to the same memory object
$invoice3 = $invoice1;
//this will also affect invoice 1 because they point to the same object in the memory
$invoice3->amount = 200;

echo 'Invoice 1 == Invoice 2';
echo '<br>';
var_dump($invoice1 == $invoice2);

echo '<br>';
echo '<br>';

//=== only returns true if the objects point to the same storage reference
echo 'Invoice 1 === Invoice 2';
echo '<br>';

var_dump($invoice1 === $invoice2);
echo '<br>';
echo '<br>';

echo 'Invoice 1 === Invoice 3';
echo '<br>';
var_dump($invoice1 === $invoice3);