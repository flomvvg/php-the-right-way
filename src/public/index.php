<?php

declare(strict_types=1);

require_once '../Transaction.php';

//Classes & Objects
$amount = (new Transaction(100, 'Tx 1'))
    ->addTax(7)
    ->addDiscount(10)
    ->getAmount();

var_dump($amount);