<?php include 'conexao.php'; ?>
<?php
    function relatorioCliente($conexao)
    {
        $dados = "SELECT * FROM cliente";

        $sql_conexao = $conexao->query($dados) or die($conexao->error);

        return $sql_conexao;
    }
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio-conexao</title>
</head>

<body>
<thead>
    <td>id cliente</td>
    <td> cliente</td>
    <td>nome </td>
    <td>sexo </td>
    <td></td>
    <td></td>
    <td></td>
</thead>


</body>


</html>