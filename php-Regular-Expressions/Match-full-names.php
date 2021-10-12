<?php


$pattern ='@\b[A-Z][a-z]+ [A-Z][a-z]+@';
$names = readline();
$matches = [];
preg_match_all($pattern,$names,$matches);
foreach ($matches[0] as $match) {
    echo $match.' ';
}


?>