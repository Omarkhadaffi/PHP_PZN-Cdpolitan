<?php

$sayHello = function (string $name){ #tidak ada nama functionya
    echo "Hello $name" .PHP_EOL;
};

$sayHello("Omar");
$sayHello ("Khadaffi");

function sayGoodbye(string $name, $filter)
{
    $finalname = $filter($name);
    echo "Good Bye $finalname" . PHP_EOL;
}
$filterFunction = function (string $name): string {
    return strtoupper($name);
};

sayGoodbye("Omar", $filterFunction);

$firstname = "Omar";
$lastname = "Khadaffi";

$sayHelloOmar = function () use($firstname,$lastname) {
    echo "Hello $firstname $lastname" . PHP_EOL;
};

$firstname = "Budi";
$lastname = "Setyawan";

$sayHelloOmar();