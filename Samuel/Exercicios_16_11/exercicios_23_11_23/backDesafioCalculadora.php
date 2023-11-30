<?php
$GeraTab = $_GET['valor1'];



if ($GeraTab > 0 && $GeraTab <11)
{
    for ($i=1; $i<11; $i++) 
    {
      $resultado = $i*$GeraTab;

      echo "$GeraTab X $i = $resultado<br>"; 
    }
}


?>