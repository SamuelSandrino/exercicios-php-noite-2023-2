<?php
// <?php include 'cabecalho_projeto_php'; ?>


<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>fomulario de Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

  
    <div>      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form> 
          <h1>Login</h1> 
          <p> 
            <label for="nome_login">Seu nome</label>
            <input id="nome_login" name="nome_login" required="required" type="text" placeholder="insira seu nome"/>
          </p>
           
          <p> 
            <label for="email_login">Sua senha</label>
            <input id="email_login" name="email_login" required="required" type="password" placeholder="digite sua senha" /> 
          </p>
           
          <p> 
            
            <input onclick="enviarDados()" type="button" value="Logar">
          </p>
        </form>
      </div>
    </div>  
</body>

<script>
function enviarDados() {
    let valor1 = document.querySelector('#valor1').value;
    let valor2 = document.querySelector('#valor2').value;

        window.open(`backPaginaLogin.php?valor1=${valor1}&&valor2=${valor2}`);

}

</script>



</html>


?>