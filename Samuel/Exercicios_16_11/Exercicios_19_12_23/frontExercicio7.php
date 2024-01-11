<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome-completo</title>
</head>

<body>
<!-- 7 - Faça um código onde irá gerar 5 números aleatórios. Com esses números gerados, 
monte um array e caso a primeira posição seja menor que 5, remova o primeiro valor. -->

<form>

        <input type="number" placeholder="Insira o número 5" id="num3">
        <input onclick="geraArray()" type="button" value="GERAR"><br>


    </form>



    <script>
        function geraArray() {

            let numero3 = document.querySelector('#num3').value;
            window.open(`backExercicio7.php?_Numero3=${numero3}`);
        }
    </script>



</body>

</html>