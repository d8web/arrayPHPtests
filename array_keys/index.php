<?php

$colors = ['blue', 'green', 'red', 'orange', 'pink', 'white', 'blue'];

// https://www.php.net/manual/en/function.array-keys.php
$keys = array_keys($colors, 'blue');
echo '<pre>';
print_r($keys);