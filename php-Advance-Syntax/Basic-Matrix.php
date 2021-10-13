<?php
$mx = [];
$rows = readline();
for ($i = 0; $i < $rows; $i++) {
$mx[]=explode(' ',readline());
}
list($x,$y)= explode(' ',readline());
echo $mx[$x][$y];

?>

