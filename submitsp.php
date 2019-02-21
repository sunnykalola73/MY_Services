<?php
include "header.php";
include "connect.php";

$aid=$_POST['aid'];
$aprooval=$_POST['aprooval'];


$total="update appointment set aprooval='".$aprooval."' where aid='". $aid. "'";
mysqli_query($database_handler,$total);
header('location: servicep.php');

?>