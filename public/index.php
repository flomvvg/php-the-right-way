<?php

declare(strict_types=1);

use App\{Checkbox, Radio, Text};

require __DIR__ . '/../vendor/autoload.php';

$fields = [
    new Text('baseText'),
    new Checkbox('baseCheckbox'),
    new Radio('baseRadio'),
];

foreach ($fields as $field) {
    echo $field->render() . '<br>';
}