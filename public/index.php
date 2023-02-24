<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Invoice;
use App\InvoiceCollection;

foreach (new Invoice(25) as $key => $value) {
    echo $key . ' = ' . $value . '<br>';
}

$invoiceCollection = new InvoiceCollection([new Invoice(25), new Invoice(15), new Invoice(50)]);

foreach ($invoiceCollection as $invoice) {
    echo $invoice->id . ' - ' . $invoice->amount . '<br>';
}

echo '<br>';
echo '<br>';
echo '<br>';

foo($invoiceCollection);
//iterable can be used to type hint iterable values
function foo(iterable $iterable) {
    foreach ($iterable as $k => $v) {
        //...
        var_dump($k, $v);
        echo '<br>';
    }
}