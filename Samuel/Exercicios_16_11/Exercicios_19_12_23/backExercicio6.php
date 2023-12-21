<?php
$escolha1 = $_GET['_Numero1'];
$escolha2 = $_GET['_Numero2'];


if ($escolha1 == 1){

   $Meuarray = [2, 90, 100, 1, 4, 7];
} else {
    $Meuarray = [3, 7, 13, 87, 1, 2, 69];
}


if ($escolha2 == 3) {

sort($Meuarray);

print_r($Meuarray);


} else {

rsort($Meuarray);

print_r($Meuarray);

}



?>