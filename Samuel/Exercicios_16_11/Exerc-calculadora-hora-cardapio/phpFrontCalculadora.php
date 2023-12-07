<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de quatro numeros</title>
</head>

<body>
    <!-- 4 - Desenvolva um script calculadora com os 4 operadores somar, subtrair, dividir e multiplicar.     -->
    <form>

        <input type="number" placeholder="1º número" id="num1">
        <input type="number" placeholder="2º número" id="num2">

        <label>Operação</label>
        <select name="operacoesMath" id="calc1">
            <option value="somar">Somar</option>
            <option value="subtrair">Subtrair</option>
            <option value="dividir">Divisão</option>
            <option value="multiplicar">Multiplicação</option>
        </select>

        <input onclick="Calcular()" type="button" value="Realizar Cálculo">

    </form>



    <script>
        function Calcular() {
            let numero1 = document.querySelector('#num1').value;
            let numero2 = document.querySelector('#num2').value;
            let operar = document.querySelector('#calc1').value;


            window.open(`phpBackCalculadora.php?_Numero1=${numero1}&&_Numero2=${numero2}&&_Numero3=${operar}`);
        }
    </script>



</body>


</html>