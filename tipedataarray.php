<?php 

$values = array(10, 9, 8, 7.5);
//var_dump($values);

$names = ["omar", "khadaffi", "tinggi"];
//var_dump($names);

//OPERASI ARRAY
//Mengakses data array
var_dump($names[0]); echo"\n";
//Mengubah data pada nomor index
$names[0] = "Ahmad";
var_dump($names);
//Menambah data pada posisi paling belakang array
$names[] = "Handoyo";
//menghapus data di array, index hilang
unset($names[1]);
var_dump($names);
//mengambil total data di array
var_dump(count($names));



//ARRAY SEBAGAI MAP
$omar = array(
    "id"=>"omar",
    "Dom" =>"Jakarta",
    "age" =>17
);
//Nama index harus unique, gaboleh sama. Kalo ada yang sama, dipake satu aja.
var_dump($omar);

var_dump($omar["id"]);
var_dump($omar["age"]);
var_dump($omar["dom"]);



$majid = [
    "id" => "mjd",
    "dom" => "Tegalwaton",
    "age" => 19
];
var_dump($majid);




//NESTED ARRAY (ARRAY DALAM ARRAY)
$omar = array(
    "id"=>"omar",
    "dom" =>array(
        "kec" => "Jatinegara",
        "kel" => "Bidara Cina"
    ),
    "age" =>17
);
var_dump($omar);
var_dump($omar["dom"]["kel"]);


$majid = [
    "id" => "mjd",
    "dom" => [
        "kec"=> "Tengaran",
        "kel"=> "NamaKotaBagus" 
    ],
    "age" => 19
];
var_dump($majid);
var_dump($majid["dom"]["kec"]);
?>