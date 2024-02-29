<?php include '../../Samuel/conexao/conexao.php';
include 'ClassesProjeto.php'; ?>

<?php
$myLogin = $_GET['valor1'];
$myPassword = $_GET['valor2'];

$cadastro_usuario = classesProjeto::cadastro($conexao, $myLogin, $myPassword);

foreach ($cadastro_usuario as $usuario) {
    $tipoUsuario = $usuario['tipo_usuario'];
    $nome_do_usuario = $usuario['nome_usuario'];

    if ($tipoUsuario) {
        header('Location:paginaBoasVindas.php?tipo_usuario=' . $tipoUsuario . '&NomeUsuario=' . $nome_do_usuario);
    } else {
        echo 'nome e senha incorretos';
    }

}

?>