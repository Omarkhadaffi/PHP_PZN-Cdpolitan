<?php 

// UNTUK MENGECEK NULL

///TANPA NULL COALESCING
$data=[]; 
if (isset($data['action'])){
    $action=$data['action'];
}else{
    $action='nothing'; 
}
// echo $action . PHP_EOL;

///DENGAN NULL COALESCING
$data=[]; 
$action=$data['action'] ?? 'nothing'; 
echo $action;






?>