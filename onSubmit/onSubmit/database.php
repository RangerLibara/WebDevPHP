<?php
    session_start();
    
    $localhost = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'activity6db';

    $con = mysqli_connect($localhost, $user, $pass, $dbname);

?>