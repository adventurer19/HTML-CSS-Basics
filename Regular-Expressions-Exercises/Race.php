<?php
$pattern ='/([^A-z0-9]+)|\^/';
$charRemPattern = '/[A-z]+/';
$digitsRemPattern = '/\d+/';
$firstLine = explode(', ',readline());
$input = readline();
$keyAsNameValueAsPoints=[];
foreach ($firstLine as $names) {
    $keyAsNameValueAsPoints[$names][]=0;
}
while ($input!='end of race')
{
$data = preg_replace($pattern,'',$input);
$name = preg_replace($digitsRemPattern,'',$data);
$digits = preg_replace($charRemPattern,'',$data);
$sum = 0;
        for ($i = 0; $i < strlen($digits); $i++) {
            $sum+=intval($digits[$i]);

        }
        if(key_exists($name,$keyAsNameValueAsPoints))
        {
            $keyAsNameValueAsPoints[$name][0]+=$sum;

        }
    $input= readline();
}
arsort($keyAsNameValueAsPoints);
$names=[];
foreach ($keyAsNameValueAsPoints as $item=>$values)
{
    $names[]=$item;
}
echo "1st place: $names[0]".PHP_EOL;
echo "2nd place: $names[1]".PHP_EOL;
echo "3rd place: $names[2]".PHP_EOL;
?>