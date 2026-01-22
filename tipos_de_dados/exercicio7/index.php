<?php


$pessoa = [
    "nome" => "Rafael",
    "Cor" => "Branco",
    "Sexo" => "Masculino",
    "idade" => 18,
    "Cidade" => "Camuntanga",
    "Estado" => "Pernanmbuco"
];

if ($pessoa["idade"] >= 18) {
    echo "É maior de idade, já pode ser preso";
} else {
    echo "É menor de idade, não pode ser preso ainda";
}
