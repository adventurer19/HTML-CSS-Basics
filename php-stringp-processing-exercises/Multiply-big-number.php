<?php
$text =strval(readline());
$multi =intval(readline());
if($multi==0)return 0;
$reminder = 0;
$len = strlen($text);
$result ='';

for ($i = $len-1; $i >=0; $i--) {
    $digit = $text[$i];
    $reminder+=$digit*$multi;
    if($reminder>9){
        $reminderLastDigit =($reminder%10);
        $reminder = intval($reminder/10);
          $result.=$reminderLastDigit;
    }
    else{
        $result.=$reminder;
        $reminder=0;
    }

}
if($reminder>0)
{
    $result.=$reminder;
}
$result =strrev($result);
echo $result;



?>