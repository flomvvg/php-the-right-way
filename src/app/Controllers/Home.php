<?php

declare(strict_types=1);

namespace App\Controllers;

class Home
{
    public function index(): string
    {
        echo '<pre>';
        var_dump($_GET);
        echo '</pre>';
        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';

        return 'HOME';
    }
}