<?php

function geraEmail(String $nome): void
{
    // HEREDOC - equivalemnte a aspas " - variáveis aparecem
    // NOWDOC - equivalente a aspas ' - variáveis não aparecem

    // FINAL é um delimitador, tudo o que tiver se espaço antes do FINAL
    // o PHP meio que roda um ltrim na string
    $conteudoEmail = <<<'FINAL'
    Olá, $nome!

    Estamos entrado em contato para
    {motivo do contato}
    
    {assinatura}
    FINAL;

    echo $conteudoEmail . PHP_EOL;
}

geraEmail('Daniel');