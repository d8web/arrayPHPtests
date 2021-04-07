<?php

// https://www.php.net/manual/en/function.shuffle.php embaralhar valores do array

$data = range(1, 10);
echo '<pre>';
print_r($data);

shuffle($data);
echo '<pre>';
print_r($data);