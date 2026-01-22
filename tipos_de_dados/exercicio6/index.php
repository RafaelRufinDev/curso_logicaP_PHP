<?php


$car = [
    'cor' => 'verde',
    'modelo' => 'Fusca',
    'ano' =>  1998,
    'dono' => "Rafael"
];


print_r($car);
echo "<br>";

echo "o carro é um " . $car['modelo'] . " de cor " . $car['cor'] . " do ano de " . $car['ano'];
echo "<br>";
