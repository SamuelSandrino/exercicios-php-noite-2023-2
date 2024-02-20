<?php

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
            <label for="senha">Sua senha</label>
            <input id="senha" name="email_login" required="required" type="password" placeholder="digite sua senha" /> 
          </p>
           
          <p> 
            
            <button onclick="enviarDados()" type="submit" value="Logar"> Logar </button>
          </p>
        </form>
      </div>
    </div>  
</body>
?>