<?php

$dino = [
  'Indominus',
  'BARIONIX',
  'Brontossauro',
  'T-Rex',
  'ANQUILOSSAURO',
  'ANQUILOSSAURO',
  'Velociraptor',
  'BRAQUIOSSAURO',
  'STYGIMOLOCH',
  'Brontossauro',
  'Mosassauro',
  'Triceratope',
  'BARIONIX',
  'STYGIMOLOCH',
  'ANQUILOSSAURO'
];
// https://www.php.net/manual/en/function.array-count-values.php return a contagem dos valores do array
$orderItems = array_count_values($dino);
echo '<pre>';
print_r($orderItems);