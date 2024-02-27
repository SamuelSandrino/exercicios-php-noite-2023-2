
<?php
 include '././cabecalho_projeto_php.php'; 
 ?>

<?php 

$tipo_user = $_GET['tipo_usuario'];
$nome_user = $_GET['NomeUsuario'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina-boas-vindas</title>
</head>


<body>


<h1> Seja bem vindo <?php echo $nome_user; ?></h1>

<?php
if ($tipo_user == 1) { ?>
 
    <span> </br> Esse é o seu sistema master <br>
        Você é o administrador do sistema,
    <br> siga as orientações para <br>
         cadastras os colaboradores! </span>
        <!-- <a href= "Pagina_criar_senha.php"> <br> <button>Cadastrar usuário </button> </a> -->
<?php
}

?>

<!-- <a href= "Pagina_criar_senha.php"> <br> <button>Cadastrar usuário </button> </a>


<a href= "relatorio_projeto.php"> <br> <button>Gerar Relatório users Cadastrados </button> </a> -->





</body>





</html>

