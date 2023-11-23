<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício-3-php</title>
</head>


<body>
<!-- 3 - Faça um script em PHP que leia três números inteiros e mostre eles na ordem crescente. -->
<form>

<input type="number" placeholder="1º número" id="fsNumero">
<input type="number" placeholder="2º número" id="scNumero">
<input type="number" placeholder="3º número" id="trNumero">

<input onclick="LerNumero()" type="button" value="ORDENAR">

</form>



 <script>
        function LerNumero() {
            let num1 = document.querySelector('#fsNumero').value;
            let num2 = document.querySelector('#scNumero').value;
            let num3= document.querySelector('#trNumero').value;
            
            window.open(`phpBackDoExercicio.php?_Numero1=${num1}&&_Numero2=${num2}&&_Numero3=${num3}`);
        }
    </script>




</body>
</html>