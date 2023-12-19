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
echo "<br>".$testePi;
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
echo "<br>".substr($nome2,3,4);
echo "<br>".substr($nome2, -5,3);

//-----------------------------------------------------------------------------------------
//função recuperar alguns caracteres
echo "<br><br> Procurar algo na string <br>";

echo $posicao = strpos($nome2,"o");

//------------------------------------------------------------------------------------------

echo "<br><br> Transformar o nome no array <br>";

echo $nomeCompleto = "Edson Luiz Tiepermann Junior<br>";
$nomeArray = explode(";",$nomeCompleto);

print_r($nomeArray);

//-------------------------------------------------------------------------------------------
echo "<br><br> Formatura números<br>";

$numeroFormatar = 2569.5555;
echo"<br>".$numeroFormatar;
echo "<br>".number_format($numeroFormatar, 2, ".",".");

//--------------------------------------------------------------------------------------------
//MANIPULAÇÃO DE ARRAY 
echo "<br><br> Contar quantas posições tem no array <br>";

$listaArray = [1, "Edson", 211, "Odonto", "Lions"];

echo "Total: ".count($listaArray);

//--------------------------------------------------------------------------------------------
echo "<br><br> Difernça entre os arrays <br>";

$listaAlunos = ["João", "Edson", "Rodrigo", "Odonto", "Lions"];
$alunosAprovados = ["João","Edson"];

$reprovados = array_diff($listaAlunos, $alunosAprovados);

print_r($reprovados);

//---------------------------------------------------------------------------------------------
echo "<br><br> Filtrar algo no array <br>";
// deve contar true or false

$numArray = [1,112,25,36,85];

$filtradod = array_filter($numArray, fn($item) => $item < 86);

print_r($filtradod);

//-----------------------------------------------------------------------------------------------
echo "<br><br> Alteração de Array <br>";
//não serve para realizar filtros
$numArray = [1,112,25,36,85];

$resultado2 = array_map( function($item){
    return $item * 2;

}, $numArray);

print_r($resultado2);

//------------------------------------------------------------------------------------------------
echo "<br><br> Remove o último ítem do Array <br>";

$numArray = [1,112,25,36,85];

array_pop($numArray);
print_r($numArray);

//------------------------------------------------------------------------------------------------
echo "<br><br> Remove o primeiro ítem do Array <br>";

$numArray = [1,112,25,36,85];

array_shift($numArray);;

print_r($numArray);

//------------------------------------------------------------------------------------------------
echo "<br><br> Buscar algo no Array <br>";

$numArray = [1,112,25,36,85];

if(in_array(85, $numArray)) {
    echo "Tem";
} else {
    echo "Não tem";
}

//------------------------------------------------------------------------------------------------
echo "<br><br> Buscar algo no Array e se tiver retornar a posição<br>";

$numArray = [1,112,25,36,85];

$pos = array_search(85, $numArray);

echo $pos;

//------------------------------------------------------------------------------------------------
echo "<br><br> Ordenar em ordem crescente <br>";

$numArray = [1,112,25,36,85];

sort($numArray);

print_r($numArray);

//------------------------------------------------------------------------------------------------
echo "<br><br> Ordenar em ordem decrescente <br>";

$numArray = [1,112,25,36,85];

rsort($numArray);

print_r($numArray);
//------------------------------------------------------------------------------------------------
echo "<br><br> Ordenação em ordem crescente mantendo a chave <br>";

$numArray = [1,112,25,36,85];

asort($numArray);

print_r($numArray);

//------------------------------------------------------------------------------------------------

echo "<br><br> Ordenação em ordem decrescente mantendo a chave <br>";

$numArray = [1,112,25,36,85];

arsort($numArray);

print_r($numArray);

//------------------------------------------------------------------------------------------------
echo "<br><br> Desctruindo um array e montando uma string <br>";
//implode super importante

$ArrayNomeCompleto = ["Edson","Luiz","Tieperman","Juniro"];

print_r($ArrayNomeCompleto);

$string = implode(" ", $ArrayNomeCompleto);

echo "<br><br> String montada: $string";
echo '<br>';
echo '<br>';

//------------------------------------------------------------------------------------------------
//No geral se trabalha com milesgundos 01011970(começam a contar em 1970)
date_default_timezone_set('America/Sao_Paulo');

echo'<br>';
echo time();
echo '<br>';

echo date('d'); echo'<br>';
echo date('l');

echo '<br>';

echo date('d-m-Y');
echo '<br>';
echo date('d/m/Y H:i:s');
echo '<br>';

//------------------------------------------------------------------------------------------------
echo "<br><br> Manipulando data, formato internacional";
echo '<br>';
$data = '2023-03-01';

$echo = "$data  data de inico do curso";
echo '<br>';

$milesegundos = strtotime($data);
echo $milesegundos;
echo '<br>';
echo date('d-m-Y', $milesegundos);

echo '<br>';
echo '<br>';

//------------------------------------------------------------------------------------------------
echo "<br><br> Difernça entre datas <br>";
echo '<br>';

$dataInicioAno = "2023-01-01";
$dataHj = date('Y/m/d');

$difDatas = abs((strtotime($dataInicioAno) - strtotime($dataHj)));

echo $dias = floor($difDatas /(60*60*24));

?>