<?php 
/**
 * @author Hudisson Xavier
 * Execício 04:
 *      Crie um script que inverta uma string sem usar strrev().
 * 
 */
 

function inverteTexto($str)
{
    $textoArray = str_split($str); # tranforma o texto em um array
    $texto = "";
    
    
    # Percorre o array  $textoArray do fim até o início
    for($i = (count($textoArray)-1); $i >= 0; $i--){
        $texto .= $textoArray[$i]; # add cada elemento de $textoArray na variável $texto 
    }
    
   return strtolower($texto); # retorna o texto invertido

}

echo "<h1>Inertendo string sem usar strrev() </h1>";

$textoNormal = "O rato roeu a roupa do rei de roma";

echo "<b>Texto Normal: </b>". $textoNormal;
echo "<hr>";
echo "<b>Texto invertido: </b>". inverteTexto($textoNormal);
