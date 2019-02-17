<?php

if (!isset($_POST['username']))
            include './index.php';
else
    {
        include 'connect.php';
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        
        if(!$resultset = $database_handler->query("SELECT * FROM user WHERE username ='". $username. "';"))
             die("Query error");
       
             $row = $resultset->fetch_assoc();
             
             if($username==$row['username'])
             {
                 if($pass==$row['password'])
                 {
                    setcookie("username",$username); 
                    
                 }
                 else
                 {
                 $msg="Wrong Password";
                 }
            }
            else
            {
                $msg="Wrong Username";
            }
            header("location: ./index.php");        
           
    }
?>
       