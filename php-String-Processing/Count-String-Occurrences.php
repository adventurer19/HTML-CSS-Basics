<?php

$delim= [',','.','!','?',' '];
$input = readline();
$filter = readline();
$input = str_replace($delim,'@',$input);
$words = explode('@',$input);
$counter = 0;
foreach ($words as $word) {
    if($filter==$word)
    {
        $counter++;
    }
}
echo $counter;

?>