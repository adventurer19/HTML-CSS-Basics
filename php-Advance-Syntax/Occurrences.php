<?php


$str = readline();
$occ = [];
for ($i = 0; $i < strlen($str); $i++) {
    if(!key_exists($str[$i],$occ))
    {
        $occ[$str[$i]]= 0;
    }
    $occ[$str[$i]]++;

}
foreach ($occ as $char=>$count) {
    echo $char.' : '.$count.PHP_EOL;
    
}

?>