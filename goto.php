<?php

goto a;
echo "Hello World". PHP_EOL;

a:
echo "Hello A" . PHP_EOL;

#goto Operator di Loop

$counter = 1;

while(true){
    echo "Ini adalah for while Ke-$counter" . PHP_EOL;
    $counter++;

    if($counter > 10){
        goto end;
    }
}

end:
echo "End Loop";