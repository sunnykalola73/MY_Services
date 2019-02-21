<?php
include 'connect.php';
$id=$_POST['name'];
$num=$_POST['num'];
if($num==0)
$total="update user set block_status='1' where id='". $id. "'";
else if($num==1)
$total="update user set block_status='0' where id='". $id. "'";
mysqli_query($database_handler,$total);


// if(!$resultset = $database_handler->query("SELECT * FROM user_detail where uid='".$id."';"))
// die("Query error");

// $row = $resultset->fetch_assoc();


// $mobile=$row['mobileno'];

// $json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=6354852451&Password=N8372C&Message=YOU_ARE_BLOCKED_DUE_TO_SOME_UNTRUSTED_ACTIVITIES&To=".urlencode($mobile)."&Key=sunka0E4ImnzyjgdGHXMZLo5Ji") ,true);
// if ($json["status"]==="success") {
//     echo $json["msg"];
//     //your code when send success
// }else{
//     echo $json["msg"];
//     //your code wnhen not send
// }



?>