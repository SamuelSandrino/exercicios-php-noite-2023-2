<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funcao-some-e-media</title>
</head>

<body>
<!-- 1 - Faça um programa, com uma função que necessite de três argumentos, e que forneça a soma desses três argumentos
 através de uma função. Seu script também deve fornecer a média dos três números, através de uma segunda função
 que chama a primeira. Obs. faça uma validação para não deixar o usuário enviar inputs vazios. -->
 
 <form>

<input type="number" placeholder="insira o 1º número" id="num1">
<input type="number" placeholder="insira o 2º número" id="num2">
<input type="number" placeholder="insira o 2º número" id="num3">
<input onclick="Calcular()" type="button" value="Realizar Cálculo">

</form>

<script>
function Calcular() {
    let numero1 = document.querySelector('#num1').value;
    let numero2 = document.querySelector('#num2').value;
    let numero3 = document.querySelector('#num3').value;

   
    window.open(`back-Exercicio1.php?_Numero1=${numero1}&&_Numero2=${numero2}&&_Numero3=${numero3}`);
}
</script>





</body>


</html>