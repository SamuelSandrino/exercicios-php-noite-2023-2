<?php

$PeriodoDia = $_GET['hora1'];
$Saudacao = "";


if ($PeriodoDia > 0 && $PeriodoDia <= 12) {
     $Saudacao = "Bom dia!";
} else if ($PeriodoDia > 12 && $PeriodoDia <= 18) {
     $Saudacao = "Boa tarde!";
} else if ($PeriodoDia > 18 && $PeriodoDia <= 24) {
     $Saudacao = "Boa noite!";
} else {
     $Saudacao = "Deu Ruim!";
}

echo $Saudacao;

?>