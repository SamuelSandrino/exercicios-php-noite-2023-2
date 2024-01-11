<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome-completo</title>
</head>

<body>
    <!-- 8 - Crie uma função que receba um array de 5 números inteiros, os valores serão passados pelo usuário,
 e retorne a soma de todos os elementos desse array. -->

    <form>

        <label> Insira 5 números separados por vírgula </label> <br>
        <input type="text" placeholder="Insira 5 numeros" id="num3">
        <input onclick="geraArray()" type="button" value="GERAR"><br>


    </form>



    <script>
        function geraArray() {

            let numero3 = document.querySelector('#num3').value;
            window.open(`backExercicio8.php?_Numero3=${numero3}`);
            
        }
    </script>



</body>

</html>