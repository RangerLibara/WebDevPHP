<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="mobile.PNG">
    <title>Ranger Libara | Activity 6</title>
</head>
<body>
    <nav>
        <div>
            <h1><span>R</span>anger | Activity 6</h1>
        </div>
        <div id="links">
            <button id='loginnav'>Login</button>
            <button id='regnav'>Register</button>
        </div>
    </nav>
    <div id="container">
        <form action="home.html" method="post" onsubmit="return logIn()" id='loginform'>
            <h1>Login</h1>
            <div>
                <label for="email_">Email</label>
                <input type="email" name="email" id="email_">
            </div>

            <div>
                <label for="pass_">Password</label>
                <input type="password" name="pass" id="pass_">
            </div>
            <div class="center">
                <input type="submit" value="Submit" id="submit" class="center">
            </div>
            <div id="errror">

            </div>
        </form>
        
        <form action="registerhandler.php" method="post" onsubmit="return register()" id="register-div">
            <h1>Register</h1>
            <div>
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname">
            </div>
            <div>
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname">
            </div>
            <div>
                <label for="emails">Email</label>
                <input type="email" name="emails" id="emails">
            </div>
            <div>
                <label for="bday">Birth Date</label>
                <input type="date" name="bday" id="bday">
            </div>
            <div>
                <label for="passs">Password</label>
                <input type="password" name="passs" id="passs">
            </div>
            <div>
                <label for="cpass">Confirm Password</label>
                <input type="password" id="cpass">
            </div>
            <div>
                <label for="cpass">Security Question</label>
                <select name="sec_questions" id="securityQ">
                    <option value="">-- Select Security Question --</option>
                    <option value="What was the name of the boy or the girl you first kissed?">What was the name of the boy or the girl you first kissed?</option>
                    <option value="Where were you when you had your first kiss?">Where were you when you had your first kiss?</option>
                    <option value="In what city did you meet your spouse/significant other?">In what city did you meet your spouse/significant other?</option>
                    <option value="What was the name of your first stuffed animal?">What was the name of your first stuffed animal?</option>
                    <option value="What is the middle name of your youngest child?">What is the middle name of your youngest child?</option>
                </select>
            </div>
            <div>
                <label for="ans">Answer</label>
                <input type="text" name="ans" id="ans">
            </div>
            <div class="center">
                <input type="submit" value="Submit" id="submits" class="center">
            </div>
            <div id="errors">

            </div>
        </form>
    </div>
    
    <?php
        include_once("validate.php");
    ?>
</body>
</html>