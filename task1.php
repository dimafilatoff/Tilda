<?php

// Нужно вывести лесенкой числа от 1 до 100.

$line = 1;
$i = 0;
for ($x = 1; $x <= 100; $x++) {
    echo $x . " ";
    $i++;
    if ($line == $i) {
        echo "<br>";
        $line++;
        $i = 0;
    }
}