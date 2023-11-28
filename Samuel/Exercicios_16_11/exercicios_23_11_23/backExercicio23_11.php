<?php

$number = $_GET['_Numero1'];
$result=1;
$recebe=$number;


for ($i = $number; $i >=1; $i--){
    $result *= $number;
    $number--;
}

echo "O fatorial de $recebe é: $result";

?>