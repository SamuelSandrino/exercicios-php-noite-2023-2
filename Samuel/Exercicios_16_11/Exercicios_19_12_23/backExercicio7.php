<?php
$dados = $_GET['_Numero3'];
$array =[];



for ($i=1; $i <= $dados; $i++) {

    $numeraiada = rand( 1,6);
    // echo $numeraiada.'<br>';

    array_push($array,$numeraiada);
    
    }

print_r($array);
echo "<br>";
echo $array[0];
echo "<br>";

if ($array[0] <5) {
    array_shift($array);
    echo "<br>";

}
echo "<br>";
print_r($array);

?>