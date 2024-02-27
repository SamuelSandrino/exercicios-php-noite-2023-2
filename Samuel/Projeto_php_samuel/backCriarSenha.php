
<?php

include '../../Samuel/conexao/conexao.php'; 

function cadastro($conexao, $nombre, $ubicacion, $todaciudad, $tipoDeUser, $loginDeUser, $contrasenha)
{
    $dados = "INSERT INTO tb_usuarios (nome_usuario, endereco, fk_id_tb_cidades, ativo, tipo_usuario, login, senha) 
    VALUES ('$nombre', '$ubicacion', '$todaciudad'   , '1'  , '$tipoDeUser', '$loginDeUser','$contrasenha' )";
    $sql_conexao = $conexao->query($dados) or die($conexao->error);
    
    return $sql_conexao;
}


$nombre = $_GET['valor1'];
$ubicacion = $_GET['valor2'];
$tipoDeUser = $_GET['valor3'];
$loginDeUser = $_GET['valor4'];
$contrasenha = $_GET['valor5'];
$todaciudad = $_GET['valor6'];

$returnCadastro = cadastro($conexao, $nombre, $ubicacion, $todaciudad, $tipoDeUser, $loginDeUser, $contrasenha);

if($returnCadastro) {
    
    header('Location:./relatorio_projeto.php');
        } else{
            echo 'Erro';
    }



// echo $nombre;
// echo $ubicacion;
// echo $tipoDeUser;
// echo $loginDeUser;
// echo $contrasenha;










?>