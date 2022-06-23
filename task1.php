<?php

// Нужно вывести лесенкой числа от 1 до 100.

$line = 1;
$br = 0;
for ($num = 1; $num <= 100; $num++) {
    echo $num . " ";
    $br++;
    if ($line == $br) {
        echo "<br>";
        $line++;
        $br = 0;
    }
}