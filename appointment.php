<?php
$set_uname=0;
if(isset($_COOKIE["username"])) {
	 $username=$_COOKIE["username"];
     $uid=$_COOKIE["uid"];
     
     $set_uname=1;
     include "connect.php";

   include "header.php";  	
if(!$resultset = $database_handler->query("SELECT * FROM user_detail where uid =".$uid." ;"))
die("Query error");

$row = $resultset->fetch_assoc();
$address=$row['block'].",".$row['area'].",".$row['city'].",".$row['state'].".";
$mobile_no=$row['mobileno'];
     if(isset($_POST['new_apt']))
     {
     $desc = $_POST['desc'];
     $date = $_POST['date'];
     $fromtime = $_POST['timefrom'];
     $totime = $_POST['timeto'];
     $sid = $_POST['sid'];
     $sname = $_POST['sidaa'];
     $suid = $_POST['suid'];
     
     $uid=$_COOKIE["uid"];
     $address = $_POST['address'];
     if($address=="Same Address")
        $address=$row['block'].",".$row['area'].",".$row['city'].",".$row['state'].".";
        $sql = "INSERT INTO  appointment (`uid`, `sid`, `date`, `address`,`description`,`timefrom`,`timeto`)  VALUES ('$uid', '$sid','$date','$address','$desc','$fromtime','$totime')";    
        if ($database_handler->query($sql) === TRUE) {

          ?> 
          <script>
          alert("appoinment booked");
          </script>
           <?php
      }
    }
    if($_COOKIE['type']=="customer")
    {if(!$resultset = $database_handler->query("SELECT * FROM appointment where uid =".$uid." ORDER BY date DESC ;"))
    die("Query error");
    }
    else if($_COOKIE['type']=="admin")
    {if(!$resultset = $database_handler->query("SELECT * FROM appointment  ORDER BY date DESC ;"))
      die("Query error");}
    else 
      {
        header('location: servicep.php');
      
      }
      

    ?><div class = "col-md-11 offset-md-1">
    <div id="accordion"><?php
    $i=0;
   while( $row = $resultset->fetch_assoc())
   {$i=$i+1;
    if(!$resultset1 = $database_handler->query("SELECT * FROM  service where sid =".$row['sid']." ;"))
    die("Query error");
    $row1=$resultset1->fetch_assoc();
?>


  <div class="card">
    <div class="card-header" id="<?php echo 'heading'.$i.''; ?>">
      <h5 class="mb-0">
        <button class="btn btn-link">
          <form action="apt_update.php" method="POST">
            <input type="hidden" name="aid" value="<?php echo $row['aid']; ?> " />
          <span><?php echo $row1['sname']; ?><b><u>Date: </u>&nbsp;&nbsp;&nbsp;&nbsp; </b><input type="date" name="rdate" value="<?php echo $row['date']; ?>" /></span>
     <b><u>Time:</b></u>&nbsp;&nbsp;&nbsp;&nbsp; <input name="timefrom" type="text" value="<?php echo $row['timefrom'];?>" />to <input name="timeto" value="<?php echo $row['timeto']; ?>" /> </span>
        </button>

      </h5>
    </div>
    
 
    <div id="<?php echo 'collapse'.$i.''; ?>">
      <div class="card-body" style="text-align:justify">
        <b><u>Description:</u></b><?php echo $row1['description']; ?>
        <p><br><span id="<?php echo 'status'.$row['aid'];?>"><b><u>status:-</b></u> <?php echo $row['status']; ?> </span><span style="padding:3%"><b><u>Address:-</b></u><?php echo $row['Address']; ?></span></span><span style="padding:5%"><b><u>Feedback:-  </b></u><input type="text" style="width:30%;" value="<?php echo $row['aprooval'];?>" readonly /></span></p> 
        <?php if($row['status']!="Completed") { ?>
          <div class="row" > 
                  <input type="submit" class="btn btn-secondary" value="Reschedule" />
        </form> 
              <?php 
              $diff_time = $row['date'];
              $diff_arr  = explode("-", $diff_time);
              $curr_timr = date("Y-m-d");
              $curr_arr = explode("-",$curr_timr);
              
              
              if($diff_arr==$curr_arr || $diff_arr >= $curr_arr) {

if(time()> strtotime($row['timefrom']) - strtotime('0:30')){?>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button  type="button" onclick="cancel_apt(<?php echo $row['aid']; ?>);" class="btn btn-secondary">Cancel Appointment</button>
           <?php     }} ?>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" onclick="complete_apt(<?php echo $row['aid']; ?>);" class="btn btn-secondary">Mark as Completed</button>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <?php if($_COOKIE['type']=="customer"){
                   ?><div class='pm-button'><a href='https://www.payumoney.com/paybypayumoney/#/92832A7082DF5A67C0559DB92422EDF3'><img src='https://www.payumoney.com/media/images/payby_payumoney/new_buttons/21.png' /></a></div> 
                  <?php } ?> 
</div> <?php } ?>
    </div>
    </div>
  </div><br><br>
   <?php } ?>
</div>
</div>
<script>
    function complete_apt(id)
    {
       
        $.ajax({type:"POST",
							url:"complete.php",
							data:{name:id},
							success:function(msg)
							{ 
                                alert("Appointment marked as Completed.");
                                res=1;
                                document.getElementById("status"+id).innerHTML="<b><u>status:</b></u> Completed";
							}
							});
            
            
    }
    function cancel_apt(id)
    {
       
        $.ajax({type:"POST",
							url:"cancel.php",
							data:{name:id},
							success:function(msg)
							{ 
                                alert("Appointment Canceled.");
                                res=1;
                                document.getElementById("status"+id).innerHTML="<b><u>status:</b></u> Cancel";
							}
							});
            
            
    }
    </script>
<?php
include 'footer.php';
} 
else
{
    header('location: index.php?msg=You%20must%20login%20in%20order%20to%20request%20any%20service#login');

}
?>