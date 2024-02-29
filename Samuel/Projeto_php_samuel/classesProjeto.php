<?php
class ClassesProjeto
{

    public static function cadastro($conexao, $myLogin, $myPassword)
    {
        $dados = "SELECT tipo_usuario, nome_usuario FROM tb_usuarios WHERE login = '$myLogin' AND senha = '$myPassword'";
        $sql_conexao = $conexao->query($dados) or die($conexao->error);

        return $sql_conexao;
    }


    public static function relatorioUser($conexao)
    {
        $dados = "SELECT * FROM tb_usuarios";

        $sql_conexao = $conexao->query($dados) or die($conexao->error);

        return $sql_conexao;

    }

    public static function relatorioCliente($conexao)
    {
        $dados = "SELECT * FROM tb_usuarios";

        $sql_conexao = $conexao->query($dados) or die($conexao->error);

        return $sql_conexao;

    }



    public static function cadastro2($conexao)
    {
        $dados = "SELECT * FROM  tb_cidades";
        $sql_conexao = $conexao->query($dados) or die($conexao->error);

        return $sql_conexao;
    }

    public static function cadastro3($conexao, $nombre, $ubicacion, $todaciudad, $tipoDeUser, $loginDeUser, $contrasenha)
    {
        $dados = "INSERT INTO tb_usuarios (nome_usuario, endereco, fk_id_tb_cidades, ativo, tipo_usuario, login, senha) 
    VALUES ('$nombre', '$ubicacion', '$todaciudad'   , '1'  , '$tipoDeUser', '$loginDeUser','$contrasenha' )";
        $sql_conexao = $conexao->query($dados) or die($conexao->error);

        return $sql_conexao;
    }


}


?>