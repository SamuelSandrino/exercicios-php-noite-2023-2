<?php

$PrimeiraNota = $_GET['_Nota'];
$SegundaNota = $_GET['_Nota2'];
$Media = (($PrimeiraNota + $SegundaNota)/2 );
$result ="";

// echo "$PrimeiraNota";
// echo "$SegundaNota";


if ($Media == 10) {
     $result = "Aprovado com Distinção!";
} else if ($Media >=6) {
     $result = "Aprovado!";
} else {
     $result = "Reprovado!";
}

echo "Seu resultado é:  $result";

?>