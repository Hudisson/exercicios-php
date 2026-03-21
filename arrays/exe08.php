<?php 
/**
 * @author Hudisson Xavier
 * Execício 08:
 *   Conte quantas vezes cada palavra aparece em uma frase.
 */

# Frase a ser analizada
$frase = "PHP é uma linguagem muito poderosa, muito versátil e muito presente no desenvolvimento web. 
PHP permite criar aplicações rápidas, rápidas e eficientes, eficientes o suficiente para atender 
diferentes necessidades.";

# converter a o texto para minúsculas
$frase = strtolower($frase);

# Extrair palavras como um array
$palavras = str_word_count($frase, 1);

# contar a ocorrêcnia de cada palavra

$ocorrencia = array_count_values($palavras);

echo "<h2>Conte quantas vezes cada palavra aparece em uma frase</h2>";
echo "<hr>";

echo "<b>Texto:</b> <br>";
echo "<pre>
    $frase
</pre>";

echo "<hr>";

echo "<h3>Resultado da contagem</h3>";

echo "<ul>";
foreach($ocorrencia as $palavra => $total){
    echo "<li> <strong>". ucfirst($palavra)." ................: </strong> $total";
    echo ($total > 1) ? " vezes" : " vez";
}

echo "</ul>";