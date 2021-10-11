<?php
$line = explode(' ',readline());
$result = '';
foreach ($line as $item)
{
    for ($i=0;$i<strlen($item) ;$i++)
    {
        $result .=$item;
    }
}
echo $result;

?>