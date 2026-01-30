<?php

echo 5 / 10;
echo "<br>";

if (is_float(5 / 2)) {
    echo "É float <br> ";
}

echo 2 . 3;
echo "<br>";

if (is_string(2 . 3)) {
    echo "É string <br> ";
}
echo "<br>";

$nome = "Rafael";
$sobrenome = "Rufino Rodrigues";

$nomecompleto = $nome . "" . $sobrenome;

echo $nomecompleto;
echo "<br>";