<?php include 'conexao.php'; ?>
<?php
function relatorioCliente($conexao)
{
    $dados = "SELECT * FROM cliente";

    $sql_conexao = $conexao->query($dados) or die($conexao->error);

    return $sql_conexao;

}
$dadosClientes = relatorioCliente($conexao);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Exercicio-conexao</title>
</head>

<body>
    <table class="table">
        <thead>
            <td>id_cliente</td>
            <td> Cliente </td>
            <td> Nascimento </td>
            <td> Sexo </td>
            <td> Peso </td>
            <td> Altura </td>
            <td> Nacionalidade</td>
        </thead>


        <tbody>
            <?php foreach ($dadosClientes as $cliente) { ?>
                <tr>
                    <td>
                        <?php echo $cliente['id_cliente']; ?>
                    </td>
                    <td>
                        <?php echo $cliente['nome']; ?>
                    </td>
                    <td>
                        <?php echo $cliente['nascimento']; ?>
                    </td>
                    <td>
                        <?php echo $cliente['sexo']; ?>
                    </td>
                    <td>
                        <?php echo $cliente['peso']; ?>
                    </td>
                    <td>
                        <?php echo $cliente['altura']; ?>
                    </td>
                    <td>
                        <?php echo $cliente['nacionalidade']; ?>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</body>


</html>