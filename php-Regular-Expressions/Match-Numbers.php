<?php

$pattern = '/(^|(?<=\s))-?\d+(\.\d+)?($|(?=\s))/';
$input = readline();
$matches = [];
preg_match_all($pattern,$input,$matches);
echo join(' ',$matches[0]).PHP_EOL;


?>