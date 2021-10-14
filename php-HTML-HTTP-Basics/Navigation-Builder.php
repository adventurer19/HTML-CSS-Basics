<form action="" method="get">
    categories:<input type="text" name="Categories"><br>
    tags:<input type="text" name="Tags"><br>
    months:<input type="text" name="Months"><br>
    <input type="submit" value="Generate" id="">
</form>
<?php

if(isset($_GET)){
    $data = $_GET;
    foreach ($data as $key=>$value) {
        echo "<h2>$key</h2><ul>";
$args = explode(', ',$value);
        foreach ($args as $items) {
            echo "<li>$items</li>";
}
echo "</ul>";
}

}