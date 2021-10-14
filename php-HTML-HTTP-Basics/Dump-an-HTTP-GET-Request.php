<form action="" method="get">

    <div>name:</div>
    <input type="text" Name="personName"/>
    <div>Age:</div>
    <input type="number" name="age"/>
    <div>Town:</div>
    <select name="townId" >
        <option value="10">Sofia</option>
        <option value="20">Varna</option>
        <option value="30">Plovdiv</option>
    </select>
    <div>
        <input type="submit" value="submit" id="">
    </div>
</form>
<?php

var_dump($_GET);
