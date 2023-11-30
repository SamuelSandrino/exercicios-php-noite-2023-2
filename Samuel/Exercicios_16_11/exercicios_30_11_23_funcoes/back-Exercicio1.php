<?php
$primer = $_GET['_Numero1'];
$segun = $_GET['_Numero2'];
$tercer = $_GET['_Numero3'];
// $temp = 0;



$minhaMedia = media($primer, $segun, $tercer);
$minhaSoma = soma($primer, $segun, $tercer);
$texte = number_format($minhaMedia,2);

echo "A soma nos números é:  $minhaSoma e a média dos três é:$texte";

function soma($valor1, $valor2, $valor3) {

    $total = $valor1 + $valor2 +$valor3; 
    return $total;
}


function media($num1, $num2, $num3) {

    $result = ($num1 + $num2 +$num3)/3; 
    return $result;
}





?>