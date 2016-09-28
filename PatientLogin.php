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
<title>Patient Login</title>

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
		<li><a href="tips.html">Kidney Protection</a></li>
		<li><a href="eligibility.html">Donor Eligibility</a></li>
		<!--<li><a href="#">Our Service</a></li>-->
		<li><a href="#">Share your Stories</a></li>
	</ul>
	</div>
	</div>
	</div>
	
<body  style="background-color:white"> <!--changed-->
 
<!--<nav class="navbar navbar-default navbar-fixed-top navbar-responsive">
	<div class="container-fluid">
    <div class="navbar-header ">
    <ul class="nav navbar-nav navbar-left"><li><img src="images/kidney.jpg" height=70px width=70px align="left"></li>
	<li><a class="navbar-brand" href="#"><font color= #FFF size="4">Donate a Kidney and Save a Life</font></a></li>
	</ul>
	
    
	<ul class="nav nav-pills navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span><b><font size="4" color="#FFF" face="calibri light"> Home</font></b></a></li>
				<li><a href="aboutus.html"><span class="glyphicon glyphicon-thumbs-up"></span><b><font size="4" color="#FFF" face="calibri light"> AboutUs</font></b></a></li>
				<li><a href="#"><span class="glyphicon glyphicon-chevron-left"></span><b><font size="4" color="#FFF" face="calibri light"> Back</font></b></a></li>
	</ul>
        				
    </div>
</nav><br><br><br>-->

<div class="container" ><br>



<div class="col-md-6 col-md-offset-3  text-center">

<div class="jumbotron">
	<p>
	<h4>
		<b>
			<font color="green">
				<?php
				if(isset($_GET['status']))
				{
					if($_GET['status']=='regsuccess'){echo 'Registration Success login now';}
				}


				?>
			</font>
		</b>
	</h4>
	</p>
<form role="form" align="center"  id="login" action="PatientLoginSubmit.php" method="post"><div class="header"><font size="6px" color="green">Login as a Patient</font></div><br>
	  <div class="control-group success">
		<label class="control-label" for="email"><font color="green">Email</font></label>
		<div class="controls">
			<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required/>
		</div>
	  </div>
	  <div class="control-group success">
		<label class="control-label" for="pwd"><font color="green">Password</font></label>
		<div class="controls">
			<input type="password"  class="form-control" id="pwd" name="pwd" placeholder="Enter password">
		</div>
	  </div>
	  <div class="form-group">
		<div class="checkbox">
			<label><input type="checkbox"><font color="green"> Remember me</font></label>
		</div>
	  </div>
	  <div class="col-md-8 col-md-offset-2">
		<div id="messages"><font size="30"></font></div>
	  </div>
	   <div class="control-group success">
	   <div class="controls">
			<button type="submit" class="btn btn-success" name="patientsignin">Sign in</button>
	   </div> 
	   </div>
   
	  <br><a href="hotel_forgotpassword.php" ><font align="center" color="green">Forgot password?</font></align></a>
	  <br><a href="PatientRegistration.php"><font align="center" color="green">New User?</font></a>
 
</form>

</div>
</div>

</div>


	 <script type="text/javascript">
		$(document).ready(function() {
		$('#login').bootstrapValidator({
			container: '#messages',
					/*feedbackIcons: {
						valid: 'glyphicon glyphicon-ok',
						invalid: 'glyphicon glyphicon-remove',
						validating: 'glyphicon glyphicon-refresh'
					},*/
			fields: {
				email: {
					validators: {
						notEmpty: {i
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
						}
						
			 
			   
			}
		});
	});
				
	</script>
	   <br><br><br>
	   
	    </body>
 </html>