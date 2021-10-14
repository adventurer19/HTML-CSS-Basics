<?php
$sortedLines ='';
if (isset($_GET['lines'])) {
    //htmlspecialchars();
    $data = $_GET['lines'];
    $arraySplit = explode("\n",$data);
    $arraySplit = array_map('trim',$arraySplit);
    $arraySplit = array_filter($arraySplit);
    sort($arraySplit,SORT_STRING);
    $sortedLines = implode("\n",$arraySplit);
}
?>
<form>
    <textarea class="1" rows="10" name="lines"><?= $sortedLines?></textarea> <br>
    <input type="submit" value="Sort">
</form>





