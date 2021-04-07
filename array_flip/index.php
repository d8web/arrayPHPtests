<?php

$vehicles = ['Corolla', 'Uno', 'Gol', 'Camaro', 'Corsa', 'Celta', 'Pálio'];
$output = array_flip($vehicles);

// https://www.php.net/manual/en/function.array-flip.php
// coloca o valor como chave do array e a chave como valor
echo '<pre>';
print_r($vehicles);
echo '<pre>';
print_r($output);