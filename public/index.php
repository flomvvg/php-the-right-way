<?php

declare(strict_types=1);


require __DIR__ . '/../vendor/autoload.php';

//Trait methods and properties can be overwritten
//Traits override inherited methods from parent classes
//If 2 traits are used with the same method/property name the keyword "insteadof" can be used:
//use CappuccinoTrait;
//use LatteTrait {
//    LatteTrait::makeLatte insteadof Cappuccino Trait;
//}

//methods/properties can be aliased with "as"
//access modifiers can be used within traits
//access modifiers can be changed wir "as": CappuccinoTrait::makeCappuccino as public
//traits can be chained
//traits can use abstract methods/properties
//traits can use static methods/properties
//static methods/properties in traits are always late bound
//final keyword can be used
//traits can override final functions from classes

$coffeeMaker = new \App\CoffeeMaker();
$coffeeMaker->makeCoffee();

echo '<br>';
echo '<br>';

$latteMaker = new \App\LatteMaker();
$latteMaker->makeCoffee();
echo '<br>';
$latteMaker->makeLatte();

echo '<br>';
echo '<br>';

$cappuccinoMaker = new \App\CappuccinoMaker();
$cappuccinoMaker->makeCoffee();
echo '<br>';
$cappuccinoMaker->makeCappuccino();

echo '<br>';
echo '<br>';

$allInOne = new \App\AllInOneCoffeeMaker();
$allInOne->makeCoffee();
echo '<br>';
$allInOne->makeLatte();
echo '<br>';
$allInOne->makeCappuccino();