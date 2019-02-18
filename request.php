<?php include "header.php" ?>
<div class="request">
      <form>
				<div class="form-group col-lg-5 col-ms-5">
					<label>Description</label><br>
					<textarea rows="6" cols="50" class="form-control" name="desc" placeholder="Enter Description For Your Service Request"></textarea><br>
				</div>
				
				<div class="form-group col-ms-4 col-lg-6">
					<label>Feasible Date</label><br>
					<input type="date" class="form-control"><br>
				</div>
				<div class="form-group col-ms-5 col-lg-5">
					<label>Select Address</label><br>
					<input type="radio" name="address" value="Same Address" checked>Same Address<br>
					<input type="radio" name="address" value="Add New Address" >Add New Address<br>
				</div>
				<div>	
					<input type="submit" class="btn btn-primary" name="submit" value="Request"/>
				</div>
		  </form>
</div>
<?php include "footer.php" ?>
		  