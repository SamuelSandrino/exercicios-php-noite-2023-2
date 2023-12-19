<?php
$meuNiver = $_GET['_Numero1'];

$dataHj = date('Y/m/d');

$difDatas = abs((strtotime($meuNiver) - strtotime($dataHj)));

echo $anos = floor($difDatas /(60*60*24*30*12));

?>