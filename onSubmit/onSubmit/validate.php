<?php
    session_start();
?>

<script>

let loginnav = document.getElementById("loginnav");
let regnav = document.getElementById("regnav");
let loginform = document.getElementById("loginform");
let regform = document.getElementById("register-div");
let btnremove =document.getElementById("remove");


loginnav.addEventListener("click", function(){
    regform.style.display = "none";
    loginform.style.display = "grid";
});

regnav.addEventListener("click", ()=>{
    regform.style.display = "grid";
    loginform.style.display = "none";
});


let fname = document.getElementById("fname");
let lname = document.getElementById("lname");
let emails = document.getElementById("emails");
let bday = document.getElementById("bday");
let passs = document.getElementById("passs");
let cpass = document.getElementById("cpass");
let securityQ = document.getElementById("securityQ");
let ans = document.getElementById("ans");
let errors = document.getElementById("errors");


function register(){
    if(fname.value.trim() == "" || lname.value.trim() == "" || emails.value.trim() == "" || bday.value == "" || passs.value.trim() == "" || cpass.value.trim() == "" || securityQ.value.trim() == "" || ans.value.trim() == ""){
        
        if(fname.value.trim() == ""){
            fname.setAttribute("id","error");
            fname.setAttribute("placeholder","Required Firstname!");
        }else{
            fname.setAttribute("id","valid");
        }
        if(lname.value.trim() == ""){
            lname.setAttribute("id","error");
            lname.setAttribute("placeholder","Required Lastname!");
        }else{
            lname.setAttribute("id","valid");
        }
        if(emails.value.trim() == ""){
            emails.setAttribute("id","error");
            emails.setAttribute("placeholder","Required Email!");
        }else{
            emails.setAttribute("id","valid");
        }
        if(bday.value.trim() == ""){
            bday.setAttribute("id","error");
            bday.setAttribute("placeholder","Required Birthday!");
        }else{
            bday.setAttribute("id","valid");
        }
        if(passs.value.trim() == ""){
            passs.setAttribute("id","error");
            passs.setAttribute("placeholder","Required Password!");
        }else{
            if(passs.value.trim() != cpass.value.trim()){
                errors.setAttribute("id","txterror");
                errors.innerHTML = "Password & Confrim Password Doesnt match Password!";
            }else{
                passs.setAttribute("id","valid");
                errors.innerHTML = "";
            }
        }
        if(cpass.value.trim() == ""){
            cpass.setAttribute("id","error");
            cpass.setAttribute("placeholder","Required Confirm Password!");
        }else{
            if(passs.value.trim() != cpass.value.trim()){
                errors.setAttribute("id","txterror");
                errors.innerHTML = "Password & Confrim Password Doesnt match Password!";
            }else{
                cpass.setAttribute("id","valid");
                errors.innerHTML = "";
            }
            
        }
        if(securityQ.value.trim() == ""){
            securityQ.setAttribute("id","error");
            securityQ.setAttribute("placeholder","Please select securiy Question!");
        }else{
            securityQ.setAttribute("id","valid");
        }
        if(ans.value.trim() == ""){
            ans.setAttribute("id","error");
            ans.setAttribute("placeholder","Required Answer!");
        }else{
            ans.setAttribute("id","valid");
        }
        return false;
    }else{
        alert("Register Successfully");
        return true;
    }
}


let email = document.getElementById("email_");
let pass = document.getElementById("pass_");
let errror = document.getElementById("error");

let arrEmail = [];
let arrPass = [];
</script>

<?php
include_once("database.php");

$inputEmail = $_POST["email"];
$inputPass = $_POST["pass"];
$sql = "SELECT * FROM tbl_user_info";
$execsql = mysqli_query($con, $sql);

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
function logIn(){
    if(email.value.trim() == "" || pass.value.trim() == ""){
        
        if(email.value.trim() == ""){
            email.setAttribute("id","error");
            email.setAttribute("placeholder","Required Email!");
            
        }else{
            email.setAttribute("id","valid");
        }
        if(pass.value.trim() == ""){
            pass.setAttribute("id","error");
            pass.setAttribute("placeholder","Required Password!");
            
        }else{
            pass.setAttribute("id","valid");
        }
        return false;
    }else{
        for(let i = 0; i < arrEmail.length; i++){
            if(email.value == arrEmail[i] && pass.value == arrPass[i]){
                alert("Log In Successful");
                return true;
            }
        }
        return false;
    }
}

</script>

