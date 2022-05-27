<?php 

#BREAK
$counter = 1;

while (true) {
	#echo "Hello Break : " . $counter . PHP_EOL;
	$counter++;

	if ($counter > 10) {
			break;
	}
}



for ($i=0; $i <= 1000; $i++) {
	if ($i % 2 == 1) {
		continue;
	}

	echo "Urutan Ke-$i" . PHP_EOL;
}






?>