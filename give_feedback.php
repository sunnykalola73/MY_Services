<?php
session_start();

 include "connect.php"; 
$feedback=$_REQUEST['feedback'];
$userid=$_COOKIE["uid"];
$sid = $_SESSION['service'];

$sql = "INSERT INTO give_feedback (uid,sid,feedback) VALUES ($userid,$sid,'$feedback')";

if ($database_handler->query($sql) === TRUE) {
    $msg="Feedback registered";
    include "index.php";
}
else{
    $msg="something went wrong.. try again later";
    include "appointment.php";
    
}

?>