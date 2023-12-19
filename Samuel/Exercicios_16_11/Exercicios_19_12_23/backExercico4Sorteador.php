<?php
$inciaEm = $_GET['_Numero1'];
$terminaEm = $_GET['_Numero2'];
$quantasDezenas = $_GET['_Numero3'];

for ($i=1; $i <= $quantasDezenas; $i++) {

$randomico = rand( $inciaEm,$terminaEm);
echo $randomico.'<br>';

}


?>