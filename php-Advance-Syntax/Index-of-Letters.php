<?php
$alpha = 'abcdefghijklmnopqrstuvwxyz';
$input =strtolower(readline());
for ($i = 0; $i < strlen($input); $i++) {
    echo $input[$i].' -> '.strpos($alpha,$input[$i]).PHP_EOL;

}

?>