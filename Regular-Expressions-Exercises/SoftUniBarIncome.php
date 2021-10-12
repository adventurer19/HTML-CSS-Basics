<?php
$pattern = '/%(?<name>[A-Z][a-z]+)%[^|$%.]*<(?<product>\w+)>[^|$%.]*\|(?<qu>\d+)\|[^|$%.0-9]*(?<price>\d+[.\d]{0,})\$/';
$input = readline();
$totalCash=0;
while ($input !=='end of shift')
{

$data =[];

  if(preg_match($pattern,$input,$data))
  {
      $name =$data['name'];
      $product =$data['product'];
      $qu=$data['qu'];
      $price =$data['price']*$qu;
      $price = number_format($price,2,'.','');
      echo "$name: $product - $price".PHP_EOL;
      $totalCash += (float)$price;
  }

    $input= readline();
}
echo 'Total income: '.number_format($totalCash,2,'.','');


?>


