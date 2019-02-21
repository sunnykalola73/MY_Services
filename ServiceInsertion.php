	
	
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
                    <a href="index.php"><img src="img/nlogo.png" alt="Logo Here" title="" /></a>
                  </div>
                  <nav id="nav-menu-container">
                    <ul class="nav-menu">
                      
                      <li <?php if(isset($page) && $page=="home") echo 'class="active"'; ?>><a href="index.php">Home</a></li>
                      <li <?php if(isset($page) && $page=="about") echo 'class="active"'; ?> ><a href="about.php">About</a></li>

                      
                     
                      

                      <li <?php if(isset($page) && $page=="services") echo 'class="active"'; ?>><a  href="services1.php">Services</a>


                       
                      </li>
					  <li <?php if(isset($page) && $page=="contact") echo 'class="active"'; ?>><a href="ServiceInsertion.php">Add Service</a></li>
                      
                      <li <?php if(isset($page) && $page=="contact") echo 'class="active"'; ?>><a href="contact.php">Contact</a></li>
                      <li <?php if(isset($page) && $page=="feedback") echo 'class="active"'; ?>><a href="feedback.php">Feedback</a></li>
                               
                                <?php if($set_uname==0){ ?>
                                  
                      <li><a href="index.php#login">LogIn</a><li>
                                <?php }else{ ?>
                      
								
								<li class="menu-has-children"><a href="#"><b><?php echo $username; ?></b></a>
				            <ul>
				              <li><a href="appointment.php">My Services</a></li>
				              <li><a href="account.php">Account</a></li>
							  <li><a href="./do_logout.php">Log Out</a></li>
				            </ul>
				          </li>		
								
								
								
                                <?php } ?>
                    </ul>
                  </nav><!-- #nav-menu-container -->		    		
                </div>
            </div>
          </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								New Service
							</h1>	
							
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					
						<div class="col-lg-8">
							<form class="form-area " action="dealer_service_insertion.php" method="post" class="contact-form text-right">
								<div class="row">	
									<div class="col-lg-6 form-group">
										<input name="service" placeholder="Enter service name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter service name'" class="common-input mb-20 form-control" required="" type="text">
									
										<input name="type" placeholder="Enter category" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter category'" class="common-input mb-20 form-control" required="" type="text">

										<input name="image" placeholder="Upload image" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload image'"  required="" type="text">
									</div>
									<div class="col-lg-6 form-group">
										<textarea class="common-textarea form-control" name="description" placeholder="Service Description" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Service Description'" required=""></textarea>				
									</div>
									<div class="col-lg-6 form-group">
									<input name="charge" placeholder="Enter Your visit charge" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your visit charge'" class="common-input mb-20 form-control" required="" type="text">
									<textarea class="common-textarea form-control" name="est" placeholder="Enter estimation" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter estimation'" required=""></textarea>
																</div>
									<div class="col-lg-12">
										<div class="alert-msg" style="text-align: left;"></div>
										<button class="genric-btn primary circle" style="float: right;">Add Service</button>											
									</div>
								</div>
							</form>
							
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->

		
		<?php include "footer.php"; ?>