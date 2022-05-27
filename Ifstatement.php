<?php 

$nilai = 10;
$absen = 90;

if ($nilai >= 75 && $absen >= 75) {
	echo "Anda Lulus" . PHP_EOL;

};

//Else Statement

if ($nilai >= 75 && $absen >= 75) {
	echo "Anda Lulus" . PHP_EOL;

} else {
	echo "Maaf, Anda tidak lulus". PHP_EOL;
};


///ELSEIF STATEMENT
if ($nilai >= 80 && $absen >= 80) {
	echo "Nilai Anda A" . PHP_EOL;

} else if ($nilai >= 70 && $absen >= 70) {
	echo "NIlai Anda B" . PHP_EOL;
} else if ($nilai >= 60 && $absen >= 60) {
	echo "NIlai Anda C" . PHP_EOL;
} else if ($nilai >= 50 && $absen >= 50) {
	echo "NIlai Anda D" . PHP_EOL;
} else {
	echo "Nilai Anda E". PHP_EOL;
};


//Syntax Alternate (elseif) [pake titik dua, tapi haru ada endif]
if ($nilai >= 80 && $absen >= 80) :
	echo "Nilai Anda A" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70) :
	echo "NIlai Anda B" . PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60) :
	echo "NIlai Anda C" . PHP_EOL;
elseif ($nilai >= 50 && $absen >= 50) :
	echo "NIlai Anda D" . PHP_EOL;
else :
	echo "Nilai Anda E". PHP_EOL;
endif; //harus ada ini kalo pake [:]


?>