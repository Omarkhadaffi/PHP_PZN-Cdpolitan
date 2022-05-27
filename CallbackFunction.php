<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Omar", "strtoupper");
sayHello("Omar", "strtolower");
sayHello("Omar", function (string $name):string{
    return strtoupper($name);
});
sayHello("Omar", fn($name) => strtoupper($name));
