<?php

$input =explode(' ',readline());
$length=1;
$startIndex=0;
for ($i = 0; $i < count($input); $i++) {

    $cc=0;

    $count=1;
    for ($k = $i+1; $k < count($input); $k++) {
        $first=$input[$i+$cc];
        $second=$input[$k];
        if($first<$second)
        {
            $count++;
            $cc++;
        }
        else{
            break;
        }

    }
    if($length<$count){
        $startIndex=$i;
        $length=$count;
    }

}
$result = array_slice($input,$startIndex,$length);
echo join(' ',$result).PHP_EOL;






?>