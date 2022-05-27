<?php 

$counter = 1;

while ($counter <= 100) {
	echo "Hello While Loop ke-$counter" . PHP_EOL;
	$counter++;
}

//versi sederhana (Biasa pake Titik Dua)
$counter = 1;

while ($counter <= 100) :
	echo "Hello While Loop ke-$counter" . PHP_EOL;
	$counter++;
endwhile;








?>