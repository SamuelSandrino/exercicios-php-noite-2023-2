<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio-Tabuada</title>
</head>

<body>
    <!-- DESAFIO: Desenvolva um script com front e back end, onde o usuário escolhe um número (do 1 ao 10) e na tela apareça
 a tabuada calculada escolhida. Detalhe: o campo de escolha deve ser do tipo “select” e as opções dos números devem
  ser dinâmicas através de um “for” dentro do select. Ou seja nesse exercício, deve-se misturar o PHP com o HTML,
   tomem cuidado e lembrem-se das aberturas das Tags necessárias.     -->
    <form>

        <input type="number" placeholder="Insira um número" id="num1">
        <label>Operação</label>
        <select name="operacoesMath" id="calc1">
            <option value="1">Somar</option>
            <option value="2">Subtrair</option>
            <option value="3">Divisão</option>
            <option value="multiplicar">Multiplicação</option>
            <option value="somar">Somar</option>
            <option value="somar">Somar</option>
            <option value="somar">Somar</option>
            <option value="somar">Somar</option>
            <option value="somar">Somar</option>
            <option value="somar">Somar</option>
        </select>
        <input onclick="calculaFatorial()" type="button" value="FATORIAL">

    </form>



    <script>
        function calculaFatorial() {
            let numero1 = document.querySelector('#num1').value;
            window.open(`backExercicio23_11.php?_Numero1=${numero1}`);
        }
    </script>






</body>


</html>