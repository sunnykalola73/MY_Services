
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
                      <li class="menu-active"><a href="index.php">Home</a></li>
                     
                      <li><a  class="menu-has-children" href="services.html">Services</a>
                       
                      </li>
                      <li><a href="contact.html">Contact</a></li>
                      <li><a href="feedback.html">Feedback</a></li>
                               
                                <?php if($set_uname==0){ ?>
                                  <li><a href="about.html">About</a></li>
                      <li><a href="#login">LogIn</a><li>
                                <?php }else{ ?>
                      <li><a href="#"><b><?php echo $username; ?></b></a>
                          <ul>
                              <li><a href="#">My Services</a></li>
                              <li><a href="#">Account</a></li>
                              <li><a href="./do_logout.php">Log Out</a></li>
                          </ul>
                                </li>
                                <?php } ?>
                    </ul>
                  </nav><!-- #nav-menu-container -->		    		
                </div>
            </div>
          </header><!-- #header -->
