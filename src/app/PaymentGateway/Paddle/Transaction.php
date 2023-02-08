<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

class Transaction
{
    private float $amount;

    public function __construct(float $amount) {
        $this->amount = $amount;
    }

    public function process(): void
    {
        echo "Processing $" . $this->amount . " Transaction";
    }

    public function getAmount(): float
    {
        return $this->amount;
    }
}