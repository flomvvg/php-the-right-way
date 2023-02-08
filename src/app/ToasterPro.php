<?php

namespace App;

class ToasterPro extends Toaster
{

    public function __construct()
    {
        parent::__construct();
        $this->size = 4;
    }

    public function addSlice(string $slice): void
    {
        $slice = 'bagel';
        parent::addSlice($slice);
    }

    public function toastBagel(): void
    {
        foreach ($this->slices as $i => $slice) {
            echo ($i+1) . ': Toasting ' . $slice . ' with bagels option ';
        }
    }
}