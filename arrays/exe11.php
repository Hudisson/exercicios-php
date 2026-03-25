<?php 
/**
 * @author Hudisson Xavier
 * Execício 11:
 *   Dado um array de números, retorne apenas os números pares.
 */

/**
 * Função que retorna só os número pares contidos em um array
 */
function getOnlyEvenNumbers(array $arr)
{
    $OnlyEven = [];

    foreach($arr as $valor){
        if($valor %2 == 0){
            $OnlyEven[] = $valor;
        }
    }

    return $OnlyEven;
}


echo "<h2>Dado um array de números, retorne apenas os números pares</h2>";
echo "<hr>";

$array = [1,2,3,4,5,6,7,8,9,10];

echo "<b>Array completo: </b> [ ". implode(", ", $array)." ]";

echo "<br><br>";

echo "<b>Só os números pares: </b> [ ". implode(", ", getOnlyEvenNumbers($array)). " ]";
