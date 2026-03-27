<?php 
/**
 * @author Hudisson Xavier
 * Execício 13:
 *   Verifique se uma string contém apenas números
 */


/**
 * Função que retorna true se a string conter apenas números e false caso contrário
 */
function somente_numeros($str)
{
    if(!ctype_digit($str)){
        return false;
    }

    return true;
}

echo "<h2>Verifique se uma string contém apenas números</h2>";
echo "<hr>";

$str_a = "0123456789";  // true
$str_b = "0123b56789"; // false
$str_c = "2468";      // true

echo  (somente_numeros($str_a)) ? "A string <b> $str_a </b> SIM, contém apenas números" : "A string <b> $str_a </b> NÃO contém apenas números";

echo "<br>";

echo  (somente_numeros($str_b)) ? "A string <b> $str_b </b> SIM, contém apenas números" : "A string <b> $str_b </b> NÃO contém apenas números";

echo "<br>";

echo  (somente_numeros($str_c)) ? "A string <b> $str_c </b> SIM, contém apenas números" : "A string <b> $str_c </b> NÃO contém apenas números";

