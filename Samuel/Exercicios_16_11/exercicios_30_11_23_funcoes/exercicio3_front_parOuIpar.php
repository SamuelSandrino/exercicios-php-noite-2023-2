<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício-3-par-ou-impar</title>
</head>

<body>
<!-- 3 - Crie uma função que receba dois valores inteiros como argumentos e retorne se os números são divisíveis, 
se forem divisíveis verifique se cada número digitado é par ou ímpar e mostre na tela também. -->

 <form>
<label>Comparador de números</label><br>
<input type="number" placeholder="digite primeiro numero" id="entrada1"><br>
<input type="number" placeholder="digite primeiro numero" id="entrada2"><br>


<input onclick="EnviaNumeros()" type="button" value="Verificar divisíveis">

</form>

<script>
function EnviaNumeros() {
    let num1 = document.querySelector('#entrada1').value;
    let num2 = document.querySelector('#entrada2').value;

    window.open(`exercicio3_Back.php?num1=${num1}&&num2=${num2}`);
}


</script>

</body>

</html>