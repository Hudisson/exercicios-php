<?php 
/**
 * @author Hudisson Xavier
 * Execício 06:
 *   Crie um algoritmo que verifique se uma palavra é palíndromo.
 * 
 * OBS.: Não é considerado letras acentuadas
 * 
 */

function isPalindromo($palavra)
{
    # Normaliza a string para separar letras de acentos
    $palavra = Normalizer::normalize($palavra, Normalizer::FORM_D);

    # Remove os acentos (intervalo U+0300 a U+036F)
    $palavra = preg_replace('/[\x{0300}-\x{036F}]/u', '', $palavra);

    #  Remove caracteres especiais como ç (opcional)
    $palavra = str_replace(['ç', 'Ç'], ['c', 'C'], $palavra);

    # Transforma a palavra em um array
    $textoArray = str_split($palavra);
    $texto = "";

    # Percorre o array  $textoArray do fim até o início
   for($i = (count($textoArray)-1); $i >= 0; $i--){
        $texto .= $textoArray[$i]; # add cada elemento de $textoArray na variável $texto 
   }

   # Compara se o conteúdo são os mesmos
   if(strtolower($palavra) == strtolower($texto)){
        echo "É um palíndromo";  # verdadeiro
   }else{
        echo "Não é um palíndromo";  # falso
   }

}

$textoNormal = "omissíssimo";

isPalindromo($textoNormal);
