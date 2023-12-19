<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome-completo</title>
</head>

<body>
<!-- 4 - Crie um sorteador dinâmico com três entrada na tela, sendo elas, 
a primeira e a segunda entrada o gap de números que irá gerar, 
 a terceira entrada a quantidade de números que serão sorteados, e apresente na tela todos os resultados -->

    <form>

        <input type="number" placeholder="Inicia em:" id="num1">
        <input type="number" placeholder="Termina em:" id="num2">
        <input type="number" placeholder="Gerar X numeros" id="num3">
        <input onclick="sorteioTeleSena()" type="button" value="GERAR"><br>


    </form>



    <script>
        function sorteioTeleSena() {
            let numero1 = document.querySelector('#num1').value;
            let numero2 = document.querySelector('#num2').value;
            let numero3 = document.querySelector('#num3').value;
            window.open(`backExercico4Sorteador.php?_Numero1=${numero1}&&_Numero2=${numero2}&&_Numero3=${numero3}`);
        }
    </script>




</body>

</html>