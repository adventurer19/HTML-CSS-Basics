<?php

$input = readline();
$array = explode(', ',$input);
$filter = [];
foreach ($array as $item) {
   $length = strlen($item);
   if($length>=3 && $length<=16){
       $isValid = true;
       for ($i = 0; $i <$length; $i++) {
           $currentChar = $item[$i];
       if(!(ctype_alnum($currentChar)
           ||$currentChar==='-'
           ||$currentChar==='_'))
       {
          $isValid= false;
           break;
       }
       }
       if($isValid){
           echo "$item".PHP_EOL;
       }
   }




}




?>