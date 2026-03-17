<?php 
/**
 * @author Hudisson Xavier
 * Execício 05:
 *   Receba um número e imprima a tabuada de 1 a 10
 * 
 */


function tabuada($numero)
{
    echo "Tabuada do: $numero <br><br>";

    for($i = 1; $i <= 10; $i++){

        echo "$i * $numero = ".$numero * $i."<br>";
        
    }

    echo "<br><hr>";
}


tabuada(4);