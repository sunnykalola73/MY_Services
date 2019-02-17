<!--
created on 28-10-18
created by Sunny Kalola
Home services  on Demand

-->	

<?php
$set_uname=0;
if(isset($_COOKIE["username"])) {
	 $username=$_COOKIE["username"];
	 $username="sid";
	 $set_uname=1;
} 

?>

<!DOCTYPE html>
	<html class="no-js">
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/nlogo_icon.png">
		<!-- Author Meta -->
		<meta name="author" content="Hackthon">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Home Services</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
			  <header id="header" id="home" style="height:19%;width:auto;">
		  	
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/nlogo.png" alt="Logo Here" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.html">Home</a></li>
				          <li><a href="about.html">About</a></li>
				          <li><a  class="menu-has-children" href="services.html">Services</a>
							<ul>
								<li><h1><a href="cleaning_services.html">Home Cleaning</a></h1></li>
								<li><a href="cleaning_services.html">Interior & Exterior Designing</a></li>
								<li><a href="cleaning_services.html">Appliances Installation & Maintainance</a></li>
								<li><a href="cleaning_services.html">Shifting</a></li>
								<li><a href="cleaning_services.html">Plumbing</a></li>
							</ul>
						  </li>
				          <li><a href="feedback.html">Feedback</a></li>
									<li><a href="contact.html">Contact</a></li>
									<?php if($set_uname==0){ ?>
				          <li><a href="#login">LogIn</a><li>
									<?php }else{ ?>
				          <li><a href="#"><b><?php echo $username; ?></b></a>
				          	<ul>
				          		<li><a href="#">My Services</a></li>
				          		<li><a href="#">Account</a></li>
				          		<li><a href="#">Log Out</a></li>
				          	</ul>
									</li>
									<?php } ?>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

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
			<section class="service-area section-gap" id="service">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-12 pb-50 header-text text-center">
							<h1 class="mb-10">What we Offer to our Supporters</h1>
							<p>
								Who are in extremely love with eco friendly system..
							</p>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<div class="thumb">
									<a href="from.html"><img  src="img/plumber.jpg" alt=""></a>									
								</div>
								<h4>Plumbing Service</h4>
								<p>
									You can hire a plumber to check all the plumbing fixtures in the bathroom and kitchen in your house periodically to avoid any disasters. Most plumbers will charge a fixed amount for inspection whether repair is needed or not. The cost of repair is calculated based on the amount of work required.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<div class="thumb">
									<img src="img/intext.jpg" alt="">									
								</div>
								<h4>Interior & Exterior Designing</h4>
								<p>
									We have provided the decorative accessories for our clients who have been more than satisfied with our products and services. The wall accessories have been made with metals and other materials. There has been use of paintings and various types of hand crafted metal works to highlight the rich taste of the inhabitants.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<div class="thumb">
									<img src="img/homecleaning.jpg" alt="">									
								</div>
								<h4>Home Cleaning</h4>
								<p>
									We know life can be crazy and unpredictable, and when you’re tired and overworked, the last thing anybody wants to do is clean their home. Whatever the reason you’re looking for home cleaning help, Handy has you covered.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<div class="thumb">
									<img src="img/install.jpeg" style="height:250px;" alt="">									
								</div>
								<h4>Appliances Installation & Maintainance</h4>
								<p>
									We connect you with experts in your locality who present Appliances services at your convenience. With the right tools, best-fit products and a courteous professional, you can see that the quality of Appliances services offered by our experts surpasses the standard offered elsewhere. All you need to do is let us know your requirement in Appliances services and schedule a convenient time for a Appliances at home.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service" ">
								<div class="thumb">
									<img src="img/shifting.jpg" alt="">									
								</div>
								<h4>Shifting Service</h4>
								<p>
									Relocation is one of the best ways to have a fresh start in your life. Whether you opted for the move or had to relocate because of a new job or assignment, it is important to keep a positive mindset and try to take it in your stride. If you are planning to take everything from your current home to your new place, whether it is in the same city or not, there are plenty of things you need to do to ensure that the move goes on smoothly.

								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<div class="thumb">
									<img src="img/ec.jpg" alt="">									
								</div>
								<h4>Electrical issues</h4>
								<p>
									Sparking plugs or circuit overloads indicate electrical problems that can damage your appliances and electrical devices. Since it may pose a risk to life if you try to handle electricity without the right equipment or caution, it is advisable to you hire an electrician to fix these problems.
								</p>
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
							<form class="box" action="check_login.php" method="POST" target="_self">
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

			<!-- start footer Area -->		
			<footer class="footer-area section-gap"style="height:450px;width:auto;">
				<div class="container">

					<div class="row">
						
							<div class="single-footer-widget">
								<h6>About Agency</h6>
								<p>
									The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point 
								</p>
							</div>
						
					
							<div class="single-footer-widget">
								<h6>Navigation Links</h6>
								<div class="row">
									<table>
										<tr>
											<td width="70px"><li><a href="#" style="color:white;">Home</a></li></td>
											<td width="100px"><li><a href="#" style="color:white;">Feature</a></li></td>
											<td width="100px"><li><a href="#" style="color:white;">Services</a></li></td>
											<td><li><a href="#" style="color:white;">Portfolio</a></li></td>
										</tr>
										<tr>
											<td><li><a href="#" style="color:white;">Team</a></li></td>
											<td><li><a href="#" style="color:white;">Pricing</a></li></td>
											<td><li><a href="#" style="color:white;">Blog</a></li></td>
											<td><li><a href="#" style="color:white;">Contact</a></li></td>
									</table>
							</div>							
							</div>
						</div>				
					</div>

					<div class="row footer-bottom d-flex justify-content-between align-items-center">
						<p class="col-lg-8 col-sm-12 footer-text m-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 

</p>
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/mn-accordion.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
    		<script src="js/jquery.circlechart.js"></script>								
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>