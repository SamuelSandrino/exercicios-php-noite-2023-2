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

<input type="number" placeholder="insira 1 ou 2" id="temp">

<input onclick="EnviarTemperatura()" type="button" value="Converter Temperatura">

</form>

<script>
function EnviarTemperatura() {
    let num1 = document.querySelector('#temp').value;
    let valida = validarCampo(num1);

    if (valida == true) {
        window.open(`backExercicio2Temperaturas.php?_Numero1=${num1}`);
    }
}

function validarCampo(valor1) {

    if (valor1 == '' || valor1 != 1 || valor2 !=2) {
        alert('Digite um valor válido!');
        document.querySelector('#temp').focus();
        return false;
    } else {
        return true;
    }
}

</script>








</body>

</html>