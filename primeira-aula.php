<?php

$nome = 'Daniel Carvalho';
$ehDaMinhaFamilia = str_contains($nome, 'Carvalho');

if ($ehDaMinhaFamilia) {
    echo "$nome é da minha família" . PHP_EOL;
} else {
    echo "$nome não é da minha família" . PHP_EOL;
}