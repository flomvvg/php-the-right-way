<?php

namespace App;

class DebtCollectionService
{
    public function collectDebt(DebtCollector $collector): void
    {
        $owed = mt_rand(100, 1000);
        $collectedAmount = $collector->collect($owed);

        echo 'Collected $' . $collectedAmount . ' out of $' . $owed . ' owed';
    }
}