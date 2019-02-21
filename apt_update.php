<?php
include "header.php";
include "connect.php";

$aid=$_POST['aid'];
$rdate=$_POST['rdate'];
$timefrom = $_POST['timefrom'];
$timeto = $_POST['timeto'];
$uid = $_COOKIE['uid'];

$total="update appointment set date='".$rdate."',timefrom='".$timefrom."',timeto='".$timeto."' where aid='". $aid. "'";
mysqli_query($database_handler,$total);
$total="update user_detail set rs_count = rs_count + 1 where uid='". $uid. "'";
mysqli_query($database_handler,$total);

if(!$resultset = $database_handler->query("SELECT sid FROM appointment where aid='".$aid."';"))
			 die("Query error");
             $row = $resultset->fetch_assoc();
             
if(!$resultset1 = $database_handler->query("SELECT uid FROM service where sid='".$row['sid']."';"))
die("Query error");
$row1 = $resultset1->fetch_assoc();
          
if(!$resultset2 = $database_handler->query("SELECT mobileno FROM user_detail where uid='".$row1['uid']."';"))
die("Query error");
$row2 = $resultset2->fetch_assoc();


$mobile=$row2['mobileno'];
$message=$_COOKIE['username']."_has_rescheduled_appointment.";
 $json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=7567704505&Password=H7257Q&Message=".$message."&To=".$mobile."&Key=koladcDQfRuobULmk07sECNwelTF8") ,true);
 if ($json["status"]==="success") {
     echo $json["msg"];
     //your code when send success
 }else{
     echo $json["msg"];
     //your code when not send
 }

// header('location: appointment.php');

?>