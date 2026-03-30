<?php
/**
 * @author Hudisson Xavier
 * Execício 14:
 *   Crie um script que detecte se um email é válido
 */

function validarEmail(string $email)
{
   
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        return "O é email é válido";
    }

    return "O é email é inválido";
}

echo "<h2>Crie um script que detecte se um email é válido</h2>";
echo "<hr>";

$email_1 = "exemplo@tec.com"; // válido
$email_2 = "teste"; // inválido

echo "<br><b>Resultado emal_1 ($email_1):</b> ".validarEmail($email_1);
echo "<br><b>Resultado emal_2 ($email_2):</b> ".validarEmail($email_2);