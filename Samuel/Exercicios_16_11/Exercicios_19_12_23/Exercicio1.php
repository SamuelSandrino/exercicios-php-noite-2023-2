<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome-completo</title>
</head>

<body>
<!-- 1 - Crie um script para inserir o seu nome completo, e um campo de opções para escolher letras maiúsculas ou minúsculas,
 em seguida crie uma função para deixar todo o seu nome em maiúsculo e uma para deixar todo o seu nome em minúsculo,
  e utilize a função e transforme seu nome de acordo com a escolha em tela realizada. -->

    <form>

        <input type="text" placeholder="Insira seu nome completo" id="info1">
        <input onclick="ordenarNome()" type="button" value="GERAR"><br>
        <br><input type="radio" name="escolha-tipoCase" value="1"  > Todas em Maiúscula <br>
         <input type="radio" name="escolha-tipoCase" value="2"  > Todas em Minúsculas <br>

    </form>



    <script>
        function ordenarNome() {
            let numero1 = document.querySelector('#info1').value;
            let numero2 = document.querySelector('input[name=escolha-tipoCase]:checked').value;
            window.open(`backExercicio1.php?_Numero1=${numero1}&&_Numero2=${numero2}`);
        }
    </script>




</body>

</html>