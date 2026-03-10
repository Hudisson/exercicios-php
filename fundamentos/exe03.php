<?php
/**
 * @author Hudisson Xavier
 * 
 * Execício 03:
 *    Faça um programa que calcule o fatorial de um número.
 *    O fatorial é uma operação matemática que multiplica um número inteiro positivo por todos 
 *    os inteiros positivos menores que ele até 1.
 *    Definição - Para um número inteiro não negativo n:
 *      n! = n×(n−1)×(n−2)×⋯×1
 *    Exemplo:
 *      Calcular o fatorial de 5 (5!):
 *      5! = 5 * 4 * 3 * 2 * 1 = 120
 */


/**
 * Função que calcula o fatoria de um número por meio da iteração de um loop for
 */
function calcularFatorial($numero)
{
    $fatorial = 1;

    # O fatorial é definido apenas para inteiros não negativos
    if($numero < 0){
        return "indefinido"; 
    }

    for($i = 1; $i <= $numero; $i++){
        $fatorial *= $i;
    }

    return $fatorial;
}
$fat = 0;
$fat1 = 1;
$fat2 = 5;
$fat3 = -3;

echo "Fatoria de $fat ( $fat! ) : ".calcularFatorial($fat);
echo "<br>";
echo "Fatoria de $fat1 ( $fat1! ) : ".calcularFatorial($fat1);
echo "<br>";
echo "Fatoria de $fat2 ( $fat2! ) : ".calcularFatorial($fat2);
echo "<br>";
echo "Fatoria de $fat3 ( $fat3! ) : ".calcularFatorial($fat3);