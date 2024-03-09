<?php
session_start();

if(isset($_POST["submit"]))
{
    if(($_POST["captcha"]) == $_SESSION["captcha"])
    {
        echo "Validate successfully..!!!";
    }
    else
    {
        echo "Wrong Captcha...!!!";
    }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>captcha</title>
</head>

<body>
    <center>
        <h2>Captcha Validator</h2>
        <form method="post">
            Captcha Code : <img src="captcha.php" alt="Not Found"> <a href="form.php"><img src="refresh.png"
                    alt="Not found" height="28px"></a><br><br>
            Enter Captcha :
            <input type="text" name="captcha" Required><br><br>
            <input type="submit" value="Submit" name="submit">
        </form>
    </center>
</body>

</html>