<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Invoice;

$invoice = new Invoice(25, 'name', 'description', '1234');

//serialization is converting a value to a string form
echo serialize(true);
echo '<br>';
echo serialize(1);
echo '<br>';
echo serialize('hello world');
echo '<br>';
echo serialize(2.5);
echo '<br>';
echo serialize([1,2,3]);
echo '<br>';
var_dump(unserialize(serialize(['a' => 1, 'b' => 2, 'c' => 3])));
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


//unserialize creates a new object
$str = serialize($invoice);
$invoice2 = unserialize($str);

var_dump($invoice2, $invoice === $invoice2);