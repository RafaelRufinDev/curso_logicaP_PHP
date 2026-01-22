<?php

$str = "Rafael";
$num = 12;

if (is_string($str)) {
    echo "$str <br> É uma string <br>";
}
if (is_string($num)) {
    echo "$num não é uma string<br>";
}
if (is_string("asd")) {
    echo "é uma string<br>";
}
