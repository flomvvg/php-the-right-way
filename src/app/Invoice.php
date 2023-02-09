<?php

namespace App;

class Invoice
{
    private float $amount = 100;
    private string $accNumber = 'askldfjbeospödokv';
    private int $id = 1;
    public function __debugInfo(): ?array
    {
        return [
            'id' => $this->id,
            'accNumber' => '****' . substr($this->accNumber, -4),
        ];
    }
}