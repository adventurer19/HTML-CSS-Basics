<?php
$pattern='/\b\d{2}(\/|.|-)[A-Z][a-z]{2}\1\d{4}\b/';
$input = readline();
$matches=[];
preg_match_all($pattern,$input,$matches);
foreach ($matches[0] as $date) {
    $repSym=['/','-','.'];
    $date = preg_replace('/(\/|\.|\-)/','@',$date);
    list($day[0],$month[1],$year[2]) = explode('@',$date);
    echo "Day: $day[0], Month: $month[1], Year: $year[2]".PHP_EOL;
}


?>