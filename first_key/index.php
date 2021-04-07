<?php

$heroes = [
  'Top' => 'Capitain America',
  'Iron man',
  'Spider man',
  'Ant man',
  'Thor',
  'Hulk',
  'Thanos',
  'Gamora',
  'Drax',
  'Loki',
  'Dr Strange'
];

// https://www.php.net/array_key_first
$Key = array_key_first($heroes);
print_r($Key);