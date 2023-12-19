<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome-completo</title>
</head>

<body>
<!-- 2 - Insira seu nome na tela, e crie um script com função para retornar um array onde cada posição do array 
contenha uma parte do seu nome.-->

    <form>

        <input type="text" placeholder="Insira seu nome completo" id="info1">
        <input onclick="criaArray()" type="button" value="GERAR ARRAY"><br>

    </form>


    <script>
        function criaArray() {
            let numero1 = document.querySelector('#info1').value;F
            window.open(`backExercicio2NameArray.php?_Numero1=${numero1}`);
        }
    </script>




</body>

</html>