 <?php

    //  Getting Form Data---------------------------
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $bday = $_POST["bday"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];
    $security = $_POST["security"];

    

    // Condition if fields are empty-------------------

    if(empty($fname) || empty($lname) || empty($email) || empty($bday) || empty($pass) || empty($cpass) || empty($security)){
        echo "<h1>Please fill all filled</h1>";
        if($pass <> $cpass){
            echo "Passwords does not match, please try again <br>";
        }
        if(empty($fname)){
             echo "<h1>Invalid! Empty First Name!</h1?<br>";
        }
        if(empty($lname)){
             echo "<h1>Invalid! Empty Last Name!</h1?<br>";
        }
        if(empty($email)){
             echo "<h1>Invalid! Empty Email!</h1?<br>";
        }
        if(empty($bday)){
             echo "<h1> Make sure you select your Birthday</h1?<br>";
        }
        if(empty($pass)){
             echo "<h1>Invalid! Empty Password!</h1?<br>";
        }
        if(empty($cpass)){
             echo "<h1> Make sure you enter your Confirmation Password</h1?<br>";
        }
        if(empty($security)){
             echo "<h1> Make sure you select your Confirmation Password</h1?<br>";
        }
    }
     else{

    //STEP 1: Connect to database -------------
    include_once("conn.php");

    //STEP 2: Prepare the query----------------
    $insertQuery = "INSERT INTO tbl_user_info(first_name, last_name, email, birthday, passwords, security_question) 
                                        VALUES('$fname', '$lname', '$email', '$bday', '$pass', '$security')";

    //STEP 3: Execute the query----------------
    $execQuery = mysqli_query($con, $insertQuery);
        echo "
        <div class='main'>
            <div class='nav'>
                <a href='form-reg.php'>Register Form</a>
                <a href='handle-reg.php'>Handler Page</a>
            </div>

            <div class='output'>
                <h1> Welcome to PHPmySQL $fname .$lname</h1>
            
            </div>
        </div>";

        if($execQuery){
            header ("location: form-reg.php");
        }

    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Handler Page</title>
</head>
<body>

       
        
    <a href='form-reg.php'><---Back to Register Form'</a>
</body>
</html>