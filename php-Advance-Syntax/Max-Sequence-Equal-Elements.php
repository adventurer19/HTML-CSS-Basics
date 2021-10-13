<?php

$maxCount = 0;
$number ='';
$input =explode(' ',readline());
for ($i = 0; $i < count($input); $i++) {
    $count=1;
    $current=$input[$i];
    for ($k = $i+1; $k < count($input); $k++) {
        $current2= $input[$k];
if($input[$i]==$input[$k])
{
    $count++;
}
else{
    break;
}
    
    }
if($maxCount<$count)
{
    $maxCount=$count;
    $number=$input[$i];
}
}
for ($i = 0; $i <$maxCount; $i++) {
    echo $number.' ';

}
?>