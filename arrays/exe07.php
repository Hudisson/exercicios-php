<?php 
/**
 * @author Hudisson Xavier
 * Execício 07:
 *   Encontrar o maior e o menor número de um array de números inteiros.
 */


/**
 * Função responsável por verificar se há elementos que não sejam números inteiros no array
 */
function soInteiros(array $valores): bool
{
    foreach($valores as $valor){
        if(!is_int($valor)){
            return false; # retorna false se encontrar um elemento que não seja um número inteiro
        }
    }

    return true;
}

// Função para encontrar o maior valor do array
function findMax(array $valores)
{
    if(!soInteiros($valores)){
        return "{Erro: Só é permintido números inteiros}";
    }

    $maiorValor = $valores[0];

   for($i = 1; $i <= (count($valores)-1); $i++){
        if($valores[$i] > $maiorValor){
            $maiorValor = $valores[$i];
        }
   }

   return $maiorValor;
}

// Função para encontrar o menor valor do array
function findMin(array $valores)
{
    if(!soInteiros($valores)){
        return "{Erro: Só é permintido números inteiros}";
    }

    $menorValor = $valores[0];

    for($i = 1; $i <= (count($valores)-1); $i++){
        if($valores[$i] < $menorValor){
            $menorValor = $valores[$i];
        }
   }

   return $menorValor;
}



echo "<h2>Encontrar o maior e o menor número de um array de números inteiros</h2>";

$array = [7, 9, 5, 3];


echo "<b>Array: </b>[ ".implode("; ", $array)." ]<br>";
echo "<b>Maior valor no array: </b>".findMax($array)."<br>";
echo "<b>Menor valor no array: </b>".findMin($array)."<br>";