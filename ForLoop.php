<?php 

/*for(init statemnet;kondisi;post statement){
     code...
 }*/



///perulangna tanpa henti
///seakan" di kondisi selalu true, memang true terus
// for ( ; ; ){
// 	echo "Hello For Loop" . PHP_EOL
// }

//Perulangan dengan kondisi
$counter = 1;
for( ; $counter <= 10; ) {
	echo "Hello For Lop : " . PHP_EOL;
	$counter++;
}

//dengan init statement
for($counter = 1; $counter <= 10;) {
	echo "Hello For Lop : " . PHP_EOL;
    $counter++;
}

//dengan Post Statement
for($counter = 1; $counter <= 10;$counter++){
	echo "Hello For Lop : " . PHP_EOL;
}


///syntax alternative (Pake Titik Dua)
for ($counter=1; $counter <= 10; $counter++):
    echo "Hello For Loop:" . $counter . PHP_EOL;
endfor; #Tambah endfor





?>