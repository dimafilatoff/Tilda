<?php

// Нужно заполнить массив 5 на 7 случайными уникальными числами от 1 до 1000.
// Вывести получившийся массив и суммы по строкам и по столбцам.

$array = [];
$arraySum = [];

for ($row = 1; $row <= 5; $row++) {
    for ($col = 1; $col <= 7; $col++) {
        $x = rand(1, 1000);
        $array[$row][$col] = $x;
        $arraySum['row'][$row] += $x;
        $arraySum['col'][$col] += $x;
    }
}
?>
<table border="1" cellpadding="5">
    <?php foreach ($array as $iRow => $row) { ?>
        <tr>
            <?php foreach ($row as $cell) { ?>
                <td><?= $cell ?></td>
            <?php } ?>
            <td><strong><?= $arraySum['row'][$iRow] ?></strong></td>
        </tr>
    <?php } ?>
    <tr>
        <?php foreach ($arraySum['col'] as $item) { ?>
            <td><strong><?= $item ?></strong></td>
        <?php } ?>
    </tr>
</table>