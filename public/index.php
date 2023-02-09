<?php

declare(strict_types=1);


require __DIR__ . '/../vendor/autoload.php';
//runtime: the interpreter is reading live information
//compiled: the interpreter checks all the code, compiles it and runs it

//late binding: property-binding happens at runtime

//$a = new \App\ClassA();
//$b = new \App\ClassB();

//echo $a->getName();
//echo $b->getName();

//self keyword always references its own class which the code is executed.
//= early binding

//static keyword uses late binding
//echo \App\ClassA::getName();
//echo \App\ClassB::getName();


var_dump(\App\ClassB::make());