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
	<div class="row">
	<div class="col-md-6">
      <form action="appointment.php" method="POST">
	  <input type="hidden" name="sidaa" value="<?php echo $_POST['sidaa']; ?>" />
	  <input type="hidden" name="sid" value="<?php echo $_POST['sid']; ?>" />
		  <input type="hidden" value="1" name="new_apt"/>
				<div class="form-group col-lg-8 col-ms-8">
					<label>Description</label><br>
					<textarea rows="6" cols="50" class="form-control" name="desc" placeholder="Enter Description For Your Service Request" required></textarea><br>
				</div>
				
				<div class="form-group col-ms-4 col-lg-6">
					<label>Feasible Date</label><br>
					<input type="date" name="date" class="form-control" required><br>
				</div>
				
				<div class="form-group col-ms-4 col-lg-6">
					<label>Feasible Time</label><br>
					<label>from</label>
					<input type="time" name="timefrom" class="form-control" required><br>
					<label>to</label>
					<input type="time" name="timeto" class="form-control" required><br>
				</div>
				
				<div
				 class="form-group col-ms-5 col-lg-5">
					<label>Select Address</label><br>
					<input type="radio" name="address" value="Same Address" checked>Same Address<br>
					<input type="radio" name="address" value="Add New Address" >Add New Address<br>
				</div>
				<div>	
					<input type="submit" class="btn btn-primary" name="submit" value="Request"/>
				</div>
		  
		  </div>
		  <div class="col-md-5">
		  <span style="font-size:20px;"><b><?php echo $_POST['sidaa']; ?></b></span>
		  <table class="table">
		  <thead class="thead-dark">
		  <tr style="align:center;"><td>select</td><td>Dealer ID</td><td>Visting Charge</td><td>Estimation</td></tr>
		  </thead>
		  <tbody>
		  <?php
		  include "connect.php";
if(!$resultset = $database_handler->query("SELECT * FROM service where sname='".$_POST['sidaa']."';"))
			 die("Query error");
			 $i=0;
			 while($row = $resultset->fetch_assoc()) { 
			 $i=$i+1;

			 ?>
		 
		  <tr><td><input name="suid" type="checkbox" class="form-check-input" value="<?php  echo $row['uid']; ?>"></td>
		  <td><?php echo $i; ?></td>
		  <td><?php echo $row['visit_charge']; ?></td><td><?php echo $row['estimation']; ?></td></tr>
			 </tr><?php } ?>
			 </tbody>
		  </table>
		  </form>
		  </div></div>

</div>
<?php include "footer.php"; }?>
		  