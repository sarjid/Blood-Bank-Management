<?php 
  //include header file
  include ('include/header.php');

  if (isset($_POST['submit'])) {
	  if(isset($_POST['term']) == true) {
		  if (isset($_POST['name']) && !empty($_POST['name'])) {
			  if (preg_match('/^[a-zA-Z\s]*$/', $_POST['name'])) {
				  $name = $_POST['name'];
			  }else {
				$nameError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Please Use only lower and upper case and space !</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>';
			  }
		  }else {
			$nameError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please Insert Your Name !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>';
		  }

		// Blood Group validation 

		  	if (isset($_POST['blood_group']) && !empty($_POST['blood_group'])) {
				  $blood_group = $_POST['blood_group'];
			  }else {
				$bloodError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Please Select Your Blood Group !</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>';
  
			  }
		  
		// Gender Validation

		  if (isset($_POST['gender']) && !empty($_POST['gender'])) {
			
				$gender = $_POST['gender'];
			}else {
			  $genderError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>Please Select Your Gender !</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>';
			}

			// birthday date or day

			if (isset($_POST['day']) && !empty($_POST['day'])) {
			
				$day = $_POST['day'];
			}else {
			  $dayError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>Please Select Your Birthday !</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>';
			}
			
			// birthday Month

			if (isset($_POST['month']) && !empty($_POST['month'])) {
			
				$month = $_POST['month'];
			}else {
			  $monthError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>Please Select Your Birthday Month !</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>';
			}

			// birthday year 
			
			if (isset($_POST['year']) && !empty($_POST['year'])) {
			
				$year = $_POST['year'];
			}else {
			  $yearError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>Please Select Your Birthday Year !</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>';
			}

			//   Email validation 

	  
	if (isset($_POST['email']) && !empty($_POST['email'])) {

		$pattern ='/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
		if (preg_match($pattern, $_POST['email'])) {
			
			$check_email = $_POST['email'];

			$sql = "SELECT email FROM donor WHERE email ='$check_email' ";
			$result = mysqli_query($connection, $sql);
				if (mysqli_num_rows($result)) {
					$emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Your Email Has Already Exists !</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>';
					
				}else {
					$email = $_POST['email'];
				}
		
		}else {
			$emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Please Inter Valid Email Address !</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>';
			
		}
		
	}else {
	  $emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Please Input Email Address !</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>';

	}

			// contact number 

			if (isset($_POST['contact_no']) && !empty($_POST['contact_no'])) {
				if (preg_match('/\d{11}/',$_POST['contact_no'])) {
					$contact_no = $_POST['contact_no'];
				}else {
					$contact_noError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Contact Should Be 11 Characters !</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>';
				}
				

				
			}else {
			  $contact_noError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>Please Input Your 11 Digit Phone Number !</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>';

			}


			// select your city
			
			if (isset($_POST['city']) && !empty($_POST['city'])) {
				$city = $_POST['city'];
			}else {
			  $cityError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>Please Use Your City !</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>';

			}

			// password validation 

			if (isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['c_password']) && !empty($_POST['c_password'])) {
				if (strlen($_POST['password']) >= 6) {
					if ($_POST['password'] == ($_POST['c_password'])) {
						$password = $_POST['password'];
						
					}else {
						$conpassdError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>Your Password Are not same !</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>';
					}
				}else {
					$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>Your password must be longer then 6 characters !</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>';
				}
			}else {
				$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>Please Create your password !</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>';
			}

			// Insert Data Into Database 

			if (isset($name) && isset($blood_group) && isset($gender) && isset($day) && isset($month) && isset($year) && isset($email) && isset($contact_no) && isset($city) && isset($password)) {

				$password = md5($password); 
				$DonorDB = $day.'-'.$month.'-'.$year;
				
				$sql = "INSERT INTO donor(name, blood_group, gender, email, city, dob, contact_no, save_life_date, password) VALUES('$name', '$blood_group',   '$gender', '$email', '$city', '$DonorDB', '$contact_no', '0', '$password')";
				
				if (mysqli_query($connection,$sql)) {
					$submitSucc = '<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Rigister Succesfully Complete <b><a href="signin.php">Login</a></b> Now </strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>';

				}else {
					$submitError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Opps Data insert Error ! Try again</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>';
				}
			}

			//  Terms and Condition else

			}else {
				$termError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Please Agree With Our Terms and Condition !</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>';
			}
       
  	}
?>
   
<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;
		
	}
	.form-container{
		background-color: white;
		border: .5px solid #eee;
		border-radius: 5px;
		padding: 20px 10px 20px 30px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
	}
	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
	.btn-danger {
			color: #fff;
			background-color: #02557d;
		border-color: #1a1616;
		
	}
	
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1  class="text-center">New Donars SignUp</h1>
			
		</div> 
	</div>
</div>
<div class="container size">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
					<h3 style="margin-left: 100px; margin-right: 100px; padding: 10px; padding-top: 5px; padding-bottom:8px; border-radius: 10px;" class="bg-success">SignUp</h3>
					<?php
						if (isset($submitError)) {
							echo $submitError;
						}
							if (isset($submitSucc)) {
								echo $submitSucc;
							}
					
					?>
					
					
					
          <!-- Error Messages -->

				<form class="form-group" action="" method="post" novalidate="">
					<div class="form-group">
						<label for="fullname">Full Name</label>
						<input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control" value="<?php if (isset($name)) echo $name;?>">
						<?php
						if (isset($nameError)) {
							echo $nameError;
							
						}

						
					?>
					</div><!--full name-->
					
					<div class="form-group">
              <label for="name">Blood Group</label><br>
              <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                <option value="">---Select Your Blood Group---</option>
				<?php if(isset($blood_group)) echo '<option selected="" value="'.$blood_group.'">'.$blood_group.'</option>' ?>

                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
			  </select>
			  <?php
			if (isset($bloodError)){
				echo $bloodError;
						}
			?>
			</div><!--End form-group-->

			
					<div class="form-group">
							  <label for="gender">Gender</label><br>
							  	
									  <input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; " <?php if (isset($gender)) {
										if($gender == "Male"){
											echo "checked";
										}
									  
								  }?>> 
									  Male
									  <input type="radio" name="gender" id="gender" value="Female" style="margin-left:10px;" <?php if (isset($gender)) {
										if($gender == "Female"){
											echo "checked";
										}
									}?>> 
									FeMale
									 <input type="radio" name="gender" id="gender" value="others" style="margin-left:10px;"
									 <?php if (isset($gender)) {
										if($gender == "others"){
											echo "checked";
										}
									}?>>
									 Others
									 <?php
											if (isset($genderError)){
												echo $genderError;
											}
										?>
					</div><!--gender-->
					
				    <div class="form-inline">
              <label style="margin-right: 10px;" for="name">Date of Birth:</label><br>
              <select class="form-control demo-default" id="date" name="day" style="margin-bottom:10px;" required>
                <option value="">---Day---</option>
				<?php if(isset($day)) echo '<option selected value="'.$day.'" >'.$day.'</option>' ?>
                <option value="01" >01</option>
				<option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option> <option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option>
              </select>
              <select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;" required>
                <option value="">---Month---</option>
				<?php if(isset($month)) echo '<option selected value="'.$month.'" >'.$month.'</option>' ?>
                <option value="01" >January</option><option value="02" >February</option><option value="03" >March</option><option value="04" >April</option><option value="05" >May</option><option value="06" >June</option><option value="07" >July</option><option value="08" >August</option><option value="09" >September</option><option value="10" >October</option><option value="11" >November</option><option value="12" >December</option>
              </select>
              <select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;" required>
                <option value="">---Year---</option>
				<?php if(isset($year)) echo '<option selected value="'.$year.'" >'.$year.'</option>' ?>
				<option value="1967" >1967</option>
				<option value="1968" >1968</option><option value="1969" >1969</option><option value="1970" >1970</option><option value="1971" >1971</option><option value="1972" >1972</option><option value="1973" >1973</option><option value="1974" >1974</option><option value="1975" >1975</option><option value="1976" >1976</option><option value="1977" >1977</option><option value="1978" >1978</option><option value="1979" >1979</option><option value="1980" >1980</option><option value="1981" >1981</option><option value="1982" >1982</option><option value="1983" >1983</option><option value="1984" >1984</option><option value="1985" >1985</option><option value="1986" >1986</option><option value="1987" >1987</option><option value="1988" >1988</option><option value="1989" >1989</option><option value="1990" >1990</option><option value="1991" >1991</option><option value="1992" >1992</option><option value="1993" >1993</option><option value="1994" >1994</option><option value="1995" >1995</option><option value="1996" >1996</option><option value="1997" >1997</option><option value="1998" >1998</option><option value="1999" >1999</option><option value="2000" >2000</option><option value="2001" >2001</option><option value="2002" >2002</option>
              </select>
			</div><!--End form-group-->

			<?php
			
			if (isset($dayError)){
				echo $dayError;
						}
						if (isset($monthError)){
							echo $monthError;
									}

									if (isset($yearError)){
										echo $yearError;
												}
									
						
			?>
			
		
				    <div class="form-group">
						<label for="fullname">Email</label>
						<input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control" value="<?php if(isset($email)) echo $email; ?>">
						
						<?php
					
						if (isset($emailError)) {
							echo $emailError;
								}
						
						?>	
						
					</div>
					<div class="form-group">
              <label for="contact_no">Contact No</label>
			  <input type="text" name="contact_no" value="<?php if(isset($contact_no)) echo $contact_no ?>" placeholder="017********" class="form-control" required pattern="^\d{11}$" title="11 numeric characters only" maxlength="11">
			  <?php
			
			if (isset($contact_noError)) {
				echo $contact_noError;
					}
			
			?>	
			</div><!--End form-group-->
				
			
					<div class="form-group">
              <label for="city">City</label>
              <select name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select --</option><?php if(isset($city)) echo '<option selected value="'.$city.'" >'.$city.'</option>' ?><optgroup title="Dhaka Devision" label="&raquo; Dhaka Devision"></optgroup><option value="Dhaka" >Dhaka</option><option value="Kishoreganj" >Kishoreganj</option><option value="Gazipur" >Gazipur</option><option value="Mirpur" >Mirpur</option><option value="Gopalganj" >Gopalganj</option><option value="Jamalpur" >Jamalpur</option><option value="Tangail" >Tangail</option><option value="Narayanganj" >Narayanganj</option><option value="Netrakona" >Netrakona</option><option value="Faridpur">Faridpur</option><option value="Mymensingh" >Mymensingh</option><option value="Madaripur" >Madaripur</option><option value="Manikganj" >Manikganj</option><option value="Munshiganj" >Munshiganj</option><option value="Rajbari" >Rajbari</option><option value="Shariatpur" >Shariatpur</option><option value="Sherpur" >Sherpur</option>
	<optgroup title="Rangpur Devision" label="&raquo; Rangpur Devision"></optgroup><option value="Rangpur" >Rangpur</option><option value="Dinajpur" >Dinajpur</option><option value="Gaibandha" >Gaibandha</option><option value="Kurigram" >Kurigram</option><option value="Lalmonirhat" >Lalmonirhat</option><option value="Nilphamari" >Nilphamari</option><option value="Panchagarh" >Panchagarh</option><optgroup title="Rajshahi Devision" label="&raquo; Rajshahi Devision"></optgroup><option value="Bajaur Agency" >Bajaur Agency</optgroup><option value="Khyber Agency" >Khyber Agency</option><option value="Kurram Agency" >Kurram Agency</option><option value="Mohmand Agency" >Mohmand Agency</option><option value="North Waziristan Agency" >North Waziristan Agency</option><option value="Orakzai Agency" >Orakzai Agency</option><option value="South Waziristan Agency" >South Waziristan Agency</option><optgroup title="Islamabad Capital" label="&raquo; Islamabad Capital"></optgroup><option value="Islamabad" >Islamabad</option><optgroup title="North-West Frontier Province (NWFP)" label="&raquo; North-West Frontier Province (NWFP)"></optgroup><option value="Abbottabad" >Abbottabad</option><option value="Bannu" >Bannu</option><option value="Batagram" >Batagram</option><option value="Buner" >Buner</option><option value="Charsadda" >Charsadda</option><option value="Chitral" >Chitral</option><option value="Dera Ismail Khan" >Dera Ismail Khan</option><option value="Dir Lower" >Dir Lower</option><option value="Dir Upper" >Dir Upper</option><option value="Hangu" >Hangu</option><option value="Haripur" >Haripur</option><option value="Karak" >Karak</option><option value="Kohat" >Kohat</option><option value="Kohistan" >Kohistan</option><option value="Lakki Marwat" >Lakki Marwat</option><option value="Malakand" >Malakand</option><option value="Mansehra" >Mansehra</option><option value="Mardan" >Mardan</option><option value="Nowshera" >Nowshera</option><option value="Peshawar" >Peshawar</option><option value="Shangla" >Shangla</option><option value="Swabi" >Swabi</option><option value="Swat" >Swat</option><option value="Tank" >Tank</option><optgroup title="Punjab" label="&raquo; Punjab"></optgroup><option value="Alipur" >Alipur</option><option value="Attock" >Attock</option><option value="Bahawalnagar" >Bahawalnagar</option><option value="Bahawalpur" >Bahawalpur</option><option value="Bhakkar" >Bhakkar</option><option value="Chakwal" >Chakwal</option><option value="Chiniot" >Chiniot</option><option value="Dera Ghazi Khan" >Dera Ghazi Khan</option><option value="Faisalabad" >Faisalabad</option><option value="Gujranwala" >Gujranwala</option><option value="Gujrat" >Gujrat</option><option value="Hafizabad" >Hafizabad</option><option value="Jhang" >Jhang</option><option value="Jhelum" >Jhelum</option><option value="Kasur" >Kasur</option><option value="Khanewal" >Khanewal</option><option value="Khushab" >Khushab</option><option value="Lahore" >Lahore</option><option value="Layyah" >Layyah</option><option value="Lodhran" >Lodhran</option><option value="Mandi Bahauddin" >Mandi Bahauddin</option><option value="Mianwali" >Mianwali</option><option value="Multan" >Multan</option><option value="Muzaffargarh" >Muzaffargarh</option><option value="Nankana Sahib" >Nankana Sahib</option><option value="Narowal" >Narowal</option><option value="Okara" >Okara</option><option value="Pakpattan" >Pakpattan</option><option value="Rahim Yar Khan" >Rahim Yar Khan</option><option value="Rajanpur" >Rajanpur</option><option value="Rawalpindi" >Rawalpindi</option><option value="Sahiwal" >Sahiwal</option><option value="Sargodha" >Sargodha</option><option value="Sheikhupura" >Sheikhupura</option><option value="Shekhupura" >Shekhupura</option><option value="Sialkot" >Sialkot</option><option value="Toba Tek Singh" >Toba Tek Singh</option><option value="Vehari" >Vehari</option><optgroup title="Sindh" label="&raquo; Sindh"></optgroup><option value="Badin" >Badin</option><option value="Dadu" >Dadu</option><option value="Ghotki" >Ghotki</option><option value="Hyderabad" >Hyderabad</option><option value="Jacobabad" >Jacobabad</option><option value="Jamshoro" >Jamshoro</option><option value="Karachi" >Karachi</option><option value="Kashmore" >Kashmore</option><option value="Khairpur" >Khairpur</option><option value="Larkana" >Larkana</option><option value="Matiari" >Matiari</option><option value="Mirpur Khas" >Mirpur Khas</option><option value="Naushahro Feroze" >Naushahro Feroze</option><option value="Nawabshah" >Nawabshah</option><option value="Qambar Shahdadkot" >Qambar Shahdadkot</option><option value="Sanghar" >Sanghar</option><option value="Shikarpur" >Shikarpur</option><option value="Sukkur" >Sukkur</option><option value="Tando Allahyar" >Tando Allahyar</option><option value="Tando Muhammad Khan" >Tando Muhammad Khan</option><option value="Tharparkar" >Tharparkar</option><option value="Thatta" >Thatta</option><option value="Umerkot" >Umerkot</option></select>
	<?php
			if (isset($cityError)){
				echo $cityError;
						}
		?>
			</div><!--city end-->
		
	
            <div class="form-group">
              <label for="password">Password</label>
			  <input type="password" name="password" value="" placeholder="Password" class="form-control" required pattern=".{6,}">
			  <?php
						if (isset($passwordError)){
							echo $passwordError;
						}
			?>
			</div><!--End form-group-->
			
            <div class="form-group">
              <label for="password">Confirm Password</label>
			  <input type="password" name="c_password" value="" placeholder="Confirm Password" class="form-control" required pattern=".{6,}">
			  <?php
						if (isset($conpassdError)){
							echo $conpassdError;
						}
				?>
			</div><!--End form-group-->
			
            <div class="form-inline">
              <input type="checkbox" checked name="term" value="true" required style="margin-left:10px;">
			  <span style="margin-left:10px;"><b>I am agree to donate my blood and show my Name, Contact Nos. and E-Mail in Blood donors List</b></span>
			  <?php
						if (isset($termError)) {
							echo $termError;
						}
					?>
			</div><!--End form-group-->
			
			
					<div class="form-group center-aligned">
						<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 10px;">SignUp</button>
						<p>Already Have an Account.? <b> <a href="signin.php">Signin</a> </b> Now </p>
						
					</div>
				</form>
		</div>
	</div>
</div>

<?php 
  //include footer file
  include ('include/footer.php');
?>