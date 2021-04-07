<?php

$items = ['Daniel', 'Felipe', 'Juliana', 'Josiane', 'Andressa', 'Snoopy'];

// Retorna a posição real de um elemento dentro do array, se não tiver nada retornará
// https://www.php.net/manual/en/function.array-search.php
$output = array_search('Josiane', $items);
print_r($output);