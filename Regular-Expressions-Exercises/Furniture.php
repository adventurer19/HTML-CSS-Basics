<?php
$pattern = '/>{2}[A-z]+<{2}([\d]+\.?)+\![\d]+/';
$input = readline();
$matches = [];
$data =[];
$products = [];
$finalPrice = 0;
while ($input!='Purchase') {

if(preg_match($pattern,$input))
{
    preg_match_all($pattern,$input,$data);
    $data=preg_replace('/>{2}|<{2}|\!/','@',$data[0]);
    $matches = explode('@',$data[0]);
    $products[]=$matches[1];
    $prices = floatval($matches[2]*$matches[3]);
    $finalPrice +=$prices;

}

    $input= readline();
    
}
echo 'Bought furniture:'.PHP_EOL;
foreach ($products as $item) {
echo $item.PHP_EOL;
}
echo 'Total money spend: ';
echo number_format($finalPrice,'2','.','');

?>