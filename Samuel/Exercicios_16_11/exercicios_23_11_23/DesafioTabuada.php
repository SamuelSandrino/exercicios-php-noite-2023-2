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

        <label>Escolha a Tabuada</label>
        <select name="operacoesMath" id="calc1">
            <option value="1">Tabuada do 1</option>
            <option value="2">Tabada do 2 </option>
            <option value="3">Tabuada do 3 </option>
            <option value="4">Tabuada do 4 </option>
            <option value="5">Tabuada do 5 </option>
            <option value="6">Tabuada do 6 </option>
            <option value="7">Tabuada do 7 </option>
            <option value="8">Tabuada do 8 </option>
            <option value="9">Tabuada do 9 </option>
            <option value="10">Tabuada do 10 </option>
        </select>
        <input onclick="GeraCalculadora()" type="button" value="GERAR">

    </form>



    <script>
        function GeraCalculadora() {
            let gerador = document.querySelector('#calc1').value;
            window.open(`backDesafioCalculadora.php?valor1=${gerador}`);
        }
    </script>






</body>


</html>