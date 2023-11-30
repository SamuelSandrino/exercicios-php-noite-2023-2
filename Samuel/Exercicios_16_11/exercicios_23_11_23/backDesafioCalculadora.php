<?php
$GeraTab = $_GET['valor1'];



if ($GeraTab > 0 && $GeraTab <11)
{
    for ($i=0; $i<11; $i++) 
    {
      echo "$i * $GeraTab =  $i*$GeraTab";
    }
}


?>