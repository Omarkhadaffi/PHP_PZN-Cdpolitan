<?php

function foo()
{
    echo "Foo" . PHP_EOL;
}

function bar()
{
    echo "Bar" . PHP_EOL;
}

$functionYangAkanDipanggil = "foo";
$functionYangAkanDipanggil();

$functionYangAkanDipanggil = "bar";
$functionYangAkanDipanggil();

#PENGGUNAANNYA
function SayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name) : string{
    return "Sample $name";
}

sayHello("Omar", "strtoupper");
sayHello("Omar", "strtolower");
sayHello("Omar", "sampleFunction");