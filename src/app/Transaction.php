<?php

namespace App;

class Transaction
{
    /**
     * @method int foo(string $x)
     */
    /** @var Customer $customer */
    private $customer;

    /** @var float $amount */
    private $amount;

    /**
     * not needed if type hinting
     * Some desc
     *
     * @param Customer $customer
     * @param float $amount
     *
     * @throws \Exception
     *
     * @return bool
     */
    public function process(Customer $customer, float $amount): bool
    {
        return true;
    }

    /**
     * @param Customer[] $arr
     */
    public function foo(array $arr)
    {
        foreach ($arr as $obj) {
            $obj->name;
        }
    }
}