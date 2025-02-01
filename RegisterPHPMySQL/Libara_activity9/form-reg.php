<?php
    include_once("conn.php");

    $query = "SELECT * FROM tbl_user_info";

    $execQuery = mysqli_query($con, $query);

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Registration</title>
</head>
<body>
    <div class="main">
        <h1>Welcome to Activity 9: PHP + mySQL </h1>
        <div class="form">
            <form action="handle-reg.php" method="POST">
                <label for="fname">First Name:</label>
                <input type="text" id="fname" name="fname" placeholder="First Name">
                <br>
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname" placeholder="Last Name">
                <br>
                <label for="email">Email Address:</label>
                <input type="text" id="email" name="email" placeholder="Email">
                <br>
                <label for="bday">Birthday:</label>
                <input type="date" id="bday" name="bday">
                <br>
                <label for="pass">Password:</label>
                <input type="password" id="pass" name="pass" placeholder="Password">
                <br>
                <label for="cpass">Confirm Password: </label>
                <input type="password" id="cpass" name="cpass" placeholder="Confirm Password">
                <br>
                <label for="security">Security question:</label>
                    <select id="security" name="security">
                        <option value="In what city were you born?">In what city were you born?</option>
                        <option value="What is the name of your favorite pet?">What is the name of your favorite pet?</option>
                        <option value="What was your favorite food as a child?">What was your favorite food as a child?</option>
                        <option value="What high school did you attend?">What high school did you attend?</option>
                <br>    
                <br>
 
                <input type="submit">
            </form>            
        </div>
        <div class="database">

        </div>
        <div class="register">
        <h1> Register User</h1>
        <?php
        // STEP 1: Connect to Database
            // include_once()

            //STEP 2: Retrieve Data from Database
            $selectQuery = "SELECT * FROM tbl_user_info";
        
            // STEP 3:
            $execQuery = mysqli_query($con, $selectQuery);

            //STEP 4: Fetch all rows & column (Associative array)
            while($items = mysqli_fetch_assoc($execQuery)){

                $fname = $items["first_name"];
                $lname = $items["last_name"];
                echo " <div>$fname $lname </div>";
                    
                    
            }


        ?>
    </div>

</body>
</html>