<?php

echo "Anonymous function <br><br>";

$array = [10,13,15,20,25,27,29,35,40];

echo "<pre>"; print_r($array); echo "<pre>";

$numeros = array_filter($array, function($item) {
    return $item % 10 == 0;
});
echo"<br>multiplos<br>";
echo "<pre>"; print_r($numeros); echo "<pre>";

//----------------------------------------------------------------------
//arrow functions
//basicamente simplifica a função anônima

echo"Arrow function <br><br>";


$array = [10,13,15,20,25,27,29,35,40];

echo "<pre>"; print_r($array); echo "<pre>";

$numeros = array_filter($array, fn($item) => $item % 5 == 0);
    
echo "pre"; print_r($array); echo "<pre>";
echo"<br>multiplos<br>";
echo "<pre>"; print_r($numeros); echo "<pre>";

//---------------------------------------------------------------------------
//função recursiva 
echo "REcursiva <br><br>";

function dividir($numero) {
    $result = $numero / 2;
    echo"$numero <br>";

    if (round ( $result) > 0) {
        dividir($result);
    }
}

dividir(50);
//-------------------------------------------------------------------------------
//função número absoluto (numero positivo)
echo "<br> Absoluto <br>";
$num = -9.5;

//echo $num."<br>"
echo abs($num);

//-------------------------------------------------------------------------------
//função pi
echo "<br><br> Pi <br>";

echo pi();

//--------------------------------------------------------------------------------
//função arredondar para baixo
echo "<br> Arredondar para baixo <br>";

$n = 2.8;
echo $n."<br>";

echo floor($n);

echo "<br> Arredondar para cima";
$n = 3.3;
echo "<br>" .$n2."<br>";

echo ceil($n2);

//aredondar
echo "<br> Arredondar <br>";
$n3 = 10.9;
echo"<br>".$n3."<br>";

echo round($n3);

echo"<br><br> arredondar casas decimais <br>";
$n4 = 3.653647;
echo "<br>" .$n4."<br>";

$testePi = pi();
echo "<br>".&testePi;
echo round($n4,2);
echo "<br>".round($testePi,2);

//--------------------------------------------------------------------------------
// função número aleatório
echo"<br><br> Número aleatório <br>";

$randomico = rand(2,100);
echo $randomico;

//--------------------------------------------------------------------------------
//num menor e maior do array 
echo "<br><br> Numero num maior";

$nMaior = [3,6,8,9,10,15,25,99];

echo max($nMaior);

echo"<br><br> Número num menor<br>";

$nMenor = [2,3,6,1,3,16,4,7,0];

echo min($nMenor);

//--------------------------------------------------------------------------------
//Manipulando strings 
echo "Manipulação de string <br>";
echo "<br> Retirar espaços (interessante para o pesquisar cliente)";

$nomeComEspaco = "    Edson   ";

$nomeSemEspaco = trim($nomeComEspaco);

echo "<br> com espaço".strlen($nomeComEspaco);
echo "<br> com espaço".strlen($nomeSemEspaco);

//--------------------------------------------------------------------------------
//função lower/upper
echo"<br><br> Lower case <br>";

$nome1 = "Edson Tiepermann";

echo "<br>".strtolower($nome1);
echo "<br><br> UPPER case <br>";

echo "<br>".strtoupper($nome1);

//--------------------------------------------------------------------------------------
//função recuperar alguns caracteres;
echo "<br><br> Escolher algumas Strings <br>";

$nome2 = "Tiepermann";

echo "<br>".$nome2;
echo "<br>"substr($nome2,3,4);
echo "<br>".substr($nome2, -5,3);

//-----------------------------------------------------------------------------------------
//função recuperar alguns caracteres
echo "<br><br> Procurar algo na string <br>";

echo $posicao = strpos($nome2,"o");

//------------------------------------------------------------------------------------------

echo "<br><br> Transformar o nome no array <br>";

echo $nomeCompleto = "Edson Luiz Tiepermann Junior<br>";
$nomeArray = explode(" ",$nomeCompleto);

print_r($nomeArray);

//-------------------------------------------------------------------------------------------
echo "<br><br> Formatura números<br>";

$numeroFormatar = 2569.5555;
echo"<br>".$numeroFormatar;
echo "<br>".number_format($numeroFormatar, 2, ".",".");

//--------------------------------------------------------------------------------------------
















?>