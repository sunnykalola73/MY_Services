<?php
include 'connect.php';
$id=$_POST['name'];
$num=$_POST['num'];
if($num==0)
$total="update user set block_status='1' where id='". $id. "'";
else if($num==1)
$total="update user set block_status='0' where id='". $id. "'";
mysqli_query($database_handler,$total);
?>