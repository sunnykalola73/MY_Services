<?php
include 'connect.php';
$id=$_POST['name'];
$total="update appointment set status='Completed' where aid='". $id. "'";
mysqli_query($database_handler,$total);
?>