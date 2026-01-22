<?php

$x = 10;

$y = &$x;

echo $x;
echo "<br>";
echo $y;

echo "<br>";

$y = 1111;

echo "Atribuição após referencia";

echo "<br>";
echo $x;
echo "<br>";
echo $y;

echo "<br>";

$x = 1000;

echo "Atribuição após referencia 2";

echo "<br>";
echo $x;
echo "<br>";
echo $y;

echo "<br>";

$nome = "Rafael";

$nome2 = &$nome;

echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";

$nome2 = "João";

echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";
