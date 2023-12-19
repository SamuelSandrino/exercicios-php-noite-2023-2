<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome-completo</title>
</head>

<body>
<!-- 5 - Escreva uma programa que receba a data de nascimento, calcule quantos dias de vida você já está 
abrilhantando esse mundão. -->

    <form>

        <input type="date" placeholder="Insira sua data de Nascimento" id="num1">

        <input onclick="calculaIdade()" type="button" value="CALCULAR IDADE"><br>


    </form>



    <script>
        function calculaIdade() {
            let numero1 = document.querySelector('#num1').value;
            window.open(`backExercicio5Idade.php?_Numero1=${numero1}`);
        }
    </script>




</body>

</html>