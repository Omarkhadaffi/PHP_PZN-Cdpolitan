<?php

$firstname = "Omar";
$lastname = "Khadaffi";

$anonymousFunction = function () use ($firstname, $lastname) : string {
    return "Hello $firstname $lastname" . PHP_EOL;
};

$arrowFunction = fn() => "Hello $firstname $lastname" . PHP_EOL;

echo $anonymousFunction();
echo $arrowFunction();

$a = 4;
$b  = 3;

$rumusPersegi = fn() => "Sisi C adalah : " . (sqrt($a*$a + $b*$b)) . PHP_EOL;

echo $rumusPersegi();
