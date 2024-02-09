<?php
$array = array (1, 2, 3, 5, 8, 13, 21, 34, 55);
$sum = 0;
for ($i = 0; $i < 5; $i++) {
    $sum += $array[$array[$i]];
}
echo $sum;
?>

