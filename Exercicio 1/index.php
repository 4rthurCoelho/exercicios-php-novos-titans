<?php

$value1 = $argv[1];
$value2 = $argv[2];

$sum = $value1 + $value2;

if ($sum > 20){
    $sum = $sum + 8;
}

if ($sum <= 20){
    $sum = $sum - 5;
}

echo "O resultado é $sum\n";