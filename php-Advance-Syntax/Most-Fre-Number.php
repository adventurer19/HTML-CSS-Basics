<?php
$input = explode(' ',readline());
$data=[];
for ($i = 0; $i < count($input); $i++) {
if(!key_exists($input[$i],$data))
{
    $data[$input[$i]]=0;

}
    $data[$input[$i]]++;

}
arsort($data);
echo array_key_first($data);


?>