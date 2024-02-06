<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "data_base";

$conexao = new mysqli($hostname, $username, $password, $dbname);

if ($conexao->connect_errno) {
    echo "Falha na conexao: (" . $conexao->connect_errno.")" .$conexao->connect_error;
}



?>