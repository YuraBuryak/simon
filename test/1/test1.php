<?php

error_reporting(E_ALL);
$array = range(1, 100);
$maximumColumns = 7;
$restValues = $maximumColumns - (count($array) % $maximumColumns);

$restArray = array_fill(count($array), $restValues, '');
$array += $restArray;

$newArray = array_chunk($array, $maximumColumns);

?>
<table border="1">
    <?php foreach ($newArray as $columns): ?>
        <tr>
            <?php foreach ($columns as $value): ?>
                <?php if ('' === $value): ?>
                    <td style="border:1px solid black">&nbsp;</td>
                    <?php
                    continue;
                endif; ?>
                <td><?= $value ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>