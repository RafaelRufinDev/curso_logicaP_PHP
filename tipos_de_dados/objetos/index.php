<?php

class pessoa
{
    function falar()
    {
        echo "olá pessoal";
    }
}


$rafael = new pessoa();

$rafael->nome = "Rafael";

echo  $rafael->nome;

echo "<br>";

$rafael->falar();