<?php include "header.php" ?>
<!-- start banner Area -->
			<section class="banner-area" id="home">
				<div class="container">
					<div class="row fullscreen d-flex align-items-center">

						<div class="banner-content col-lg-6 col-md-1 justify-content-center">
                            <form>
                                <div>
                                    <caption><h1>Register Here</h1></caption>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Full Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Full Name">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">Choose Password</label>
                                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">Username</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Username">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputPassword4">Mobile No.(+91)</label>
                                        <input type="number" class="form-control" id="inputPassword4" placeholder="Mobile No." maxlength="10" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">House/Street</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Area</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="inputCity">City</label>
                                        <input type="text" class="form-control" id="inputCity" placeholder="City">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputState">State</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                <button type="button" onclick="enterotp()" class="btn btn-primary">Submit</button>
                                </div>
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