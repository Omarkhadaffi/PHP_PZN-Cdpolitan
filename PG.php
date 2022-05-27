<?php

#Fungsi Rumus Luas Persegi Panjang
function rumusLuas($panjang, $lebar)
{
    $luas = $panjang * $lebar;
    echo "luas Persegi adalah : $luas". PHP_EOL;
}

#Fungsi Rumus Luas Pytagoras
function pytagoras($a, $b)
{
    $c = sqrt(($a*$a) + ($b*$b));
    echo "Sudut Hipotenusa dari a = $a dan b = $b," . " adalah : c = $c" . PHP_EOL;
}

#Aplikasi RumusHome
echo "Selamat datang di RumusHome!" . PHP_EOL;
    sleep(2);
echo "Kalkulasi apakah yang ingin anda hitung?" . PHP_EOL;
    sleep(1.5);
$input = readline("pitagoras/luaspersegi ?");

if ($input == "pitagoras"){
    pytagoras(readline("Masukan Sudut A : " ), readline("Masukan Sudut B : "));
} else{
    rumusLuas(readline("Masukan Panjang :"), readline("Masukan Lebar :"));
}
#Percabangan