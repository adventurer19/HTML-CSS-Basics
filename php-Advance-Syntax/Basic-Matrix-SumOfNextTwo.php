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
for ($i = 0; $i < count($mx); $i++) {
    for ($k = 0; $k < count($mx[$i]); $k++) {
        if (isset($mx[$i][$k-1])) {
$mx[$i][$k]+=$mx[$i][$k-1];
}
        if(isset($mx[$i][$k-2])){
            $mx[$i][$k]+=$mx[$i][$k-2];
        }
        echo $mx[$i][$k].' ';

    }
echo PHP_EOL;
}

?>