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

$message="Easy Service OTP is".$otp.".";




$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=7567704505&Password=H7257Q&Message=".$message."&To=".urlencode($num)."&Key=koladcDQfRuobULmk07sECNwelTF8") ,true);
if ($json["status"]==="success") {
    echo $json["msg"];
    //your code when send success
}else{
    echo $json["msg"];
    //your code when not send
}



?>
<!-- start banner Area -->
			<section class="banner-area" id="home">
				<div class="container">
					<div class="row fullscreen d-flex align-items-center">

						<div class="banner-content col-lg-6 col-md-1 justify-content-center">
                            <form action="do_signup.php" method="POST" >
                            

<input type="hidden" value="<?php echo $name; ?>" name="name" />
<input type="hidden" value="<?php echo $email; ?>" name="email" />
<input type="hidden" value="<?php echo $pass; ?>" name="pass" />
<input type="hidden" value="<?php echo $user; ?>" name="user" />
<input type="hidden" value="<?php echo $num; ?>" name="num" />
<input type="hidden" value="<?php echo $block; ?>" name="block" />
<input type="hidden" value="<?php echo $area; ?>" name="area" />
<input type="hidden" value="<?php echo $city; ?>" name="city" /> 
<input type="hidden" value="<?php echo $state; ?>" name="state" />
                            <input type="hidden" name="otp" value="<?php echo $otp; ?>" />
                                <div>
                                    <caption><h1>Enter OTP</h1></caption>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">OTP</label>
                                    <input type="text" class="form-control" name="ootp" id="name" placeholder="Enter OTP">
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