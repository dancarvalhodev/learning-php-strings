<?php

$csv = '.,.,.,.,,DanielCarvalho,24......,';

echo trim($csv, ',.') . PHP_EOL;
echo ltrim($csv, ',.') . PHP_EOL;
echo rtrim($csv, ',.') . PHP_EOL;