
<?php $page="services"; ?>
<?php include "header.php"; include "connect.php"; 
	
if(!$resultset = $database_handler->query("SELECT * FROM service ;"))
             die("Query error");
			 
             
       
?>
<!-- start banner Area -->
<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Services				
							</h1>
							<br>
							<input type="text" name="location" placeholder="Enter Location">
							<input type="text" name="service_type" placeholder="Enter Service Type">
							<button type="button">SEARCH</button>	
							<!--<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="services.html"> Services</a></p>
					-->	</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->
	
	<table class="tab" align="center" cellpadding="10px">
	<col width="200">
	<col width="500">
	<col width="100">
	<?php while($row = $resultset->fetch_assoc()) { ?>
	<tr><form action="request.php">
			<td><img class="xyz"  height="90%" style="margin-left:0"  src="<?php echo $row['image']; ?>" alt=""></td>
			<td>
				<h3 align="center"> <?php echo $row['sname']; ?> </h3><br><p class="abc"> <?php echo $row['description']; ?> </p></td>
			<td><input type="submit" value="Request" /></td>
	</form>
	</tr><br>
	<?php } ?>
	
		

</table>


	<?php include "footer.php"; ?>
