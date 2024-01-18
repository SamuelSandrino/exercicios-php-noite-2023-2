<?php
class classePrimeira
{

    public static function soma($num1, $num2, $num3){
        $soma = $num1 + $num2 + $num3;
        return $soma;
    }



    public static function resultadoFinal($num1, $num2, $num3)
    {
        $media = self::soma($num1, $num2, $num3) / 3;
    
        $result = [
            'media' => $media,
            'soma' => self::soma($num1, $num2, $num3)
        ];
    
        return $result;
    }








    
}





?>