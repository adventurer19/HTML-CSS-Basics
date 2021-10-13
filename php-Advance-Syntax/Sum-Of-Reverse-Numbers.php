<?php


$input = readline();
$data  =explode(' ',$input);
$sum = 0;

foreach ($data as $item) {
   $value = strrev($item);
   $sum += $value;

}
echo $sum;
?>