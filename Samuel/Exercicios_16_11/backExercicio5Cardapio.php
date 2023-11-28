<?php

$deguste = $_GET['_Numero1'];


switch ($deguste) {
    case "100":
        echo "Cachorro-quente R$12,70";
        break;

    case "101":
        echo "Bauru simpres R$4,00";
        break;

    case "102":
        echo "Bauru com ovo R$ 4,60";
        break;

    case "103":
        echo "Hambúrguer R$ 15,00";
        break;

    case "104":
        echo "Cheeseburger R$ 13,50";
        break;

    case "05":
        echo "Refrigerante R$ 4,50";
        break;

    default:
        echo "Prato não cadastrado";
        break;
}

?>