<?php 

$name = "Omar";

echo "Name : ";
$name = null;
echo "\n";

echo "Age : ";
$age = null;
echo "\n";

echo $name;

//NGECEK NULL ATAU GAK
echo "Is Name Null? : ";
echo var_dump(is_null($name)) ;
echo "\n";

//NGEHPAPUS VARIABLE
$contoh = "omaar";
unset($contoh);


//cara lebih aman untuk ngecek variabel itu ada dan nialinya tidak NULL
$contoh = "omarrr";
var_dump(isset($contoh));
echo "\n";


//PLAYGROUND



$name = null;
echo "Name : $name ";
echo "\n";


$age = 17;
echo "Age : $age ";
echo "\n";


$dom = "jakarta";
echo "Domisili : $dom";
echo "\n";

echo "Where Is Name ?";
echo "\n";
var_dump(isset($name));















?>