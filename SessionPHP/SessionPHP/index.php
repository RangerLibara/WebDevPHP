<?php
session_start();

// if(empty($_SESSION["user"]) && empty($_SESSION["pass"])){
//     if(empty($_SESSION["user"])){
//         $_SESSION["user"] = "Invalid / Not filled";
//     }
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Session</title>
</head>
<body>
    <div class="form">
        <form action="handler.php" method="POST">
            <h3> Log-in</h3>
            <div class="type">
                <input type="text" name="username" id="user" placeholder="Username">
            </div>
            <div class="type">
                <input type="password" name="password" id="pass" placeholder="Password">
            </div>
            <div class="type">
                <input type="submit" value="Continue">
            </div>
        </form>
    </div>

    
</body>
</html>