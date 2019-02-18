<?php
include 'connect.php';
$id=$_POST['name'];
$total="update user set block_status='1' where id='". $id. "'";
mysqli_query($database_handler,$total);
?>