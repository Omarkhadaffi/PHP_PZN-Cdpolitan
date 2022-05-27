<?php 

///EXPRESSION
$a = 5; //5 adalah expression

//complex
function getValue()
{
	return 100;
}

$value = getValue();


///STATEMENT

$name = "Omar Khadaffi"; // se garis ini adalah statement | "omar Khadaffi" adalah expression

echo $name; //statement

$date = new DateTime(); //statement


///BLOCK
function runApp($name)
{
	echo "Start Program" . PHP_EOL;
	echo "Hello $name" . PHP_EOL;
	echo "Eng Program" . PHP_EOL;
} 

//Kurung Kurawal itu adalah blocknya. didalamnya ada Statement, 



//Secara Umum Block, didalemnya statement, didalemnya expression (kalo function)
//di dalem statement ada expression (value)


?>