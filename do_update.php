<?php
 include "connect.php"; 
$name=$_POST['name'];
$email=$_POST['email'];
$num=$_POST['mobileno'];
$block=$_POST['block'];
$area=$_POST['area'];
$city=$_POST['city'];
$state=$_POST['state'];
    
    $sql = "UPDATE user_detail  set email='$email',name='$name',block='$block',area='$area',city='$city',state='$state',mobileno='$num'";      
if ($database_handler->query($sql) === TRUE) {
    $msg="Succesfully Updated";
    include "index.php";
}
else{
    $msg="something went wrong.. try again later";
    include "update.php";
} ?>
 <script> alert("<?php echo $msg; ?>");</script>


