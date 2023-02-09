<?php

namespace App;

interface DebtCollector
{
    //constants cannot be overwritten
    public const MY_CONST = 1;

    //all methods must be public
    public function collect(float $owedAmount): float;
}