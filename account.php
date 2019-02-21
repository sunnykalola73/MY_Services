<?php include "header.php";
include 'connect.php';
$sql = "SELECT * FROM user_detail where uid=".$_COOKIE['uid'];
$result = $database_handler->query($sql);	
$row = $result->fetch_assoc();
?>
<!-- start banner Area -->
			<section class="banner-area" id="home" align="center">
			 
				<div class="container" >
				 <caption><h1>UPDATE YOUR PROFILE</h1></caption>
					<div class="row  d-flex align-items-center" >
     
						<div class="banner-content col-lg-6 col-md-6 justify-content-center" media="all" >
                            <form action="do_update.php" method="POST">
                               
                                   
								 
                         
                                <div class="form-group">
                                    <label for="inputAddress">Full Name</label>
                                    <input name="name" type="text" class="form-control" id="name" value="<?php echo $row["name"]; ?>" required>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-* ">
                                        <label for="inputEmail4">Email</label>
                                        <input name="email" type="email" class="form-control" id="inputEmail4" value="<?php echo $row["email"]; ?>" required>
                                    </div>
                                    <div class="form-group col-md-* ">
                                        <label for="inputPassword4">Mobile No.(+91)</label>
                                        <input name="mobileno" type="number" class="form-control" id="inputPassword4" value="<?php echo $row["mobileno"]; ?>" maxlength="10" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">House/Street</label>
                                    <input type="text" name="block" class="form-control" id="inputAddress" value="<?php echo $row["block"]; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Area</label>
                                    <input type="text" name="area" class="form-control" id="inputAddress2" value="<?php echo $row["area"]; ?>" required>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-* col-sm">
                                        <label for="inputCity">City</label>
                                        <input type="text" name="city" class="form-control" id="inputCity" value="<?php echo $row["city"]; ?>" required>
                                    </div>
                                    <div class="form-group col-md-* col-sm">
                                        <label for="inputCity">City</label>
                                        <input type="text" name="state" class="form-control" id="inputCity" value="<?php echo $row["state"]; ?>" required>
                                    </div>
                                </div>
                                <div>
                                
                                </div>
                                <input type="submit"  class="btn btn-primary" value="submit" />
							
                            </form>
                        </div>	
																
					</div>
				</div>
			</section>
			<!-- End banner Area -->
<?php  include "footer.php" ?>