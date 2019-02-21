<?php
include "connect.php";
include "header.php";
if(!$resultset = $database_handler->query("SELECT * FROM appointment  ;"))
    die("Query error");
    $i=0;
    while( $row = $resultset->fetch_assoc())
    {
        $tsid=$row['sid'];
       
        if(!$resultset1 = $database_handler->query("SELECT * FROM service where sid='$tsid';"))
        die("Query error");
        $row1 = $resultset1->fetch_assoc();
        if($row1['uid']==$_COOKIE['uid']){
        $i=$i+1;        
?>
<div class = "col-md-11 offset-md-1">
    <div id="accordion">
    

  <div class="card">
    <div class="card-header" id="<?php echo 'heading'.$i.''; ?>">
      <h5 class="mb-0">
        <button class="btn btn-link">
          <span><?php echo $row1['sname']; ?></span>  <span style="padding:20%;"><b><u>Date:</b> <?php echo $row['date']; ?> </u></span>
          <span style="padding:20%;"><b><u>Time:</b> <?php echo $row['timefrom']; echo " to "; echo $row['timeto']; ?> </u></span>
        </button>

      </h5>
    </div>
    
 

      <div class="card-body" style="text-align:justify">
      <form action="submitsp.php" method="POST">
        <input type="hidden" value="<?php echo $row['aid']; ?>" name="aid" />
        <b><u>Description:</u></b><?php echo $row['description']; ?>
        <p><br><span id="<?php echo 'status'.$row['aid'];?>"><b><u>status:-</b></u> <?php echo $row['status']; ?> </span><span style="padding:3%"><b><u>Address:-</b></u><?php echo $row['Address']; ?></span>
        <span style="padding:3%"><b><u>Feedback:-    </b></u><input type="text" name="aprooval" style="width:30%;" value="<?php echo $row['aprooval']; ?>" /></span></p> 
        <?php if($row['status']!="Completed") { ?>
                  <input type="submit"  class="btn btn-secondary" value="submit" />
                 
        <?php } ?>
        </form>
    </div>
    
  </div><br><br>
   
</div>
</div>
        <?php } 
        }?>