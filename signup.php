<?php include "header.php";

?>
<!-- start banner Area -->
			<section class="banner-area" id="home">
				<div class="container" >
					<div class="row  d-flex align-items-center">

						<div class="banner-content col-lg-6 col-md-5 justify-content-center" media="all">
                            <form action="check_signup.php" method="POST">
                                <div>
                                    <caption><h1>Register Here</h1></caption>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Full Name</label>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Enter Full Name" required>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-* ">
                                        <label for="inputEmail4">Email</label>
                                        <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
                                    </div>
                                    <div class="form-group col-md-* ">
                                        <label for="inputPassword4">Choose Password</label>
                                        <input name="pass" type="password" class="form-control" id="inputPassword4" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-* col-sm-*">
                                        <label for="inputEmail4">Username</label>
                                        <input name="username" type="text" class="form-control" id="inputEmail4" placeholder="Username" required>
                                    </div>
                                    <div class="form-group col-md-* ">
                                        <label for="inputPassword4">Mobile No.(+91)</label>
                                        <input name="mobileno" type="number" class="form-control" id="inputPassword4" placeholder="Mobile No." maxlength="10" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">House/Street</label>
                                    <input type="text" name="block" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Area</label>
                                    <input type="text" name="area" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" required>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-* col-sm">
                                        <label for="inputCity">City</label>
                                        <input type="text" name="city" class="form-control" id="inputCity" placeholder="City" required>
                                    </div>
                                    <div class="form-group col-md-* col-sm">
                                        <label for="inputCity">City</label>
                                        <input type="text" name="state" class="form-control" id="inputCity" placeholder="state" required>
                                    </div>
                                </div>
                                <div>
                                
                                </div>
                                <input type="submit"  class="btn btn-primary" value="submit" />
                            </form>
                        </div>	
						<div class="banner-img col-lg-5 col-md-4 align-self-end">
							<img class="img-fluid" src="img/banner-img.png" alt="">
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->
<?php  include "footer.php" ?>