<?php 
include 'classeAula.php';

$num1 = $_GET['valor1'];
$num2 = $_GET['valor2'];
$num3 = $_GET['valor3'];
    


$resultado = classePrimeira::resultadoFinal($num1, $num2, $num3);
// $resultado = "qualquer coisa";

// var_dump($resultado);
// print_r($resultado);

echo "<br> A soma eh ".$resultado['soma']." e da média eh: ".$resultado['media'];

?>