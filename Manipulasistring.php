<?php 


$name = "Omar Khadaffi";

echo "Nama : " . $name . PHP_EOL; //PHP_EOL --> \n
echo "Nilai : " . 100 . "\n";

//CONVERSI TIPE DATA
$valueString = (string)100;
var_dump($valueString);

$valueInteger = (int)"100"; 
$valueIntegersalah = (int)"salah"; //kalo datanya gak valid, jadinya 0
var_dump($valueInteger);

$valueFloat = (float)"1.01";
var_dump($valueFloat);

//MENGAKSES KARAKTER
$name = "Omar";

echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;

//variable parsing
$name = "Omar";
echo "Hello $name, Selamat Belajar" . PHP_EOL;

//aslinya harus gini
// echo "Hello " . $name . "Selamat Belajar" . PHP_EOL;


///CURLY BRACE
$var = "var";
echo "This is {$var}s" . PHP_EOL;


$nama = "Omar";
$benda = "car";


echo "this is {$nama}'s $benda"






?>