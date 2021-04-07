<?php

$listAnimals = [
    'mamiferos_aquaticos' => [
        'baleia orca',
        'peixe-boi',
        'golfinho',
        'baleia',
        'jubarte',
        'baleia azul',
        'boto',
        'leão-marinho',
        'lontra',
        'foca'
    ],
    'mamiferos_terrestres' => [
        'cachorros',
        'girafa',
        'leão',
        'tigre',
        'macaco',
        'boi',
        'urso',
        'tamanduá',
        'raposa',
        'gato',
        'onça',
        'camelo',
        'ovelha',
        'jaguatirica'
    ]
];

// https://www.php.net/manual/en/function.sort.php
// Ordenando array pela ordem alfabética
foreach($listAnimals as $key => $value) {
    sort($listAnimals[$key]);
}
echo '<pre>';
print_r($listAnimals);