<?php

include '../../Samuel/conexao/conexao.php';
include '././cabecalho_projeto_php.php';
include 'ClassesProjeto.php';

$nombre = $_GET['valor1'];
$ubicacion = $_GET['valor2'];
$tipoDeUser = $_GET['valor3'];
$loginDeUser = $_GET['valor4'];
$contrasenha = $_GET['valor5'];
$todaciudad = $_GET['valor6'];

$returnCadastro = classesProjeto::cadastro3($conexao, $nombre, $ubicacion, $todaciudad, $tipoDeUser, $loginDeUser, $contrasenha);

if ($returnCadastro) {

    header('Location:./relatorio_projeto.php');
} else {
    echo 'Erro';
}

?>