<?php

$words = explode(', ',readline());
$text = readline();
foreach ($words as $item) {
    $replaceWord = str_repeat($item,strlen($item));
    $replaceWord = str_replace($item,'*',$replaceWord);
    $text = str_replace($item,$replaceWord,$text);
}

echo $text;


?>

