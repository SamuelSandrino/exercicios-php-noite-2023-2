<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome-completo</title>
</head>

<body>
<!-- 6 - Escreva um código onde o usuário possa escolher um dos arrays abaixo e selecionar se ele quer ordenar 
de maneira crescente ou de maneira decrescente. Separe as ordenações em funções diferentes e chame elas 
dependendo da escolha. Array1[2, 90, 100, 1, 4, 7] Array2[3, 7, 13, 87, 1, 2, 69] -->

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