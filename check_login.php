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
          
             if($row['block_status']==1)
             {$msg="Sorry You are blocked by admin"; }
             else
             {
             if($username==$row['username'])
             {
                 if($pass==$row['password'])
                 {
                    setcookie("username",$username); 
                    setcookie("type",$row['type']); 
                    setcookie("uid",$row['id']); 
                    
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
        }
           header('location: index.php?msg='.$msg.'');
           
    }
?>
       
	   
	   
	   