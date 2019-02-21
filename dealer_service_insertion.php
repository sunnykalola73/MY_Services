<?php

include "header.php";
include "connect.php";

$sname=$_POST['service'];
$type = $_POST['type'];
$charge = $_POST['charge'];
$est = $_POST['est'];
$description =$_POST['description'];
$image =$_POST['image'];
$uid=$_COOKIE['uid'];

		mysqli_query($database_handler,"INSERT INTO service (sname,uid,type,description,image,visit_charge,estimation)
				VALUES ('$sname','$uid','$type','$description','$image','$charge','$est')");
		
		?><script> alert("You succesfully registered for providing the service");
</script>
<?php
include "footer.php";
?>