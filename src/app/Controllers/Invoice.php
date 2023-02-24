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
        return '<form method="post" action="/invoice/create"><label for="amount">Amount</label><input type="text" name="amount" /></form>';
    }

    public function store(): void
    {
        var_dump($_POST['amount']);
    }
}