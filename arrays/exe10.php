<?php

/**
 * @author Hudisson Xavier
 * Execício 10:
 *   Ordene um array sem usar sort()
 */

function ordenarArrayCrescente(array $arr)
{
    $temp = null;

    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr) - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                # Troca os lementos de posição
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    return $arr;
}

// ordenar o array em decrescente
function ordenarArrayDecrescente(array $arr)
{
    $temp = null;

    for ($i = count($arr); $i > 0; $i--) {
        for ($j = count($arr) - 1 - $i; $j > 0; $j--) {
            if ($arr[$j] < $arr[$j - 1]) {
                # Troca os lementos de posição
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    return $arr;
}

echo "<h2>Ordenar um array sem usar sort()</h2>";

$array = [7, 9, 5, 3];

echo "<b>Array não ordenando: </b>[ " . implode("; ", $array) . " ]<br>";
echo "<b>Array ordenando em modo crescente....: </b>[ " .
    implode("; ", ordenarArrayCrescente($array)) .
    " ]<br>";
echo "<b>Array ordenando em modo decrescente ....: </b>[ " .
    implode("; ", ordenarArrayDecrescente($array)) .
    " ]<br>";
