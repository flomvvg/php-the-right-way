<?php

declare(strict_types=1);

require_once '../PaymentGateway/Stripe/Transaction.php';
require_once '../PaymentGateway/Paddle/Transaction.php';
require_once '../PaymentGateway/Paddle/CustomerProfile.php';

use PaymentGateway\Paddle\{Transaction, CustomerProfile};
use PaymentGateway\Stripe\Transaction as StripeTransaction;

$paddleTransaction = new Transaction();
$stripeTransaction = new StripeTransaction(10, 'Stripe Tx');
$paddleCustomerProfile = new CustomerProfile();

var_dump($paddleTransaction, $stripeTransaction, $paddleCustomerProfile);