<?php include './../conexao/conexao.php';
include 'ClassesProjeto.php';
?>
<?php
$dadosClientes = classesProjeto::relatorioCliente($conexao);
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
            <td>Nome do usuário</td>
            <td> CPF </td>
            <td> Data Nascimento </td>
            <td> Telefone </td>
            <td> Endereço </td>
            <td> Número casa </td>
            <td> Bairro </td>
            <td> Ativo </td>
            <td> tipo </td>
            <td> login </td>
            <td> senha </td>

        </thead>


        <tbody>
            <?php foreach ($dadosClientes as $cliente) { ?>
                <tr>
                    <td>
                        <?php echo $cliente['nome_usuario']; ?>
                    </td>
                    <td>
                        <?php echo $cliente['cpf']; ?>
                    </td>
                    <td>
                        <?php echo $cliente['data_nascimento']; ?>
                    </td>
                    <td>
                        <?php echo $cliente['telefone']; ?>
                    </td>
                    <td>
                        <?php echo $cliente['endereco']; ?>
                    </td>
                    <td>
                        <?php echo $cliente['num_casa']; ?>
                    </td>
                    <td>
                        <?php echo $cliente['bairro']; ?>
                    </td>
                    <td>
                        <?php echo $cliente['ativo']; ?>
                    </td>
                    <td>
                        <?php echo $cliente['tipo_usuario']; ?>
                    </td>
                    <td>
                        <?php echo $cliente['login']; ?>
                    </td>
                    <td>
                        <?php echo $cliente['senha']; ?>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</body>


</html>