<?php

$horarios = [
  '09:00:00', '10:00:00', '11:00:00', '13:00:00', '14:00:00', '15:00:00', '16:00:00', '17:00:00'
];

// https://www.php.net/array_key_last Retorna a última chave do array
$last = array_key_last($horarios);
print_r($last);