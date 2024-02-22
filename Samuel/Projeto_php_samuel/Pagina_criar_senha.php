
<?php
include '../../Samuel/conexao/conexao.php'; 

function cadastro($conexao)
{
    $dados = "SELECT * FROM  tb_cidades";
    $sql_conexao = $conexao->query($dados) or die($conexao->error);
    
    return $sql_conexao;
}

$cidadeNova = cadastro($conexao);
?>

<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>fomulario de Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="style.css" />

</head>

<body>

  
    <div>      
      <!--FORMULÁRIO de cadastro-->
      <div>
        <form> 
          <h1>Página para cadastro </h1> 
          <p> 
            <label>Nome do Usuário</label>
            <input id="nomeUser" name="nomeUsuario" required="required" type="text" placeholder="insira o nome"/>
          </p>
           
          <p> 
            <label>Endereço completo</label>
            <input id="adress" name="nomeUsuario" required="required" type="text" placeholder="insira o endereço"/>
          </p>
          <p> 
            <label>Tipo de usuário</label>
            <input id="tipoUser" name="nomeUsuario" required="required" type="text" placeholder="insira a função"/>
          </p>
          <p> 
            <label>Cidade</label>
            <select name="sua_cidade" id="mycity">
              <option value="-1">Escolha a cidade</option>
              <?php foreach ($cidadeNova as $nomesCities) { ?>
                <option value="<?php echo $nomesCities['id']; ?>"><?php echo $nomesCities['nome_cidade']; ?></option>
              <?php } ?>
            </select>
          </p>
          <p> 
            <label>login</label>
            <input id="loginUser" name="nomeUsuario" required="required" type="text" placeholder="crie o login"/>
          </p>
          <p> 
            <label for="senha">Senha</label>
            <input id="senhaUser" name="email_login" required="required" type="password" placeholder="crie a senha" /> 
          </p>
           
          <p> 
            
            <button onclick="enviarDados()" type="submit" value="Logar"> Criar Senha </button>
          </p>

          <script>
function enviarDados() {
    let valor1 = document.getElementById('nomeUser').value;
    let valor2 = document.getElementById('adress').value;
    let valor3 = document.getElementById('tipoUser').value;
    let valor4 = document.getElementById('loginUser').value;
    let valor5 = document.getElementById('senhaUser').value;
    let valor6 = document.getElementById('mycity').value;


        window.open(`backCriarSenha.php?valor1=${valor1}&&valor2=${valor2}&&valor3=${valor3}&&valor4=${valor4}&&valor5=${valor5}&&valor6=${valor6}`);

}

</script>
        </form>
      </div>
    </div>  
</body>