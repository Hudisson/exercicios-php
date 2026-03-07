<?php
/**
 * @author Hudisson Xavier
 * 
 * Execício 01:
 *    Crie um script PHP que receba um número e informe se ele é par ou ímpar.
 */

$numero = 7;

if($numero %2 == 0){
    echo "O número $numero é par \n";
}else{
    echo "O número $numero é impa \n";
}

echo "O resto da divisão por 2 é igual a: ". $numero %2;

echo "\n";