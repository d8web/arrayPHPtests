<?php

// https://www.php.net/manual/en/function.array-replace.php
// Muda um indice no array
$data = [
  'roupa' => 'Camiseta',
  'cor' => 'branco',
  'sexo' => 'Masculino',
  'status' => 'casado',
  'time' => 'Grêmio',
  'noma' => 'Daniel'
];

echo '<pre>';
print_r($data);

$output = array_replace($data, ['cor' => 'preto']);
echo '<pre>';
print_r($output);