<form action="">
<div>First Number:</div>
    <input type="number" name="num1"/>
    <div>Second Number:</div>
    <input type="number" name="num2"/>
    <input type="submit" name="Submit" id="">

</form>
<?php
if(isset($_GET))
{
    $num1 =htmlspecialchars($_GET['num1']);
    $num2 =htmlspecialchars($_GET['num2']);
    $result =  $num1+$num2;
    echo "$num1 + $num2 = $result";
}