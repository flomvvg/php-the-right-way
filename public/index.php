<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$dateTime = new DateTime('tomorrow, 14:00');
var_dump($dateTime);
echo '<br>';
echo '<br>';
$dateTime->setTimezone(new DateTimeZone('Europe/Amsterdam'));
$dateTime->setDate(2022, 9, 12)->setTime(17, 30);

var_dump($dateTime);
echo '<br>';
echo '<br>';

echo $dateTime->getTimezone()->getName() . ' - ' . $dateTime->format('d.m.Y H:i');

//with a slash it assumes an american date format
//with a dot or dash it assumes a european date format

$date = '05/03/2022';
//with no time specified it will create the object from the current UTC time
$dt2 = DateTime::createFromFormat('d/m/Y', $date)->setTime(0, 0);
echo '<br>';
echo '<br>';

var_dump($dt2);
echo '<br>';
echo '<br>';
echo '<br>';

echo '=================COMPARISON=================';
echo '<br>';
$dt3 = new DateTime('23.02.2022 13:00');
$dt4 = new DateTime('20.02.2022 14:00');

var_dump($dt3 < $dt4);
var_dump($dt3 > $dt4);
var_dump($dt3 == $dt4);
var_dump($dt3 <=> $dt4);

echo '<br>';
echo '<br>';
//subtracts dt3 from dt4
//invert means, that there is a negative difference between the dates
var_dump($dt3->diff($dt4)->format('%R%a days'));
echo '<br>';
echo '<br>';
echo '<br>';

echo '=================CLONING=================';
echo '<br>';

//Immutable cannot be changed. It will create a new object
//to change the immutable it needs to be assigned to a variable
$from = new DateTimeImmutable();
$to = $from->add(new DateInterval('P1M'));

echo $from->format('d-m-Y') . ' - ' . $to->format('d-m-Y');

echo '<br>';
echo '<br>';
echo '<br>';

echo '=================PERIOD=================';
echo '<br>';
//excludes the last date
$period = new DatePeriod(new DateTime('01.05.2022'), new DateInterval('P1D'), new DateTime('31.05.2022'));

foreach ($period as $date) {
    echo $date->format('d.m.Y') . '<br>';
}