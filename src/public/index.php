<?php

declare(strict_types=1);

require_once '../Transaction.php';
require_once '../PaymentProfile.php';
require_once '../Customer.php';

//Classes & Objects
$transaction = new Transaction(100, 'Tx 1');

//nullsafe Operator (the "?")
//discards the rest of the expression if something is null
echo $transaction->getCustomer()?->getPaymentProfile()?->id;