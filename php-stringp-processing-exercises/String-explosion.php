<?php

$text = readline();

$leftPower = 0;
for ($i = 0; $i < strlen($text); $i++) {
  $currentChar = $text[$i];
  if($currentChar=='>'){
      $power = $text[$i+1];
      $power+=$leftPower;
      for ($k = 0; $k <$power; $k++) {
          if($text[$i+1+$k]=='>')
          {
              $leftPower = $power-$k;
             break;

          }
       $text[$i+1+$k]='@';
        $leftPower=0;

      }

  }

}
$text= str_replace('@','',$text);
echo $text;



?>

