<form >
   Name:<input type="text"  name="person" /> <br>
    <input type="submit" value="submit">
</form>

<?php

if(isset($_GET['person']))
{
    $name = htmlspecialchars($_GET['person']);
    echo "Hello, $name!";
}


