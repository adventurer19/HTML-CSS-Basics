<?php

$text = readline();
$len = strlen($text);
for ($i = 0; $i < $len; $i++) {
    $newChar =chr(ord($text[$i])+3);
$text[$i]=$newChar;
}
echo $text;
?>