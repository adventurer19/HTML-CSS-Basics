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
$max = PHP_INT_MIN;
foreach ($mx as $row=>$array) {
    foreach ($array as $col=>$value) {
        if($value>$max){
            $max= $value;
        }

    }

}
echo "$max ";

?>