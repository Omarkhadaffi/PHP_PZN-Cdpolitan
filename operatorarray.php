<?php 

//UNION
$first = [
    "first_name" => "Omar"
];

$last = [
    "last_name" => "Khadaffi",
    "first_name" => "joko"

];

$full = $first + $last;

// var_dump($full)

//sisanya
$a = [
    "first_name" => "omar",
    "last_name" => "Khadaffi"
];

$b = [
    "last_name" => "Khadaffi",
    "first_name" => "omar"
];

var_dump($a == $b);
var_dump($a === $b);
var_dump($a != $b);
var_dump($a !== $b);







?>