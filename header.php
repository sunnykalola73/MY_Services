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
<link rel="manifest" href="/MY_Services/manifest.json">
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
<script>
//This is the "Offline page" service worker

//Add this below content to your HTML page, or add the js file to your page at the very top to register service worker
if (navigator.serviceWorker.controller) {
  console.log('[PWA Builder] active service worker found, no need to register')
} else {
  //Register the ServiceWorker
  navigator.serviceWorker.register('pwabuider-sw.js', {
    scope: './'
  }).then(function(reg) {
    console.log('Service worker has been registered for scope:'+ reg.scope);
  });
}


</script>
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
                      <li <?php if(isset($page) && $page=="contact") echo 'class="active"'; ?>><a href="contact.php">Contact</a></li>
                      <li <?php if(isset($page) && $page=="feedback") echo 'class="active"'; ?>><a href="feedback.php">Feedback</a></li>
                               
                                <?php if($set_uname==0){ ?>
                                  
                      <li><a href="index.php#login">LogIn</a><li>
                                <?php }else{ ?>
<<<<<<< HEAD
                      <li class="menu-has-children"><a href="#"><b><?php echo $username; ?></b></a>
                          <ul>
                              <li><a href="appointment.php">My Services</a></li>
                              <li><a href="account.php">Account</a></li>
                              <?php  if($_COOKIE['type']=="admin") { ?>
                              <li><a href="manageusers.php">Manage</a></li>
                              <?php } ?>
                              <li><a href="./do_logout.php">Log Out</a></li>
                          </ul>
                                </li>
=======
                      
								
								<li class="menu-has-children"><a href="#"><b><?php echo $username; ?></b></a>
				            <ul>
				              <li><a href="appointment.php">My Services</a></li>
				              <li><a href="account.php">Account</a></li>
							  <li><a href="./do_logout.php">Log Out</a></li>
				            </ul>
				          </li>		
								
								
								
>>>>>>> d6624e7b5d84d305c97c3bb8e05a53552a3fac61
                                <?php } ?>
                    </ul>
                  </nav><!-- #nav-menu-container -->		    		
                </div>
            </div>
          </header><!-- #header -->
