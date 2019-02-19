<?php 
$set_uname=0;
if(isset($_COOKIE["username"]))
	$set_uname=1;
if($set_uname==0)
{
	$msg="You must login in order to request any service";
	header('location: index.php?msg=You%20must%20login%20in%20order%20to%20request%20any%20service#login');

}
else
{
	include "header.php";
?>
<div class="request">
	
      <form action="appointment.php" method="POST">
	  <input type="hidden" name="sid" value="<?php echo $_POST['sid']; ?>" />
		  <input type="hidden" value="1" name="new_apt"/>
				<div class="form-group col-lg-5 col-ms-5">
					<label>Description</label><br>
					<textarea rows="6" cols="50" class="form-control" name="desc" placeholder="Enter Description For Your Service Request" required></textarea><br>
				</div>
				
				<div class="form-group col-ms-4 col-lg-6">
					<label>Feasible Date</label><br>
					<input type="date" name="date" class="form-control" required><br>
				</div>
				<div class="form-group col-ms-5 col-lg-5">
					<label>Select Address</label><br>
					<input type="radio" name="address" value="Same Address" checked>Same Address<br>
					<input type="radio" name="address" value="Add New Address" >Add New Address<br>
				</div>
				<div>	
					<input type="submit" class="btn btn-primary" name="submit" value="Request"/>
				</div>
		  </form>
</div>
<?php include "footer.php"; }?>
		  