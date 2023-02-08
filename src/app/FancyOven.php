<?php

namespace App;

class FancyOven
{
    //composition: Uses another class. "Has a" Toaster
    public function __construct(private ToasterPro $toaster)
    {

    }

    public function fry(): void
    {
        //fry stuff
    }

    public function toast(): void
    {
        $this->toaster->toast();
    }

    public function toastBagel(): void
    {
        $this->toaster->toastBagel();
    }
}