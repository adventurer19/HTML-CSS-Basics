<form action="">
    Name: <input type="text" name="name" id=""><br>
    Phone: <input type="text" name="phone" id=""><br>
    Age: <input type="text" name="age" id=""><br>
    Address: <input type="text" name="address" id=""><br>
    <input type="submit" value="click me" id=""><br>

</form>
<?php

if(isset($_GET['name']) &&
    isset($_GET['phone']) &&
    isset($_GET['age']) &&
    isset($_GET['address']))
{
    $name = htmlspecialchars($_GET['name']);
    $phone = htmlspecialchars($_GET['phone']);
    $age = htmlspecialchars($_GET['age']);
    $address = htmlspecialchars($_GET['address']);
    echo "<table border='2'>";
    echo "<tr><td style='background-color: orange'>Name</td><td>$name</td></tr>";
    echo "<tr><td style='background-color: orange'>Phone</td><td>$phone</td></tr>";
    echo "<tr><td style='background-color: orange'>Age</td><td>$age</td></tr>";
    echo "<tr><td style='background-color: orange'>Adress</td><td>$address</td></tr>";
    echo "</table>";
}
?>