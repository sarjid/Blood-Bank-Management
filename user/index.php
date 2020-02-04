
<?php 

	include 'include/header.php'; 

	if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
		# code..
	?>


<style>
	h1,h2{
		display: inline-block;
		padding: 10px;
		color: #086DF1;
	}
	.name{
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}
	.donors_data{
		background-color: white;
		border-radius: 5px;
		margin:20px 5px 0px 5px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px;
	}
</style>

			<div class="container" style="padding: 60px 0;">
			<div class="row">
				<div class="col-md-12 col-md-push-1">
					<div class="panel panel-default" style="padding: 20px;">
						<div class="panel-body">
							
								<div class="alert alert-danger alert-dismissable" style="font-size: 18px; display: none;">
    						
    								<strong>Warning!</strong> Are you sure you want a save the life if you press yes, then you will not be able to show before 3 months.
    							
    							<div class="buttons" style="padding: 20px 10px;">
    								<input type="text" value="" hidden="true" name="today">
    								<button class="btn btn-primary" id="yes" name="yes" type="submit">Yes</button>
    								<button class="btn btn-info" id="no" name="no">No</button>
    							</div>
  							</div>
							<div class="heading text-center">
							<h2>Welcome !</h2> 
							<h2 style="color: #E74C3C; font-weight: 800;">        
								<?php if (isset($_SESSION['name'])) {
									echo $_SESSION['name'];
								}?>
							</h2>
							</div>
							<p class="text-center">Here you can mennage your account update your profile</p>

							<!-- Message Display Here  -->
							<?php
								$SaveDate = $_SESSION['save_life_date'];
								if ($SaveDate == '0') {

									echo '<form action="" method="post">
									<button style="margin-top: 20px;" name="date" id="save_the_life" type="submit" class="btn btn-lg btn-danger center-aligned ">Save The Life</button>
									</form>';
									
								}else {
									echo '		
										<div class="donors_data">
									<span class="name">Congratulation! </span>
									<span>
									You Already Save The Life.You Will Donate The Blood After Three Months.We Are Very Thanking Full To You
									</span>
								
								</div>';
								}
							
							?>
									
						
							
						

						<div class="test-success text-center" id="data" style="margin-top: 20px;"><!-- Display Message here-->
								
						</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
<?php
}else {
	header('location: ../index.php');
}

include 'include/footer.php'; 
?>