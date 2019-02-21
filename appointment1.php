<script type="text/javascript">
  function popup(){
    document.write("Hello"); 
  }
</script>
<?php
$set_uname=0;
if(isset($_COOKIE["username"])) {
	 $username=$_COOKIE["username"];
     $uid=$_COOKIE["uid"];
     
     $set_uname=1;
     include "connect.php";

   include "header.php";  	
if(!$resultset = $database_handler->query("SELECT * FROM user_detail where uid =".$uid." ;"))
die("Query error");

$row = $resultset->fetch_assoc();
$address=$row['block'].",".$row['area'].",".$row['city'].",".$row['state'].".";
$mobile_no=$row['mobileno'];
     if(isset($_POST['new_apt']))
     {
     $desc = $_POST['desc'];
     $date = $_POST['date'];
     $sid = $_POST['sid'];
     $uid=$_COOKIE["uid"];
     $address = $_POST['address'];
     if($address=="Same Address")
        $address=$row['block'].",".$row['area'].",".$row['city'].",".$row['state'].".";
        $sql = "INSERT INTO  appointment (`uid`, `sid`, `date`, `address`,`description`)  VALUES ('$uid', '$sid','$date','$address','$desc')";    
        if ($database_handler->query($sql) === TRUE) {

          ?> 
          <script>
          alert("appoinment booked");
          </script>
           <?php
      }
    }
    if(!$resultset = $database_handler->query("SELECT * FROM appointment where uid =".$uid." ORDER BY date DESC ;"))
    die("Query error");
    ?><div class = "col-md-10 offset-md-1">
    <div id="accordion"><?php
    $i=0;
    session_start();  //gvczhgchsahchjasjch
    while( $row = $resultset->fetch_assoc())
   {$i=$i+1;
    $_SESSION['service'] = $row['sid'];
    if(!$resultset1 = $database_handler->query("SELECT * FROM  service where sid =".$row['sid']." ;"))
    die("Query error");
    $row1=$resultset1->fetch_assoc();
?>


  <div class="card">
    <div class="card-header" id="<?php echo 'heading'.$i.''; ?>">
      <h5 class="mb-0">
        <button class="btn btn-link">
          <span><?php echo $row1['sname']; ?></span>  <b><u>Date:</b> <?php echo $row['date']; ?> </u>
        </button>

      </h5>
    </div>
    
 
    <div id="<?php echo 'collapse'.$i.''; ?>">
      <div class="card-body" style="text-align:justify">
        <b><u>Description:</u></b><?php echo $row1['description']; ?>
        <p><br><span id="<?php echo 'status'.$row['aid'];?>"><b><u>status:-</b></u> <?php echo $row['status']; ?> </span><b><u>Address:-</b></u><?php echo $row['Address']; ?>
        <?php if($row['status']!="Completed") { ?>
                  <button type="button" onclick="edit_apt();" class="btn btn-secondary">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</button> 
       <button  type="button" onclick="cancel_apt(<?php echo $row['aid']; ?>);" class="btn btn-secondary">Cancel Appointment</button>
       <button type="button" onclick="complete_apt(<?php echo $row['aid']; ?>);" class="btn btn-secondary">Mark as Completed</button>
        <?php }
        else{ ?>
         
         <!-- Button trigger modal -->
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
         <!-- Button to Open the Modal -->
         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
 Give Feedback
</button>
							<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Give Your Feedback</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal_body"> 
        <form action="give_feedback.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      Feedback:<br>
      <textarea rows=5 cols=50 name="feedback" placeholder="Your Feedback"></textarea>
      
      <input type= submit value="submit">
    </div>
    </div>
  </div>
</div>
 

 Sign Up
</button></a>


<script>
	function enterotp()
	{
	
	document.getElementById("modal_body").innerHTML = '<div class="form-group"><label for="inputAddress2">Enter OTP</label><input type="text" class="form-control" id="otp" placeholder="OTP"> </div>';	
	document.getElementById("modal_footer").innerHTML = '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button><button type="button" onclick="verifyotp()" class="btn btn-primary">Submit1</button>';
	}
	function verifyotp()
	{
		var eotp=document.getElementById("modal_body").value;
		if(eotp==otp)
			alert("successfully created");
		else
			alert("wrong login");
	}
	</script>
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Get Yourself Registered</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal_body"> 
        <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
	<div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
	</div>

</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
 
</div>
	
      <?php   
       } ?>
   
   <?php } ?>
</div>
</div>
<script>
    function complete_apt(id)
    {
       
        $.ajax({type:"POST",
							url:"complete.php",
							data:{name:id},
							success:function(msg)
							{ 
                                alert("Appointment marked as Completed.");
                                res=1;
                                document.getElementById("status"+id).innerHTML="<b><u>status:</b></u> Completed";
							}
							});
            
            
    }
    function cancel_apt(id)
    {
       
        $.ajax({type:"POST",
							url:"cancel.php",
							data:{name:id},
							success:function(msg)
							{ 
                                alert("Appointment Canceled.");
                                res=1;
                                document.getElementById("status"+id).innerHTML="<b><u>status:</b></u> Cancel";
							}
							});
            
            
    }
    </script>
<?php
include 'footer.php';
} 
else
{
    header('location: index.php?msg=You%20must%20login%20in%20order%20to%20request%20any%20service#login');

}
?>
