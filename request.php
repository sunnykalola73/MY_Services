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
	include "connect.php";
	if(!$resultset = $database_handler->query("SELECT * FROM user where id='".$_COOKIE['uid']."';"))
			 die("Query error");
			 $row = $resultset->fetch_assoc();
			if($row['block_status']==1)
			{
  header('location: Services1.php?msg=Sorry You are blocked and can not request service due to wrong activities'); } ?>
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
				<label>Pay Token Amount of 100 Rs. </label>
				
				
				<div>	
					<input type="submit" class="btn btn-primary" name="submit" value="Request"/>
				</div>
		  
		  </div>
		  <div class="col-md-5">
		  <span style="font-size:20px;"><b><?php echo $_POST['sidaa']; ?></b></span>
		  <table class="table">
		  <thead class="thead-dark">
		  <tr style="align:center;"><td>select</td><td>Dealer Name</td><td>Visting Charge</td><td>Estimation</td></tr>
		  </thead>
		  <tbody>
		  <?php
			$l=0;
		  include "connect.php";
if(!$resultset = $database_handler->query("SELECT * FROM service where sname='".$_POST['sidaa']."';"))
			 die("Query error");
			 $i=0;
			 $lan="";
			 $marker="";
			 
			 while($row = $resultset->fetch_assoc()) { 
			 $i=$i+1;
			
			 if(!$resultset2 = $database_handler->query("SELECT * FROM user_detail where uid='".$row['uid']."';"))
			 die("Query error");
			 $row2 = $resultset2->fetch_assoc();
			 $pname=$row2['name'];  			 

			 if(!$resultset1 = $database_handler->query("SELECT * FROM latlon where uid='".$row['uid']."';"))
			 die("Query error");
			 $row1 = $resultset1->fetch_assoc();
			 ?>
		 <?php $did[$l]=$row['uid']; $l++; ?>
		  <tr><td><input name="suid" type="checkbox" class="form-check-input" value="<?php  echo $row['uid']; ?>"></td>
			<?php $lan.= "var uluru".$i." = {lat: ".$row1['lan'].", lng: ".$row1['lat']."};"; 
			$laninit[$i-1]=$row1['lan'];
			$loninit[$i-1]=$row1['lat'];
		 	$marker.= "var marker = new google.maps.Marker({position: uluru".$i.", map: map,label:'".$pname."'});";
		  ?>
		  <td><?php echo $pname; ?></td>
		  <td><?php echo $row['visit_charge']; ?></td><td><?php echo $row['estimation']; ?></td></tr>
			 </tr><?php } 
			 
			 if(!$resultset1 = $database_handler->query("SELECT * FROM latlon where uid='".$_COOKIE['uid']."';"))
			 die("Query error");
			 $row1 = $resultset1->fetch_assoc();
			$lan.= "var uluru".($i+1)." = {lat: ".$row1['lan'].", lng: ".$row1['lat']."};";
			$userlan=$row1['lan'];
			$marker.= "var marker = new google.maps.Marker({position: uluru".($i+1).", map: map,label:'My_Location'});";
			$userlon=$row1['lat'];
			
			// print($lan);
			// print($marker);
			 ?>
			 </tbody>
		  </table>
		  </form>
		  
		  <h3>My Google Maps Demo</h3>
<!--The div element for the map -->
<div id="map"></div>
<!-- Replace the value of the key parameter with your own API key. -->
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcv217to_EJ6vmu8Aiqe3rpnDFqHiVK9M&callback=initMap">
</script>
<style>
/* Set the size of the div element that contains the map */
#map {
  height: 600px;  /* The height is 400 pixels */
  width: 150%; 
  float:right; /* The width is the width of the web page */
 }
 </style>
 
 <script>
function initMap() {
  // The location of Uluru
  
<?php print($lan); ?>


  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 8, center: uluru1});
  // The marker, positioned at Uluru
  <?php print($marker); ?>
	}
</script>
<?php
 function DistAB($lat_a,$lon_a,$lat_b,$lon_b)

{
		$delta_lat = $lat_b - $lat_a ;
		$delta_lon = $lon_b - $lon_a ;

		$earth_radius = 6372.795477598;

		$alpha    = $delta_lat/2;
		$beta     = $delta_lon/2;
		$a        = sin(deg2rad($alpha)) * sin(deg2rad($alpha)) + cos(deg2rad($lat_a)) * cos(deg2rad($lat_b)) * sin(deg2rad($beta)) * sin(deg2rad($beta)) ;
		$c        = asin(min(1, sqrt($a)));
		$distance = 2*$earth_radius * $c;
		$distance = round($distance, 4);

		return $distance;

}
?>	
<table class="table table-stripped">
<tr><td>Dealer Name</td><td>Distance</td><td>Dealer Mobile</td></tr>
<?php 

for($j=0;$j<$i;$j++){ ?>
	<tr><td><?php if(!$resultsetn = $database_handler->query("SELECT * FROM user_detail where uid='".$did[$j]."';"))
			 die("Query error");
			 $rown = $resultsetn->fetch_assoc();
			 echo $rown['name'];
			  ?></td><td><?php print(DistAB($laninit[$j],$loninit[$j],$userlan,$userlon)); print(" KM");?></td><td><?php echo $rown['mobileno']; ?></td></tr>
<?php } ?>
 
</table>
</div></div></div>
<?php include "footer.php"; }?>
		  