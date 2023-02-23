<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Invoice;

$customer = new \App\Customer();
$invoice = new Invoice($customer);

//code will continue after the first exception gets caught
//multiple exceptions with "|" (pipe)
try {
    $invoice->process(25);
} catch (\App\Exception\MissingBillingInfoException | \InvalidArgumentException $e) {
    //$e is optional in PHP 8
    echo $e->getMessage() . ' in File ' . $e->getFile() . ' at line: ' . $e->getLine() . '<br>';
} finally {
    //will always be executed
    //in functions it can return values. If catch have return, and finally it will return the value from finally
    echo 'Finally block';
}
