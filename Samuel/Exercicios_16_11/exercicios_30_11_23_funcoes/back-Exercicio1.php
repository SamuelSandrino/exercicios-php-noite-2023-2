<?php
$primer = $_GET['_Numero1'];
$segun = $_GET['_Numero2'];
$tercer = $_GET['_Numero3'];


function resultadoFinal($primer, $segun, $tercer)
{
    $media = soma($primer, $segun, $tercer);

    $result = [
        'media' => $media,
        'soma' => soma($media, $segun, $tercer)
    ];
    return $result;
}


function soma($primer, $segun, $tercer){
    $soma = $primer + $segun + $tercer;
    return $soma;
}

$resultado = resultadoFinal($primer, $segun, $tercer);

var_dump($resultado);

echo "<br> A soma é  ".$resultado['soma']. "  e da média é: ".$resultado['media'];

?>