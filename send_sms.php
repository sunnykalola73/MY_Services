
<?php
$num=$_POST['num'];
$otp=$_POST['name'];
    header('location: https://smsapi.engineeringtgr.com/send/?Mobile=9898448254&Password=H3849A&Message="Easy Service OTP is"'.$otp.' "&To='.$num.'&Key=romitkFhIPjeJUvD3NwVm42dL');
?>