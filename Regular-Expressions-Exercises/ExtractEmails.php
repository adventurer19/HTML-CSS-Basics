<?php
$pattern = '/(^| )[a-zA-Z0-9]+[\w\-.]*\@[a-zA-z-]+(\.[a-zA-Z]+)+/';
$inp = readline();
$matches = [];
preg_match_all($pattern,$inp,$matches);
foreach ($matches[0] as $item) {
    echo $item.PHP_EOL;
}
?>

