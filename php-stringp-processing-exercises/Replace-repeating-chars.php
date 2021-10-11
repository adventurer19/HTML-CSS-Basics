<?php
$text = readline();
$len = strlen($text);
$c =0;
$res ='';
$last = $text[$len-1];
for ($i = 0; $i < $len-1; $i++) {
    if($text[$i]!=$text[$i+1]){
        $res.=$text[$i];

    }

}
echo $res.$last;
?>