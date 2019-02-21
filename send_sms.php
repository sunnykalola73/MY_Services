
<?php
$mobile="7069499460";
$message="your%20easy%20service%20otp%20is%203344";
$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=7567704505&Password=H7257Q&Message="."your OTP is".$otp."&To=".urlencode($mobile)."&Key=koladcDQfRuobULmk07sECNwelTF8") ,true);
if ($json["status"]==="success") {
    echo $json["msg"];
    //your code when send success
}else{
    echo $json["msg"];
    //your code when not send
}
?>

<?php
// $num=$_POST['num'];
// $otp=$_POST['name'];
//     header('location: https://smsapi.engineeringtgr.com/send/?Mobile=9898448254&Password=H3849A&Message="Easy Service OTP is"'.$otp.' "&To='.$num.'&Key=romitkFhIPjeJUvD3NwVm42dL');
?>