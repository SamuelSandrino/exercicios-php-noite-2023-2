<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>

<body>
    <!-- 1 - Desenvolva um script com mensagens de saudações. Crie uma variável para inserir um horário e a partir do horário realizar as verificações, 
se o horário for até as 12 horas, escreva Bom dia, se passar das 12 e for até as 18 horas escreva boa tarde e se passar das 18 horas até a 0 
horas escreva boa noite (if else);    -->
    <form>

        <input type="number" placeholder="Hora" id="horario">
        <input onclick="saudacoes()" type="button" value="VERIFICAR">

    </form>

    <script>
        function saudacoes() {
            let hora = document.querySelector('#horario').value;
            
            window.open(`phpBackDaHora.php?hora1=${hora}`);
        }
    </script>

</body>

</html>