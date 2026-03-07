<?php

/**
 * @author Hudisson Xavier
 * 
 * Execício 02:
 *    Calcular a quantidade de divisores de um número e listar quais são seu divisores.
 */


/**
 * Funão que retorna a quantidade de divisores de um número
 */
function numberOfDivisors($numero)
{
    $quantidadeDeDivisores = 0;

    for($i = 1; $i <= $numero; $i++){
        if($numero %$i == 0){
            $quantidadeDeDivisores+=1;
        }
    }

    return $quantidadeDeDivisores;
}

/**
 * Função que retorna os divisores de um número
 */
function getDivisors($numero)
{
    for($i = 1; $i<= $numero; $i++){
        if($numero %$i == 0){
            $divisores[] = $i;
        }
    }

    return implode("; ", $divisores);
}

$valor = 4;

echo "O número $valor tem ".numberOfDivisors($valor)." divisores <br>";
echo "Os divisores de $valor são: ".getDivisors($valor);