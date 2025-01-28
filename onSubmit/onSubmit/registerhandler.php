<?php

include_once("database.php");

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$emails = $_POST["emails"];
$bday = $_POST["bday"];
$pass = $_POST["passs"];
$securityQ = $_POST["sec_questions"];
$ans = $_POST["ans"];

$sql = "SELECT * FROM tbl_user_info WHERE first_name = '$fname' AND last_name = '$lname'";
$execsql = mysqli_query($con, $sql);
$fetchdata = mysqli_fetch_assoc($execsql);

if($fetchdata){
        $_SESSION["error"] = "Account Exist";
        header("location: index.php");
}else{
    $query = "INSERT INTO tbl_user_info VALUES(NULL,'$fname','$lname','$emails','$bday','$pass','$securityQ','$ans')";
    $execquery = mysqli_query($con, $query);
    if($execquery){
        $_SESSION["register"] = "Register Successfuly";
        header("location: home.html");
    }
}

?>