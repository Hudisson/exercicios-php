<?php 
/**
 * @author Hudisson Xavier
 * Execício 12:
 *   Conte quantas vogais existem em uma string.
 */


/**
 * Função que retorna a quantidade de vogais de uma string
 */
function countVowels($str)
{

    $str = removerAcentos($str);

    # Converte cada caractere da string em um elemento de array
    $array = str_split($str);

    $qtdVogais = 0;

    foreach($array as $ch){

        if($ch == "a" || $ch == "e" || $ch == "i" || $ch == "o" || $ch == "u"){
            $qtdVogais++;
        }
    }

    return $qtdVogais;

}

/**
 * Função que normaliza e remover acentos gráficos de uma string
 */
function removerAcentos($string)
{

    # Converter para minúsculas
    $string = strtolower($string);

    # Normaliza a string para separar letras de acentos
    $string = Normalizer::normalize($string, Normalizer::FORM_D);

    # Remove os acentos (intervalo U+0300 a U+036F)
    $string = preg_replace('/[\x{0300}-\x{036F}]/u', '', $string);

    return $string;
}

echo "<h2>Conte quantas vogais existem em uma string</h2>";
echo "<hr>";

$palavra = "PHP é muito legal";

echo "<br> <b>Palavra</b>:   $palavra";

echo "<br><b>Quantide de vogais:</b> ".countVowels($palavra);