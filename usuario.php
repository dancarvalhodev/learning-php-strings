<?php

$nome = 'Daniel Carvalho';
$email = '  danielcárvalhodev@gmail.com   ';
$senha = '123';

// strlen retorna o número em bytes, ou seja letra com acento ocuparia dois bytes
if (mb_strlen($senha) < 8) {
    echo 'Senha insegura' . PHP_EOL . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@');

$usuario = substr($email, 0, $posicaoDoArroba);

echo mb_strtoupper($usuario) . PHP_EOL;
echo mb_strtolower($usuario) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

list($nome, $sobrenome) = explode(' ', $nome);

echo 'Nome: ' . $nome . PHP_EOL;
echo 'Sobrenome: ' . $sobrenome . PHP_EOL;

$csv = 'Daniel Carvalho,24,danielcárvalhodev@gmail.com';
var_dump(explode(',', $csv));

echo trim($email) . PHP_EOL;