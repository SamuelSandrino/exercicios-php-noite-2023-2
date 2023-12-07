<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>

<body>  
<!-- 2 - Desenvolva um script que recebe duas notas de um aluno. Em seguida deve ser calcular a média do aluno e dar o seguinte resultado:
 A mensagem "Aprovado", se a média alcançada for maior ou igual a seis; A mensagem "Reprovado", se a média for menor do que seis; 
 A mensagem "Aprovado com Distinção", se a média for igual a dez. (switch case) -->

 <form>

<input type="number" placeholder="Nota 1" id="fsNota">
<input type="number" placeholder="Nota 2" id="scNota">
<input onclick="CalcMedia()" type="button" value="VER MÉDIA">

</form>



 <script>
        function CalcMedia() {
            let Nota1 = document.querySelector('#fsNota').value;
            let Nota2 = document.querySelector('#scNota').value;
            
            window.open(`phpBackDaMedia.php?_Nota=${Nota1}&&_Nota2=${Nota2}`);
        }
    </script>


</body>
</html>