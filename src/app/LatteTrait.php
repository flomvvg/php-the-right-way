<?php

namespace App;

trait LatteTrait
{
    protected string $milk = 'whole-milk';
    public function makeLatte()
    {
        echo static::class . ' is making latte with ' . $this->milk;
    }
}