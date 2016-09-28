<html>

	<head>
	<link rel = "stylesheet" type = "text/css" href = "./CSS/main.css"></link>
	<link href="css/bootstrap.min.css" rel="stylesheet">
     <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	  <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>  
	  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  
	  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
	  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
<title>Patient registration form</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/mainAsi.css" rel="stylesheet">
<style>
      
.navbar {
    color: #FFFFFF;
    background-color:  #5cd6d6;
}

/* OR*/

.nav {
    color: #FFFFFF;
    background-color:  #5cd6d6;
	
.nav-pills > li > a {
  color: #A7A79Bf;
  font-family: 'Oswald', sans-serif;
  font-size: 0.8em ;
  padding: 1px 1px 1px ;
}


</style>
	</head>
	
	
	<body>
	<div class="container">
	
	<!--<div class="col-sm-12">-->
	
	<div class="top">
		<table>
			<tr>
				<td>
					<img src = "./Images/logo.jpg">
				</td>
				<td>
					<div class ="title">
						Donate a Kidney &  Save a life
						
					</div>
				</td>
				<td style="vertical-align:top ; padding-left:390px ; padding-top:10px" >
					<form action ="DonorLogin.php" > <button type="submit" class="btn btn-primary custom-button-width" style="margin-right: 4px:">Donor Log In</button></form> <br>
					<form action ="PatientLogin.php" > <button type="submit" class="btn btn-primary custom-button-width" style="margin-right: 4px:">Patient Log In</button></form>
				</td>
			</tr>
		</table>
	</div>
	<ul>
		<li><a href="index.html">Home</a></li>
		<li><a href="#">About Us</a></li>
		<li><a href="#">Kidney Protection</a></li>
		<li><a href="#">Donor Eligibility</a></li>
		<!--<li><a href="#">Our Service</a></li>-->
		<li><a href="#">Share your Stories</a></li>
		
	</ul>
	</div>
	</div>
	</div>
	
	<!--<nav class="navbar navbar-default navbar-fixed-top navbar-responsive">
	<div class="container-fluid">
    <div class="navbar-header ">
    <ul class="nav navbar-nav navbar-left"><li><img src="images/kidney.jpg" height=70px width=70px align="left"></li>
	</ul>
	
   <!-- <ul class="nav  navbar-right">
    <li><a class="navbar-brand" href="#"><font color= #FFF>Donate a Kidney and Save a Life</font></a></li>
	</ul>-->
	<!--ul class="nav nav-pills navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span><b><font size="4" color="#FFF" face="calibri light"> Home</font></b></a></li>
				<li><a href="aboutus.html"><span class="glyphicon glyphicon-thumbs-up"></span><b><font size="4" color="#FFF" face="calibri light"> AboutUs</font></b></a></li>
				<li><a href="#"><span class="glyphicon glyphicon-phone-alt"></span><b><font size="4" color="#FFF" face="calibri light"> ContactUs</font></b></a></li>
	</ul>
        				
    </div>
</nav>	-->
	<!--<br><br><br><br>-->


	<div class="container">
	
	<div class="col-sm-10">

		<form role="form" align="center" method='POST' class="form-horizontal col-md-10 col-md-offset-2" data-toggle="validator" onSubmit="return validate();" id ="form2"action="formSubmit-PatientRegistration.php"><!--changed-->

			<p><h4><b><legend><font color="green" size="5px"> Patient Registration Form</font> </legend></b></h4></p>
			<p>
			<h4>
				<b>
					<font color="red">
						<?php
						if(isset($_GET['status']))
						{
							if($_GET['status']=='regfailed'){echo 'Registration Failed';}
						}


						?>
					</font>
				</b>
			</h4>
			</p>
		<div class="row">
			<div class="jumbotron">
				<p><h5><b><font color="red">  Login Details</font></b></h5></p>
				<br>
							<div class="form-group" align="center">
								<font color="green"><label class="col-md-4 control-label"for="email">E mail addresss:*</label></font>
									<div class="col-md-8">
										<input type="email"  id="email" name="email" class="form-control"  placeholder="abc@gmail.com" required>
									</div>
							</div>
  
							<div class="form-group" align="center">
								<font color="green"><label class="col-md-4 control-label"for="password">Password:*</label></font>
									<div class="col-md-8">
										<input type="password"   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" id="password" name="password" class="form-control"  placeholder="Enter your password" required>
										Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters
									</div>
							</div>
 
							
  
							<div class="form-group" align="center">
								<font color="green"><label class="col-md-4 control-label" for="confirm_password">Confirm password:*</label></font>
									<div class="col-md-8">
										<input type="password" class="form-control" id="passwordc" name="passwordc" placeholder="Please re-enter your password" required>
										
									</div>
							</div>
				<p><h5><b><font color="red">Patient's Personal Details</font></b></h5><h6>We recommend on the privacy of your details</h6></p>
				<!--<br>-->
							<div class="form-group" align = "center">
								<label for="finame" class="col-md-4 control-label" ><font color="green">
								Patient's Name:*
								</font>
								</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="pname" placeholder="Enter Patient's Name"required />
								</div>
							</div>
							
							<div class="form-group" align = "center">
								<div class="radio">
									<label for="Gender" class="col-md-4 control-label"><font color="green">
										<b>Patient's Gender:*</b>
										</font>
									</label>
								<div class="col-md-4">
									<font color="green"><label><input type="radio" name="pGender" value="male" checked="checked" >Male</label></font>
									<font color="green"><label><input type="radio" name="pGender" value="female" >Female</label></font>
								</div>
								</div>
							</div>

							<div class="form-group" align="center">
								<font color="green"><label class="col-md-4 control-label" for="date_of_birth">Date of Birth:* <span class="glyphicon glyphicon-calendar"></span>:</label></font>
									<div class="col-md-8">
										<input type="date" id="date_of_birth" class="form-control" name="pDOB" placeholder="dd/mm/yyyy or dd-mm-yyyy">
									</div>
							</div>
							<div class="form-group" align="center">
								<font color="green"><label class="col-md-4 control-label"for="NIC">National Identity Card Number:* </label></font>
									<div class="col-md-8">
										<input type="text" id="NIC" class="form-control" name="NIC" pattern="[0-9]{3}+v" placeholder="893654787v">
									</div>
							</div>
							<p><h5><b><font color="red">Patient's Medical Details</font></b></h5></p>
				<!--<br>-->
							
							<div class="form-group" align = "center">
								<div class="radio">
									<label for="Gender" class="col-md-4 control-label"><font color="green">
										<b>Blood Group:*</b>
										</font>
									</label>
								<div class="col-md-4">
									<font color="green"><label><input type="radio" name="pBlood" value="A+" checked="checked" >A+</label></font>
									<font color="green"><label><input type="radio" name="pBlood" value="A-">A-</label></font>
									<font color="green"><label><input type="radio" name="pBlood" value="B+">B+</label></font>
									<font color="green"><label><input type="radio" name="pBlood" value="B-">B-</label></font><br>
									<font color="green"><label><input type="radio" name="pBlood" value="AB+">AB+</label></font>
									<font color="green"><label><input type="radio" name="pBlood" value="AB-">AB-</label></font>
									<font color="green"><label><input type="radio" name="pBlood" value="O+">O+</label></font>
									<font color="green"><label><input type="radio" name="pBlood" value="O-">O-</label></font>
									
									
								</div>
								</div>
							</div>
							<div class="form-group" align="center">
								<font color="green"><label class="col-md-4 control-label"for="AnyDetails">Any Details:</label></font>
									<div class="col-md-8">
										<textarea class="form-control" rows="3" name="pdetails" ></textarea>
									</div>
							</div>
							<div class="form-group" align = "center">
								<label for="finame" class="col-md-4 control-label" ><font color="green">
								Nephrologist :* Dr.
								</font>
								</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="nephrologist" placeholder="Dr. "required />
								</div>
							</div>
							<div class="form-group" align = "center">
								<label for="finame" class="col-md-4 control-label" ><font color="green">
								Hospital :*
								</font>
								</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="hospital" placeholder=""required />
								</div>
							</div>
							<div class="form-group" align="center">
								<font color="green"><label class="col-md-4 control-label"for="email">E mail(Doctor's):*</label></font>
									<div class="col-md-8">
										<input type="email"  id="docemail" name="docemail" class="form-control"  placeholder="abc@gmail.com" required>
									</div>
							</div>
							
							
				<p><h5><b><font color="red">Patient's Contact Details</font></b></h5></p>
				<br>
							<!--<div class="form-group" align = "center">
								<label for="relationship" class="col-md-4 control-label" ><font color="green">
								Your relationship to the patient:*
								</font>
								</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="relationship" placeholder="Enter your relationship"required />
								</div>
							</div>
							<div class="form-group" align = "center">
								<label for="guardianName" class="col-md-4 control-label" ><font color="green">
								Your Name:*
								</font>
								</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="Fname" placeholder="Enter your name"required />
								</div>
							</div>
   
							<div class="form-group" align="center">
								<font color="green"><label class="col-md-4 control-label"for="address">Address:*</label></font>
									<div class="col-md-8">
										<textarea class="form-control" rows="3" name="Address" required></textarea>
									</div>
							</div>-->
							
							
							
 
  
							<div class="form-group" align="center">
								<font color="green"><label class="col-md-4 control-label"for="cnumber"> Contact Number:*</label></font>
									<div class="col-md-8">
										<input type="tel" pattern ="^\d{10}$" name="Contact" id="Contact" class="form-control"  placeholder="0710996370" required>
									</div>
							</div>
							<div class="form-group" align="center">
								<font color="green"><label class="col-md-4 control-label"for="cnumber2">Contact Number 2:</label></font>
									<div class="col-md-8">
										<input type="tel" pattern ="^\d{10}$" name="Contact2" id="Contact2" class="form-control"  placeholder="0710996370" required>
									</div>
							</div>
				
							
							
  
							
							
							<!--div class="form-group">
								<label class="col-md-4 control-label" id="captchaOperation"></label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="captcha" />
									Please complete the above task for verfification
								</div>
							</div>
							<script>
										function validate(){

										var a = document.getElementById("password").value;
										var b = document.getElementById("passwordc").value;
										if (a!=b) {
										alert("Passwords do no match");
										return false;
										}
									}
							</script-->
							<div class="form-group">
									<div class="col-md-9 col-md-offset-3">
										<div id="messages"><font size="30"></font></div>
									</div>
							</div>
							<div class="col-sm-offset-10 col-sm-3">
								<button type="submit" class="btn btn-success btn-md" > Submit</button>
							</div>
							<!--<br>-->
   <!--div class="controls">
   <a href="#" class="btn btn-info" role="button">Next</a>
   
   </div-->
   </div>
</div>
</form>

</div>
</div>

<!--<br><br><br><br>-->
   
		<script type="text/javascript">
			/*
			$(document).ready(function()
			{
				$('#form2').bootstrapValidator({
					container: '#messages',
					feedbackIcons: {
						valid: 'glyphicon glyphicon-ok',
						invalid: 'glyphicon glyphicon-remove',
						validating: 'glyphicon glyphicon-refresh'
					},
					fields: {
						Fname: {
							validators: {
								notEmpty: {
									message: 'The first name is required and cannot be empty'
								}
							}
						},
						Lname: {
							validators: {
								notEmpty: {
									message: 'The last name is required and cannot be empty'
								}
							}
						},
						Address: {
							validators: {
								notEmpty: {
									message: 'The address is required and cannot be empty'
								}
							}
						},
						email: {
							validators: {
								notEmpty: {
									message: 'The email address is required and cannot be empty'
								},
								emailAddress: {
									message: 'The email address is not valid'
								}
							}
						},
						password: {
							validators: {
								notEmpty: {
									message: 'The password is required and cannot be empty'
								}
							}
						},
						
							
						passwordc: {
							validators: {
								notEmpty: {
									message: 'The confirm password is required and cannot be empty'
							},
						identical: {
							field: 'password',
								message: 'The password and its confirm must be the same'
						}
						}
						},
						captcha: {
							validators: {
								callback: {
									message: 'Wrong answer',
									callback: function(value, validator, $field) {
										var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
										return value == sum;
									}
								}
							}
						},
						}
						})
						// Enable the password/confirm password validators if the password is not empty
						.on('keyup', '[name="password"]', function() {
						var isEmpty = $(this).val() == '';
						$('#form2')
						.formValidation('enableFieldValidators', 'password', !isEmpty)
						.formValidation('enableFieldValidators', 'passwordc', !isEmpty);

						// Revalidate the field when user start typing in the password field
						if ($(this).val().length == 7) {
						$('#form2').formValidation('validateField', 'password')
						.formValidation('validateField', 'passwordc');
						}
						});
						});
			*/
		</script>


  
		<script>
				// Check the captcha
				function checkCaptcha(value, validator, $field) {
					var items = $('#captchaOperation').html().split(' '),
						sum   = parseInt(items[0]) + parseInt(items[2]);
					return value == sum;
				}

				$(document).ready(function() {
					// Generate a simple captcha
					function randomNumber(min, max) {
						return Math.floor(Math.random() * (max - min + 1) + min);
					}
					$('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

				//	$('#basicBootstrapForm').formValidation();
				});
		</script>
		
	<!--<br><br><br>--><!--
<div class="container">
<div class="col-sm-8 col-sm-offset-2 text-center">
<h4>
<a href="homepage.php">OHRMS</a>
</h4>
<p><b><font color="#161640">"Smarter choice for your business and vacation plans in Sri Lanka"</font></b></p>
<hr>
<!-- starting of facebook icons-->
<!--<p> Join Us On </p>
<ul class="list-inline center-block">
<li><a href="#"><img src="hotelimages/facebook.png"></a></li>
<li><a href="#"><img src="hotelimages/twitter.png"></a></li>
<li><a href="#"><img src="hotelimages/google.png"></a></li>
<li><a href="#"><img src="hotelimages/youtube.png"></a></li>
</ul>

</div><!--/col-->
<!--</div><!--/container-->

<!-- scroll up button-->

<ul class="nav pull-right scroll-top">
<li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>

<script>
$('.scroll-top').click(function(){
$('body,html').animate({scrollTop:0},1000);
})

</script>
<!--footer-->
<!--
<div id="footer">
<div class="container">
<div class="row">
<div class="col-sm-4">
<p><a href="homepage.php"> Online Hotel Reservation and Management System</a></p>
</div>
<div class="col-sm-4">
</div>
<div class="col-sm-4">
<font color="#fff">© 2016 All Rights Reserved</font>
</div>
</div>
</div>


</div>-->
<!--footer end-->

	<style>
		#footer {
		height: 80px;
		background-color: #161640;
		margin-top:50px;
		padding-top:20px;


		}
		#footer {
		background-color:#161640;
		}

		#footer a {
		color:#efefef;
		}
		#footer > .container {

		}



	<style>
		<?php
	header('Location:PatientLogin.php');
	?>
	
	</body>



</html>