<?php include "header.php";
$otp  = rand(1000,9999);
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$user=$_POST['username'];
$num=$_POST['mobileno'];
$block=$_POST['block'];
$area=$_POST['area'];
$city=$_POST['city'];
$state=$_POST['state'];

header('location: https://smsapi.engineeringtgr.com/send/?Mobile=9898448254&Password=H3849A&Message="Easy Service OTP is"'.$otp.' "&To='.$num.'&Key=romitkFhIPjeJUvD3NwVm42dL');

$message="Easy Service OTP is".$otp.".";
file_get_contents('https://smsapi.engineeringtgr.com/send/?Mobile=9898448254&Password=H3849A&Message="Easy Service OTP is"'.$otp.' "&To='.$num.'&Key=romitkFhIPjeJUvD3NwVm42dL');




?>
<script>
$.ajax({type:"POST",
    url:"send_sms.php",
    data:{name:<?php echo $otp; ?>,num:<?php echo $num; ?>},
    success:function(msg)
    { 
        
       alert("enter otp");
       
    }
    });

 </script>
<!-- start banner Area -->
			<section class="banner-area" id="home">
				<div class="container">
					<div class="row fullscreen d-flex align-items-center">

						<div class="banner-content col-lg-6 col-md-1 justify-content-center">
                            <form>
                                <div>
                                    <caption><h1>Enter OTP</h1></caption>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">OTP</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Full Name">
                                </div>
                                
                                <div>
                                <button type="button" class="btn btn-primary">Submit</button>
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