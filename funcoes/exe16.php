<?php

/**
 * @author Hudisson Xavier
 * Execício 16:
 *   Desenvolver uma função que gere uma senha aleatória.
 */

/**
 * Gera uma senha aleatória com um comprimento especificado.
 * A função recebe um parâmetro $tamanho, que define quantos caracteres a senha terá.
 * Se não passar nada como parâmetro, o padrão será 8 caracteres.
 */
function gerarSenha($tamanho = 8)
{
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*_+-';
    $senha = ''; # variável para armazenar a senha gerada - começa vazia e será preenchida aos poucos.
    $maxIndex = strlen($caracteres) - 1; # calcula o índice máximo para acessar os caracteres disponíveis - guarda o último índice válido da string de caracteres

    for ($i = 0; $i < $tamanho; $i++) {
        $index = rand(0, $maxIndex); # escolhe um índice aleatório para acessar um caractere da string de caracteres - gera um número aleatório entre 0 e o índice máximo
        $senha .= $caracteres[$index]; # adiciona esse caractere à senha
    }

    return $senha;
}


function gerarSenhaCustomizada($tamanho = 8, $qtdNumericos = 2, $qtdLetras = null, $qtdEspeciais = 1)
{

    // Se a quantidade de letras não for especificada, calcula o restante dos caracteres para completar o tamanho total da senha
    if ($qtdLetras === null) {
        $qtdLetras = $tamanho - ($qtdNumericos + $qtdEspeciais);
    }

    // Valida se a quantidade total de caracteres (numéricos + letras + especiais) não excede o tamanho da senha
    if ($qtdLetras < 0) {
        throw new Exception("Quantidade inválida: soma maior que o tamanho.");
    }

    $caracteresNumericos = '0123456789';
    $caracteresLetras = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $caracteresEspeciais = '!@#$%^&*_+-';
    $senha = '';

    // Gera os caracteres numéricos
    for ($i = 0; $i < $qtdNumericos; $i++) {
        $index = rand(0, strlen($caracteresNumericos) - 1);
        $senha .= $caracteresNumericos[$index];
    }

    // Gera os caracteres alfabéticos
    for ($i = 0; $i < $qtdLetras; $i++) {
        $index = rand(0, strlen($caracteresLetras) - 1);
        $senha .= $caracteresLetras[$index];
    }

    // Gera os caracteres especiais
    for ($i = 0; $i < $qtdEspeciais; $i++) {
        $index = rand(0, strlen($caracteresEspeciais) - 1);
        $senha .= $caracteresEspeciais[$index];
    }

    // Embaralha a senha para garantir que os caracteres fiquem em posições aleatórias
    $senha = str_shuffle($senha);

    return $senha;
}

echo "<h2>Desenvolver uma função que gere uma senha aleatória</h2>";
echo "<hr>";

echo "<h3>Gerar senha aleatória (padrão)</h3>";

echo "<b>Senha gerada com 8 caracteres: </b>" . gerarSenha(); # chama a função para gerar uma senha de 8 caracteres e exibe o resultado
echo "<br><br>";
echo "<b>Senha gerada com 12 caracteres: </b>" . gerarSenha(12); # chama a função para gerar uma senha de 12 caracteres e exibe o resultado

echo "<br><br><hr>";

echo "<h3>Gerar senha personalizada</h3>";
echo "<b>Senha gerada com 8 caracteres: </b>" . gerarSenhaCustomizada(8); # chama a função para gerar uma senha personalizada e exibe o resultado
echo "<br><br>";
echo "<b>Senha gerada com 12 caracteres: </b>" . gerarSenhaCustomizada(12);
echo "<br><br>";
echo "<b>Senha gerada com 16 caracteres: </b>" . gerarSenhaCustomizada(16);
echo "<br><br>";
echo "<b>Senha gerada com 16 caracteres: </b>" . gerarSenhaCustomizada(16, 4, 10, 2);