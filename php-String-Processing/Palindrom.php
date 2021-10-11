<?php

$text = readline();
$delim= [',','.','!','?',' '];
$text = str_replace($delim,'@',$text);
$text = explode('@',$text);
$words = [];
foreach ($text as $item) {
    if($item!=='' && $item===strrev($item)){
        $words[] = $item;
    }
}
natcasesort($words);
echo join(', ',$words).PHP_EOL;

?>