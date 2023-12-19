<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício-2-temperaturas</title>
</head>

<body>
<!-- 2 - Escreva um script que pergunta ao usuário se ele deseja converter uma temperatura de grau Celsius para Farenheit 
ou vice-versa. Se ele digitar/escolher 1, é de Celsius para Farenheit, se digitar/escolher 2 é de Farenheit para Celsius,
 outro valor mostre uma mensagem de erro. Para cada conversão, chame a função correta.  -->

 <form>
<h3>Conversor de temperatura</h3>
<label>Insira a temperatura</label><br>
<input type="number" placeholder="insira a temperatura" id="temp"><br>
<input type="radio" name="escolha-temperatura" value="1"  > Celsius para Farenheit <br>
<input type="radio" name="escolha-temperatura" value="2"  > Farenheit para Celsius <br>


<input onclick="EnviarTemperatura()" type="button" value="Converter Temperatura">

</form>

<script>
function EnviarTemperatura() {
    let num1 = document.querySelector('#temp').value;
    let num2 = document.querySelector('input[name=escolha-temperatura]:checked').value;

    window.open(`backExercicio2Temperaturas.php?num1=${num1}&&num2=${num2}`);
}


</script>

</body>

</html>