<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <style type="text/css">
        #text{
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
        }
        #button{
            padding: 10px;
            width: 100px;
            color: white;
            background-color: lightblue;
            border: none;
        }
        #box{
            background-color: grey;
            margin: auto;
            width: 300px;
            padding: 20px;
        }
    </style>
    <div id="box">
        <form method = "post">
            <div style = "font-size: 20px; margin: 10px ; color:white">Login</div>
            <input id = "text" type="text" name="user_name"> <br> <br>
            <input id = "text" type="password" name="password"> <br> <br>

            <input id = "button" type="submit" value="Login"> <br> <br>
            <a href = "signup.php"> Click to Sign Up</a> <br> <br>
        </form>
    </div>
</body>
</html>