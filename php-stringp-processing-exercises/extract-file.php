<?php

$input =readline();

$lastSlash = strrpos($input,"\\");

$file = substr($input,$lastSlash+1);

$lashDot = strrpos($file,".");

$fileExt = substr($file,$lashDot+1);

$fileName = substr($file,0,$lashDot);

echo "File name: $fileName" . PHP_EOL;
echo "File extension: $fileExt" . PHP_EOL;

