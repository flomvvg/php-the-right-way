<?php

declare(strict_types=1);

namespace App\Controllers;

class Invoice
{
    public function index(): string
    {
        return 'INVOICES';
    }

    public function create(): string
    {
        return 'Create Invoice';
    }
}