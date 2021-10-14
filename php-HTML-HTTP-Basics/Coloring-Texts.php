<form action="">
    <textarea name="input" id="" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="Color text" >
</form>
    <?php

    if(isset($_GET['input']))
    {
        $data = htmlspecialchars($_GET['input']);
        for ($i = 0; $i < strlen($data); $i++) {
            $currentChar = $data[$i];
            if(!ctype_space($currentChar))
            {
                if (ord($currentChar)%2!=0) {
                    echo "<span style='color: blue'>$currentChar </span>";
                }
                else{
                    echo "<span style='color: red'>$currentChar </span>";

                }
            }


        }
    }