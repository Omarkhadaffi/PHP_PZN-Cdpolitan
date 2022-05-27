<?php 

//Tanpa ternary operator
$gender = "WANITA";
$hi = null;

if ($gender == "PRIA") {
	$hi = "Hi bro!";
} else {
	$hi = "Hi nona!";
}

echo $hi . PHP_EOL;

//pake TERNARY OPERATOR
$gender = "PRIA";
        //pengecekan  
        //   ⬇      //bener (true)
//           ⬇          ⬇         //ini else nya (false)
//           ⬇          ⬇            ⬇
$hi = $gender == "PRIA" ? "Hi Bro!" : "Hi Nona!";

echo $hi;











?>