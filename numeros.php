<?php

$anoNascimento =  '    1999 ';

$idade = 2023 - $anoNascimento;

echo $idade . PHP_EOL;

if ($anoNascimento == 1999) {
    echo 'SIM' . PHP_EOL;
} else {
    echo 'NÃO' . PHP_EOL;
}