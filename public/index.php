<?php

declare(strict_types=1);

use \App\Toaster;
use \App\ToasterPro;

require __DIR__ . '/../vendor/autoload.php';

//If something (class/method etc.) has the final keyword, another class cannot extend it anymore
//The final keyword prevents inheritance

$toaster = new ToasterPro();

$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->toastBagel();