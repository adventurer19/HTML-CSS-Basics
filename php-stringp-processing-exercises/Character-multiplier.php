<?php

$line =explode(' ',readline());
usort($line,function ($a,$b){
    $x = strlen($a);
    $y = strlen($b);
    return $y<=>$x; });
$firstWord = $line[0];
$secondWord = $line[1];

$sum = 0;
for ($i = 0; $i < strlen($firstWord); $i++) {
    if(strlen($secondWord)>$i){
        $x = ord($firstWord[$i]);
        $y= ord($secondWord[$i]);
        $currAmount =$x*$y;
        $sum+=$currAmount;
    }
    else{
        $sum += (ord($firstWord[$i]));
    }



}
echo $sum;
?>