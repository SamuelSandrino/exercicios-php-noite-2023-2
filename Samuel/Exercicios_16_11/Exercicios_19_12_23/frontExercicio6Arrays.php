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

        <h1>Escolha uma das arrays</h1>
        <input type="radio" name="escolha" value="1" > Array1[2, 90, 100, 1, 4, 7] <br>
        <input type="radio" name="escolha" value="2" > Array2[3, 7, 13, 87, 1, 2, 69] <br>

        <h1>Escolha a forma de ordenalção:</h1>
        <select name="select" id="select">
            <option name="escolha2" value="3"> Crescente </option>
            <option name="escolha2" value="4" selected> Decrescente </option>
        </select>

        <input onclick="ordenacoes()" type="button" value="ORDENAR"><br>


    </form>



    <script>
        function ordenacoes() {
            let numero1 = document.querySelector('input[name=escolha]:checked').value;
            let numero2 = document.querySelector('#select').value;
            window.open(`backExercicio6.php?_Numero1=${numero1}&&_Numero2=${numero2}`);
        }
    </script>




</body>

</html>