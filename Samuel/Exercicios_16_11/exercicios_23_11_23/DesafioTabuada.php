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
            <?php for ($i=1; $i<11; $i++) { ?>
                <option value="1">Tabuada do <?php echo $i;?></option>
    
            <?php } ?>

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