<?php

/**
 * @author Hudisson Xavier
 * 
 * Execício 02:
 *    Calcular a quantidade de divisores de um número e listar quais são seu divisores.
 * 
 * OBS.: A quantidade de divisores de um número negativo é o dobro da quantidade de divisores positivos do seu valor absoluto, pois cada divisor positivo possui também o seu correspondente negativo.
 * Exemplo:
 * Os divisores de 6 são: (1, 2, 3, 6).
 * Os divisores de −6 são: (−1, 1, −2, 2, −3, 3, −6, 6).
 */


/**
 * Funão que retorna a quantidade de divisores de um número
 */
function numberOfDivisors($numero)
{
    $quantidadeDeDivisores = 0;

    # Calcula e retorna o dobro da quantidade de divisores se o número for negativo
    if ($numero < 0) {

        $numero = $numero * (-1);

        for ($i = 1; $i <= $numero; $i++) {
            if ($numero % $i == 0) {
                $quantidadeDeDivisores += 1;
            }
        }

        return $quantidadeDeDivisores *=2;
    }

    # Calcula e retorna a quantidade de divisore se o número for positivo
    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            $quantidadeDeDivisores += 1;
        }
    }

    return $quantidadeDeDivisores;
}

/**
 * Função que retorna os divisores de um número
 */
function getDivisors($numero)
{
   # Determina os divisores inteiros de um número se o número for negativo
    if ($numero < 0) {

        $numero = $numero * (-1);

        for ($i = 1; $i <= $numero; $i++) {
            if ($numero % $i == 0) {
                $divisores[] = $i;
                $divisores[] = -$i;
            }
        }

        return implode("; ", $divisores);
    }

    # Determina os divisores inteiros de um número se o número for positivo
    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            $divisores[] = $i;
        }
    }

    return implode("; ", $divisores);
}

$valor = -6;

echo "O número $valor tem " . numberOfDivisors($valor) . " divisores <br>";
echo "Os divisores de $valor são: " . getDivisors($valor);
