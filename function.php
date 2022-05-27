<?php
function sayHello()
{
    echo "Hello Function" . PHP_EOL;
}

#DIDALAM IF
$buat = true;

if($buat){
    function sayHello()
    {
        echo "Hello Function" . PHP_EOL;
    }
}

sayHello();