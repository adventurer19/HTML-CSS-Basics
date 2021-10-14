<form >
    <textarea rows="10" name="input"></textarea><br>
    <input type="submit" value="Count words">
</form>
<?php
$output='';
if(isset($_GET['input']))
{
    $data = htmlspecialchars($_GET['input']);
    $data = strtolower($data);
    $array = [];
    $pattern = '/[a-z]+/';
    preg_match_all($pattern,$data,$array);
    $dictionary = [];
    foreach ($array[0] as $item) {
        if(!key_exists($item,$dictionary))
        {
            $dictionary[$item]=0;
        }
        $dictionary[$item]++;
    }
    echo "<table border='2'>";
    foreach ($dictionary as $key=>$value) {

        echo "<tr><td>$key</td><td>$value</td></tr>";

    }
    echo "</table>";
}
?>


