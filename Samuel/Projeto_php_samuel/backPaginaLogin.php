<?php include '../../Samuel/conexao/conexao.php';  ?>

<?php

function cadastro($conexao, $myLogin, $myPassword)
{
    $dados = "SELECT tipo_usuario, nome_usuario FROM tb_usuarios WHERE login = '$myLogin' AND senha = '$myPassword'";
    $sql_conexao = $conexao->query($dados) or die($conexao->error);
    
    return $sql_conexao;
}


$myLogin = $_GET['valor1'];
$myPassword = $_GET['valor2'];

$cadastro_usuario = cadastro($conexao, $myLogin, $myPassword);

foreach ($cadastro_usuario as $usuario) {
    $tipoUsuario = $usuario['tipo_usuario'];
    $nome_do_usuario = $usuario['nome_usuario'];

    if ($tipoUsuario) {
        header('Location:paginaBoasVindas.php?tipo_usuario=' .$tipoUsuario .'&NomeUsuario=' .$nome_do_usuario);
        } else{
            echo 'nome e senha incorretos';
    }

}


?>