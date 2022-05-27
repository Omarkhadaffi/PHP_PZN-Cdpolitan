<?php 

$nilai = "C";

switch ($nilai) {
    case "A":
        echo "Anda lulus dengan sangat baik". PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda Tidak Lulus". PHP_EOL;
        break;
    default:
        echo "Mungkin Anda salah Jurusan";
        break;
}

//Syntax Alternatif (Tanpa  pake kurung kurawal {})
$nilai = "C";
switch ($nilai) :
    case "A":
        echo "Anda lulus dengan sangat baik". PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda Tidak Lulus". PHP_EOL;
        break;
    default:
        echo "Mungkin Anda salah Jurusan";
        break;
endswitch; //Wajib tambah ini













?>