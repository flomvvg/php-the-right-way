<?php

declare(strict_types=1);


require __DIR__ . '/../vendor/autoload.php';

$collector = new \App\DebtCollectionService();

$collector->collectDebt(new \App\Rocky());