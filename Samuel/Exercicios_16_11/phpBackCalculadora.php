<?php

$primer = $_GET['_Numero1'];
$segun = $_GET['_Numero2'];
$fazer = $_GET['_Numero3'];
// $calc = "somar";
$result = 0;

switch ($fazer) {
    case "somar":
        $result = $primer + $segun;
        echo "A somatoria de $primer  mais  $segun é igual a:  $result";
        break;

    case "dividir":
        $result = $primer / $segun;
        echo "A divisão de  $primer  por $segun é igual a: $result";
        break;

    case "subtrair":
        $result = $primer - $segun;
        echo "A subtração de  $primer menos  $segun é igual a: $result";
        break;

    case "multiplicar":
        $result = $primer * $segun;
        echo "A multiplicação de $primer e $segun é igual a:  $result";
        break;

    default:
        echo "tente outra vez";
        break;
}


?>