<?php

$menor = $_GET['_Numero1'];
$meio = $_GET['_Numero2'];
$maior = $_GET['_Numero3'];
$temp = 0;


if ($meio < $menor) {
    $temp = $meio;
    $meio = $menor;
    $meio = $temp;
  
}

if ($maior < $menor) {
    $temp=$menor;
   $menor=$maior;
   $maior=$temp;
  
}
if ($maior < $meio) {
    $temp=$meio;
    $meio=$maior;
    $maior=$temp;
  
}

echo "$menor < $meio < $maior";
?>