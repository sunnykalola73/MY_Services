
<?php $page="services"; ?>
<?php include "header.php"; include "connect.php"; 
if(isset($_POST['query']))
{
	if(!$resultset = $database_handler->query("SELECT * FROM service where sname='".$_POST['sname']."' ;"))
             die("Query error");
			 

}

else
{
if(!$resultset = $database_handler->query("SELECT * FROM service  ;"))
             die("Query error");
}		 
             
       if(isset($_GET['msg'])){
?>
<script> alert("<?php echo $_GET['msg']; ?>"); </script>
	   <?php } ?>
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
							<form action="#" method="POST">
							<input type="hidden" name="query" value="1">
							<input list="data" name="city" onkeyup="showHint(this.value);" placeholder="Enter Location">   
							<datalist id="data"></datalist>
							<input list="data1" name="sname" onkeyup="showHint1(this.value);" name="service_type" placeholder="Enter Service Type">
							<datalist id="data1"></datalist>
							<input type="submit" value="SEARCH" />	
	   </form>
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

			
		
		<div class="d-flex flex-row">
		<div>
	<tr><form action="request.php" method="POST">
	<input type="hidden" name="sidaa" value="<?php echo $row['sname']; ?>" />
	<input type="hidden" name="sid" value="<?php echo $row['sid']; ?>" />
			<td><img class="xyz" width="100%" style="margin-left:0"  src="<?php echo $row['image']; ?>" alt=""></td>
<div>
			<td>
				<h3 align="center"> <?php echo $row['sname']; ?> </h3><br><p class="abc"> <?php echo $row['description']; ?> </p></td>
			<td><input type="submit" value="Request"></td>
	</form>
	</tr><br>
	</div></div>
	<?php } ?>
	

	<script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("data").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("data").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?location=" + str, true);
        xmlhttp.send();
    }
}
function showHint1(str) {
    if (str.length == 0) { 
        document.getElementById("data1").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("data1").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint1.php?location=" + str, true);
        xmlhttp.send();
    }
}
</script>		

</table>


	<?php include "footer.php"; ?>
