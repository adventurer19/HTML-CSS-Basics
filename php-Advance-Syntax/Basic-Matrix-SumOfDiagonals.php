<?php
//4
//7 11 9 8
//6 4 9 3
//12 10 3 2
//12 10 3 2
$mx =[];
$rows = readline();
for ($i = 0; $i < $rows; $i++) {
    $mx[]=explode(' ',readline());

}
$sum = 0;
for ($i = 0,$y = $rows-1; $i <$rows; $i++,$y--) {
    $sum+=$mx[$i][$y];

}
echo $sum;

?>