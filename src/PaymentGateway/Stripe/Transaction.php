<?php

declare(strict_types=1);

namespace PaymentGateway\Stripe;

class Transaction
{

    //cannot do this with callable
    public function __construct(private float $amount, private string $description)
    {
    }

    public function addTax(float $rate): self
    {
        $this->amount += $this->amount * $rate / 100;

        return $this;
    }

    public function addDiscount(float $rate): self
    {
        $this->amount -= $this->amount * $rate / 100;

        return $this;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function __destruct()
    {
        echo 'Destruct ' . $this->description . '<br>';
    }
    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }
}