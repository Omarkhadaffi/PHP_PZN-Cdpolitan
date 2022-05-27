<?php 


$total = 0;

$buah = 1750;
$ayam = 18500;
$jusoranye = 3500;
// $discon = 50 

$total += $buah;
$total += $ayam;
$total += $jusoranye;

$discon = $total / 2;

$total -= $discon;

var_dump($total);









?>