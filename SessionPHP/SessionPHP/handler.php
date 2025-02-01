<?php
session_start();

if(isset($_POST["username"]) && isset($_POST["password"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $_SESSION["user"] = $username;
    $_SESSION["pass"] = $password;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Handler</title>
</head>
<body>
    <h1>
    <?php
    if(empty($_SESSION["user"]) && empty($_SESSION["pass"])){

        echo"Invalid! Empty Username!";
        echo"Invalid! Empty Password!";
    }

    else if(empty($_SESSION["user"])){
        echo "<h1>Invalid! / Username Not Filled </h1>";
        echo "<a href=\"index.php\">Try Again....</a>";
    }
    elseif(empty($_SESSION["pass"])){
        echo "<h1>Invalid! / Password Not Filled </h1>";
        echo "<a href=\"index.php\">Try Again....</a>";
    }   
    else{
  
    echo"

         <div class=\"form\">
        <div class=\"nav\">
             <a href=\"page1.php\">PAGE1</a>
             <a href=\"page2.php\">PAGE2</a>
            <a href=\"destroy.php\">Logout</a>
         </div>

         <div class=\"info\">
        Welcome to PHP ".$_SESSION["user"];
    }
    ?>
    </h1>
    

    
    


</body>
</html>