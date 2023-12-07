<?php
$valor1 = $_GET['num1'];
$valor2 = $_GET['num2'];



if ($valor2 == 1) {
    C_para_F($valor1);
} else {
    F_para_C($valor1);
}



function C_para_F($celsius)
{
    $result = ($celsius * 1.8) + 32;

    echo 'O valor da temperatura em Farenheit é: ' . number_format($result,2);
}


function F_para_C($farenheit)
{

    $result = ($farenheit - 32) * (5 / 9);

    echo 'O valor da temperatura em Celsius é: ' .number_format($result,2);
}

?>