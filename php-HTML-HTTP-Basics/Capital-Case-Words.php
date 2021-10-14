<?php

$output='';
if(isset($_GET['text']))
{
    $data = htmlspecialchars($_GET['text']);
    $pattern ='/[A-Z]{2,}/';
    $array = [];
    preg_match_all($pattern,$data,$array);
    $output = implode(', ',$array[0]);
}
?>

<form action="Capital-Case-Words.php" method="get">
    <textarea rows="10" name="text"><?= $output?>
    </textarea><br>
    <input type="submit" value="Extract">
</form>


