<?php


 function Sayhello($name)
{
    echo "Hello $name" . PHP_EOL;
}

sayHello("Omar");
sayHello("Khadaffi");
sayHello(10);

#DEFAULT VALUE
#function Sayhello($name = "Guest")
{
    #echo "Hello $name" . PHP_EOL;
}


#KESALAHAN DEFAULT VALUE
#function Sayhello($fname = "Guest", $lname) #Kalau mau pake yang belakang $lname = " "
{
   # echo "Hello $fname $lname" . PHP_EOL;
}

# sayHello(, "Omar"); #Ini salah


#TYPE DECLARATION
function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}
sum(100, 100);
sum("100", "100");
sum(true, false);

#VARIABLE-LENGTH ARGUMENT LIST
function sumAll(...$values) #array ganti ...
{
    $total = 0;
    foreach ($values as $value){
        $total +=  $value;
    }
    echo "Total" . implode(",", $values) . " = $total" . PHP_EOL;
}

$values = [1, 2, 3, 4, 5];

sumAll(1, 2, 3, 4, 5); #GAUSAH PANGGIL ARRAY LAGI
sumAll(...$values); #KALAU UDH TERLANJUR BUAT ARRAYNYA, GINI PANGGILNYA