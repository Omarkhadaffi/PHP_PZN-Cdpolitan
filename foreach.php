<?php 

#TANPA FOR EACH
$names = ["Omar","Khadaffi","Sulistiyoso"];

for ($i = 0; $i < count($names); $i++){
    echo "Hello $names[$i]" . PHP_EOL;
}

#DENGAN FOR EACH
$names = ["Omar", "Khadaffi", "Sulistiyoso"];

foreach ($names as $index => $name){
    echo "Data ke $index = $name". PHP_EOL;
}

#For EAACH DENGAN KEY
$person=[
    "first_name" => "Muhamad",
    "middle_name" => "Omar",
    "Last_name" => "Khadaffi"
];

foreach ($person as $key => $value){
    echo "$key : $value".PHP_EOL;
}








?>