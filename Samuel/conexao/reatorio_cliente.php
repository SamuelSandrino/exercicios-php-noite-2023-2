<?php include 'conexao.php'; ?>
<?php
function relatorioUser($conexao)
{
    $dados = "SELECT * FROM tb_usuarios";

    $sql_conexao = $conexao->query($dados) or die($conexao->error);

    return $sql_conexao;

}
$dadosUsuarios = relatorioUser($conexao);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>relatorio-projeto-php</title>
</head>

<body>
    <table class="table">
        <thead>
            <td>Nome </td>
            <td> Endereço </td>
            <td> Tipo </td>
            <td> login </td>
            <td> Senha </td>
            <td> cidade </td>
        
        </thead>


        <tbody>
            <?php foreach ($dadosUsuarios as $user) { ?>
                <tr>
                    <td>
                        <?php echo $user['nome_usuario']; ?>
                    </td>
                    <td>
                        <?php echo $user['endereco']; ?>
                    </td>
                    <td>
                        <?php echo $user['tipo_usuario']; ?>
                    </td>
                    <td>
                        <?php echo $user['login']; ?>
                    </td>
                    <td>
                        <?php echo $user['senha']; ?>
                    </td>
                    <td>
                        <?php echo $user['fk_id_tb_cidades']; ?>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</body>


</html>

<script>    




</script> 