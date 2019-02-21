<?php
 include "connect.php"; 
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$user=$_POST['username'];
$num=$_POST['mobileno'];
$block=$_POST['block'];
$area=$_POST['area'];
$city=$_POST['city'];
$state=$_POST['state'];


$sql = "INSERT INTO user  ( username, password)
VALUES ('$user', '$pass')";    

             if($_POST['otp']!=$_POST['ootp']){
            ?> <script>alert("Wrong OTP");</script> <?php
            header('location: signup.php');
            }
if ($database_handler->query($sql) === TRUE) {
    $ques_id=mysqli_insert_id($database_handler);
    $sql = "INSERT INTO user_detail  ( uid, email,name,block,area,city,state,mobileno)
VALUES ('$ques_id', '$email','$name','$block','$area','$city','$state','$num')";    
if ($database_handler->query($sql) === TRUE) {
    $msg="Succesfully Signed UP";
    include "index.php";
}
else{
    $msg="something went wrong.. try again later";
    include "signup.php";
    
}

}
else
{
    $msg="something went wrong.. try again with changing username";
    include "signup.php";
}
?>