<?php

echo "PERTANYAAN PERTAMA" . PHP_EOL . "Bagaimana Menurut Anda tentang Orang yang mendukung/mempromosikan LGBT?" . PHP_EOL;
sleep(2.7);

$a = "Goblok";
$b = "Benar";
$jawaban = readline("$a/$b ?");

if ($jawaban == "Goblok"){
    echo "Selamat, anda berakal!";
} else{
    echo "TOLOL BANGET SIH LU ANJING";
}
