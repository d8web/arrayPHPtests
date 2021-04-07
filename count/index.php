<?php

$times = [
  'SP' => ['Corinthians', 'Palmeiras'],
  'MG' => ['Cruzeiro', 'América', 'Atlético'],
  'RG' => ['Grêmio', 'Internacional'],
  'RJ' => ['Vasco', 'Flamengo']
];

// https://www.php.net/manual/en/function.count.php
print_r(count($times, COUNT_RECURSIVE));