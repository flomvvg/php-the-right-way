<?php

namespace App;

trait CappuccinoTrait
{
    use LatteTrait;
    public function makeCappuccino(): void
    {
        echo static::class . ' is making cappuccino';
    }
}