<?php
$needle = readline();
$text = readline();
while(true)
{
    $old = $text;
    $text = str_replace($needle,'',$text);
    if($old==$text){
        echo $text;
        break;
    }
}



?>