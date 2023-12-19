<?php
$meuName = $_GET['_Numero1'];
$meuCase = $_GET['_Numero2'];

if ($meuCase == 1) {
    echo "<br>".strtoupper($meuName);
} else {
    echo "<br>".strtolower($meuName);
}


?>