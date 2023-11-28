<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>

<body>
    <!-- 1 - Crie um algoritmo que solicite um número, e faça o cálculo fatorial do mesmo, exiba o resultado na tela. (Utilizando decremento)
 OBS: Fatorial é a multiplicação do número por seus antecessores maiores ou iguais a 1 (Ex: fatorial de 5 = 5x4x3x2x1 => 120) -->

    <form>

        <input type="number" placeholder="Insira um número" id="num1">
        <input onclick="calculaFatorial()" type="button" value="FATORIAL">

    </form>



    <script>
        function calculaFatorial() {
            let numero1 = document.querySelector('#num1').value;
            window.open(`backExercicio23_11.php?_Numero1=${numero1}`);
        }
    </script>




</body>

</html>