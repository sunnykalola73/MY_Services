<!--
created on 28-10-18
created by Sunny Kalola
Home services  on Demand

-->	

<?php
$set_uname=0;
if(isset($_COOKIE["username"])) {
	 $username=$_COOKIE["username"];
	 $set_uname=1;
} 
else if(isset($msg))
	{
?>
<script>
alert("<?php echo $msg; ?>");
</script>
<?php 

	}

?>
<?php  include "header.php"; ?>

			<!-- start banner Area -->
			<section class="banner-area" id="home">
				<div class="container">
					<div class="row fullscreen d-flex align-items-center">
						<div class="banner-content col-lg-7 col-md-6 justify-content-center ">
							<h6 class="text-uppercase">Don’t look further, This is our Leader</h6>
							<h1>
								All things need to repair			
							</h1>
							<p class="text-white">
								"Tired of running after local electrician or plumbers??<br>
								WAIT NO MORE!"</p>
						</div>	
						<div class="banner-img col-lg-5 col-md-6 align-self-end">
							<img class="img-fluid" src="img/banner-img.png" alt="">
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->
			
			<!-- Start service Area -->
			<section class="banner-area1 relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12" >
							<a href="manageusers.php" >
								<h1 style="color:black;">ManageUsers</h1>	
							</a>	
							
						</div>	
					</div>
				</div>
			</section>
			<!-- End service Area -->
			
			<!-- Start home-about Area -->
			<section class="home-about-area section-gap relative">			
				<div class="container">
					<div class="row align-items-center justify-content-start">
						<div class="col-lg-6 no-padding home-about-right">
							<h5>
							BEST RESIDENTIAL & COMMERCIAL SERVICES<br></h5>
							<h2>WELCOME TO EASY HOME SERVICES <br></h2>
							
							<p>
								We understand that juggling between a job and managing home tasks is not easy and leaves you with little time to pursue other dreams. Thus, we aim to simplify the entire home services experience for you. Now you can book services ranging from repairs, car spa, home cleaning, pest control, handyman and laundry right in the comfort of your home. Our robust network of agents ensure that you have a hassle free and on-time service experience.You can book a call for plumbing Servicing or any other home repair service requirement right from your home. It's quite easy and here's how it works.
							</p>
							<div class="row no-gutters">
								<div class="single-services col">
									<span class="lnr lnr-diamond"></span>
									<a href="#">
										<h4>Expert Services</h4>
									</a>
									<p>
										Usage of the Internet is becoming more common due to rapid advancement of technology.
									</p>
								</div>
								<div class="single-services col">
									<span class="lnr lnr-phone"></span>
									<a href="#">
										<h4>Great Support</h4>
									</a>
									<p>
										Usage of the Internet is becoming more common due to rapid advancement of technology.
									</p>
								</div>								
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->
<?php if($set_uname == 0){ ?>
			<!-- Start discount-section Area -->
			<section class="discount-section-area relative section-gap">
				<div class="overlay overlay-bg" id="Signin"></div>
				<div class="container">
					<div class="row align-items-center justify-content-between no-gutters">
						<div class="col-lg-6 discount-left">
							<h1 class="text-white">Want to get your problem solved faster than ever Before!</h1>
							<p class="text-white">
								Register Here
							</p>
							<div>
						
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
 Sign Up As Dealer
</button>

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
      <div class="modal-body">
        <form>
		  <div class="form-group">
		    <label for="inputAddress">Full Name</label>
		    <input type="text" class="form-control" id="name" placeholder="Enter Full Name">
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Email</label>
		      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Choose Password</label>
		      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
		    </div>
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Username</label>
		      <input type="text" class="form-control" id="inputEmail4" placeholder="Username">
		    </div>
		    <div class="form-group col-md-6">
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
		    <div class="form-group col-md-6">
		      <label for="inputCity">City</label>
		      <input type="text" class="form-control" id="inputCity">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputState">State</label>
		      <select id="inputState" class="form-control">
		        <option selected>Choose...</option>
		        <option>...</option>
		      </select>
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputAddress2">Enter OTP Code</label>
		    <input type="text" class="form-control" id="inputAddress2" placeholder="Enter OTP Code">
		  </div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
				
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
 Sign Up
</button>

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
      <div class="modal-body">
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
 
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 
</div>
							</div>
						<div class="col-lg-5 discount-right"  id="login">
							<form name="form_login" class="box" action="check_login.php" method="POST" target="_self">
							  <h1>login</h1>
							  <input type="text" name="username" id="username" placeholder="Username" autocomplete="off">
							  <input type="password" name="pass" id="pass" placeholder="Password" autocomplete="off">
							  <input type="submit" id="submit" value="login">
							</form>
						</div>
					</div>
				</div>	
			</section>
			<!-- End discount-section Area -->
<?php }?>
			<!-- Start work-process Area -->
			<section class="work-process-area pt-120">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-7">
							<div class="title text-center">
								<h1 class="mb-10">Our Working Process</h1>
								<p>It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game</p>
							</div>
						</div>
					</div>	
					<div class="total-work-process d-flex flex-wrap justify-content-around align-items-center">
						<div class="single-work-process">
							<div class="work-icon-box">
								<span class="lnr lnr-funnel"></span>
							</div>
							<h4 class="caption">Detect problem</h4>
						</div>
						<div class="work-arrow">
							<img src="img/arrow.png" alt="">
						</div>
						<div class="single-work-process">
							<div class="work-icon-box">
								<span class="lnr lnr-layers"></span>
							</div>
							<h4 class="caption">Split solution into parts</h4>
						</div>
						<div class="work-arrow">
							<img src="img/arrow.png" alt="">
						</div>
						<div class="single-work-process">
							<div class="work-icon-box">
								<span class="lnr lnr-paw"></span>
							</div>
							<h4 class="caption">Analyzing method</h4>
						</div>
						<div class="work-arrow">
							<img src="img/arrow.png" alt="">
						</div>
						<div class="single-work-process">
							<div class="work-icon-box">
								<span class="lnr lnr-smile"></span>
							</div>
							<h4 class="caption">Final result comes out</h4>
						</div>											
					<div class="row">
						<div class="col"></div>
					</div>
				</div>	
			</section>
			<!-- End work-process Area -->
						
			<!-- Start faq Area -->
			<section class="faq-area section-gap">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-12 pb-50 header-text text-center">
							<h1 class="mb-10">Frequently Asked Questions</h1>
							<p>
								Who are in extremely love with eco friendly system.
							</p>
						</div>
					</div>			
					<div class="row faq-contents justify-content-center align-items-center">
						<div class="col-lg-8 faq-left">
		                    <div class="mn-accordion" id="accordion">
		                        <!--Accordion item-->
		                        <div class="accordion-item">
		                            <div class="accordion-heading">
		                                <h3>What services do you offer in Appliances?</h3>
		                                <div class="icon">
		                                    <i class="lnr lnr-chevron-right"></i>
		                                </div>
		                            </div>
		                            <div class="accordion-content">
		                                <p>We provide  variety of services, ranging from refrigerators to geysers. However, do note that the availability of our services vary from city to city. Hence, we request you to go through the rate card prior to booking a service and skip those services not mentioned on the city specific rate card.</p>
		                            </div>
		                        </div>
		                        <!--Accordion item-->

		                        <!--Accordion item-->
		                        <div class="accordion-item">
		                            <div class="accordion-heading">
		                                <h3>Info</h3>
		                                <div class="icon">
		                                    <i class="lnr lnr-chevron-right"></i>
		                                </div>
		                            </div>
		                            <div class="accordion-content">
		                                <p>For many of us, our very first experience of learning about the celestial bodies begins when we saw our first full moon in the sky. It is truly a magnificent view even to the naked eye. If the night is clear, you can see amazing detail of the lunar surface just star gazing on in your back yard.</p>
		                            </div>
		                        </div>
		                        <!--Accordion item-->

		                        <!--Accordion item-->
		                        <div class="accordion-item">
		                            <div class="accordion-heading">
		                                <h3>danger</h3>
		                                <div class="icon">
		                                    <i class="lnr lnr-chevron-right"></i>
		                                </div>
		                            </div>
		                            <div class="accordion-content">
		                                <p>For many of us, our very first experience of learning about the celestial bodies begins when we saw our first full moon in the sky. It is truly a magnificent view even to the naked eye. If the night is clear, you can see amazing detail of the lunar surface just star gazing on in your back yard.</p>
		                            </div>
		                        </div>
		                        <!--Accordion item-->
		                        <!--Accordion item-->
		                        <div class="accordion-item">
		                            <div class="accordion-heading">
		                                <h3>Warning</h3>
		                                <div class="icon">
		                                    <i class="lnr lnr-chevron-right"></i>
		                                </div>
		                            </div>
		                            <div class="accordion-content">
		                                <p>For many of us, our very first experience of learning about the celestial bodies begins when we saw our first full moon in the sky. It is truly a m*agnificent view even to the naked eye. If the night is clear, you can see amazing detail of the lunar surface just star gazing on in your back yard.</p>
		                            </div>
		                        </div>
		                        <!--Accordion item-->
		                    </div>
						</div>						
					</div>
					
				</div>	
			</section>
			<!-- End faq Area -->		
<?php include "footer.php";  ?>	