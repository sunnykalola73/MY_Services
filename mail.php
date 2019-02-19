<?php

    include 'connect.php';
    //$to = 'demo@site.com';
    $firstname = $_POST["name"];
    $email= $_POST["email"];
    $text= $_POST["subject"];
    $phone= $_POST["message"];
    
    $sql = "INSERT INTO query  (`name`, `email`, `subject`, `message`)  VALUES ('$firstname', '$email','$text','$phone')";    

    print_r($sql);
             
if ($database_handler->query($sql) === TRUE) {

    header('location: index.php?msg=Feedback_stored');
}

    /*$headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$firstname.'  '.$laststname.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>phone: '.$phone.'</td></tr>
        <tr><td>Text: '.$text.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed';
    }*/

?>
