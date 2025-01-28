<script>
    let email = document.getElementById("email_");
    let pass = document.getElementById("pass_");

    let arrEmail = [];
    let arrPass = [];
</script>

<?php

include_once("database.php");

$inputEmail = $_POST["email"];
$inputPass = $_POST["pass"];

$sql = "SELECT * FROM tbl_user_info";
$execsql = mysqli_query($con, $sql);
?>

<?php
while($fetchdata = mysqli_fetch_assoc($execsql)){
   if(isset($fetchdata)){
        $email = $fetchdata["email"];
        $pass = $fetchdata["password"];
        ?>
        <script>
            arrEmail.push("<?php echo $email?>");
            arrPass.push("<?php echo $pass?>");
        </script>
        <?php
    }
}
?>
<script>
    for(let email of arrEmail){
        if(email === email.value){
            console.log(email);
            for(let pass of arrPass){
                if(pass === pass.value){
                    <?php header("location: home.html"); ?>
                }
            }
        }
    }
</script>


