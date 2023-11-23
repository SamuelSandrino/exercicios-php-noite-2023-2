Repositório para os exercícios de php tarde 2023

Exemplo de Exercício, soma de 2 números

no primiero arquivo esse script abaixo

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Document</title>
    </head>
    <body>
        <form>
            <input type="number" placeholder="Num 1" id="num1">
            <input type="number" placeholder="Num 2" id="num2">

        <button onclick="soma()" type="submit">Calcular</button>
    </form>

    <script>

        function soma() {
             var num1 = document.getElementById('num1').value;
            var num2 = document.getElementById('num2').value;

                window.open(ex2.php?num1=${num1}&&num2=${num2});
        }

     </script>
</body>
</html>

-No segundo arquivo o script php abaixo

<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$result = 0;

$result = $num1 + $num2;

if ($result) {
    echo "O resultado eh: $result";
}
?>

16-11-2023

1 - Desenvolva um script com mensagens de saudações. Crie uma variável para inserir um horário e a partir do horário realizar as verificações, se o horário for até as 12 horas, escreva Bom dia, se passar das 12 e for até as 18 horas escreva boa tarde e se passar das 18 horas até a 0 horas escreva boa noite;

2 - Desenvolva um script que recebe duas notas de um aluno. Em seguida deve ser calcular a média do aluno e dar o seguinte resultado: A mensagem "Aprovado", se a média alcançada for maior ou igual a seis; A mensagem "Reprovado", se a média for menor do que seis; A mensagem "Aprovado com Distinção", se a média for igual a dez.

3 - Faça um script em PHP que leia três números inteiros e mostre eles na ordem crescente.

4 - Desenvolva um script calculadora com os 4 operadores somar, subtrair, dividir e multiplicar.

5 - O cardápio da lanchonete é dado pela tabela abaixo, insira na tela o código do produto, e retorno o produto e seu valor

Código Produto Preço Unitário (R$)
100 Cachorro quente R$ 12,70
101 Bauru Simples R$ 4,00
102 Bauru com ovo R$ 4,60
103 Hambúrguer R$ 15,00
104 Cheeseburger R$ 13,50
05 Refrigerante R$ 4,50
