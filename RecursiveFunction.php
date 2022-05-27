<?php

#RECURSIVE ( FACTORIAL ) PAKE LOOP
function factorialoop(int $value): int
{
    $total = 1;

    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }
    return $total;
}

var_dump(factorialoop(5));
var_dump(1*2*3*4*5);

# PAKE FACTORIAL RECURSIVE
function factorialrecursive(int $value): int
{
  if ($value == 1){
      return 1;
  }  else{
      return $value * factorialrecursive($value - 1);
  }
};

var_dump(factorialrecursive(10));

function loop(int $value) {
    if($value == 0){
        echo "End Loop" . PHP_EOL;
    } else {
        echo "Loop-$value" . PHP_EOL;
        loop($value - 1);
    }
}

loop(3000000);