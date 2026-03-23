<?php 
/**
 * @author Hudisson Xavier
 * Execício 09:
 *   Remova valores duplicados de um array sem usar array_unique.
 */


/**
 * Método que remove valores duplicados de um array
 */
function RemoverDuplicados(array $duplicados)
{
    $semDuplicados = [];

    # Copia os valores sem os duplicados para um novo array ($semDuplicados)
    foreach($duplicados as $valor){
        if(!in_array($valor, $semDuplicados)){
            $semDuplicados[] = $valor;
        }
    }

    $stringSemDuplicados = "";

    # Converte o array $semDuplicados em uma string para
    for($i = 0; $i < count($semDuplicados); $i++){
        $stringSemDuplicados .= $semDuplicados[$i].", ";
        $stringSemDuplicados = implode(", ", $semDuplicados);
    }

    return $stringSemDuplicados; # retonar uma string com os valores

    //return [$semDuplicados, $stringSemDuplicados]; // caso precise do array $semDuplicados
}

$lista = [10, 20, 10, 30, 50, 40, 40, 90];

$txtLista = "";
for($i = 0; $i < count($lista); $i++){
    $txtLista = implode(", ", $lista);
}

echo "<h2>Remova valores duplicados de um array sem usar array_unique</h2>";
echo "<hr>";

echo "Lista com duplicados: ". $txtLista;

echo "<br>Lista sem duplicados: " . RemoverDuplicados($lista);