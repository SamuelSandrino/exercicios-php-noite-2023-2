<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cardapio</title>
</head>

<body>
<!-- 5 - O cardápio da lanchonete é dado pela tabela abaixo, insira na tela o código do produto, e retorno o produto e seu valor -->
<!-- Código Produto Preço Unitário (R$)
    100 Cachorro quente R$ 12,70
    101 Bauru Simples R$ 4,00
    102 Bauru com ovo R$ 4,60
    103 Hambúrguer R$ 15,00
    104 Cheeseburger R$ 13,50
    05 Refrigerante R$ 4,50 -->
<form>

<input type="number" placeholder="Insira o código do produto" id="codigo">

<input onclick="LerCodigo()" type="button" value="APRESENTAR PRATO">

</form>



 <script>
        function LerCodigo() {
            let num1 = document.querySelector('#codigo').value;    
            window.open(`backExercicio5Cardapio.php?_Numero1=${num1}`);
        }
    </script>




</body>

</html>