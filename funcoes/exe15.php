<?php
/**
 * @author Hudisson Xavier
 * Execício 15:
 *   Crie uma função que calcule média de um array.
 */


function mediaValores(array $nuns)
{
    if(count($nuns) == 0){
        return 0; // retorna 0 (zero) se o array estiver vazio
    }

    $soma = array_sum($nuns); // realiza a soma dos valores 
 
    return $soma/count($nuns); // retorna a média da soma dos valores
}


echo "<h2>Crie uma função que calcule média de um array</h2>";
echo "<hr>";

$valores = [2,4];

echo "Valores: [". implode("; ", $valores)." ]";

echo "<br>Soma dos valores: ". array_sum($valores);

echo "<br>Média: ".mediaValores($valores);