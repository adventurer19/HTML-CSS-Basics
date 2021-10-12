<?php
$pattern = '/\+359(\s{1}|-{1})2\1\d{3}\1\d{4}\b/';
$input = readline();
$matches =[];
preg_match_all($pattern,$input,$matches);
echo join(', ',$matches[0]).PHP_EOL;


?>