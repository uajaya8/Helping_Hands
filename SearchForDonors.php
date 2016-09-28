<?php

include ('dbcon.php');
session_start();

if(!isset($_SESSION['admindata']))
{

	header('Location:patientLogin.php');

}


?>



<!DOCTYPE html>
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
		<li><a href="tips.html">Kidney Protection</a></li>
		<li><a href="eligibility.html">Donor Eligibility</a></li>
		<!--<li><a href="#">Our Service</a></li>-->
		<li><a href="#">Share your Stories</a></li>
	</ul>
	</div>
	</div>
	</div>
<body  style="background-color:white">
 
<!--<nav class="navbar navbar-default navbar-fixed-top navbar-responsive">
	<div class="container-fluid">
    <div class="navbar-header ">
    <ul class="nav navbar-nav navbar-left"><li><img src="images/kidney.jpg" height=70px width=70px align="left"></li>
	<li><a class="navbar-brand" href="#"><font color= #FFF size="4">Donate a Kidney and Save a Life</font></a></li>
	</ul>
	
    
	<ul class="nav nav-pills navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span><b><font size="4" color="#FFF" face="calibri light"> Home</font></b></a></li>
				<li><a href="aboutus.html"><span class="glyphicon glyphicon-thumbs-up"></span><b><font size="4" color="#FFF" face="calibri light"> AboutUs</font></b></a></li>
				<li><a href=""><span class="glyphicon glyphicon-user"></span><b><font size="4" color="#FFF" face="calibri light"> Update Profile</font></b></a></li>
				<li><a href="#"><span class="glyphicon glyphicon-log-out"></span><b><font size="4" color="#FFF" face="calibri light"> Logout</font></b></a></li>
	</ul>
        				
    </div>
</nav><br><br><br>
<br><br><br><br>-->


	<div class="container">
	
	
	<div class="col-sm-10 col-sm-offset-1 "><br>
		<ul class="nav nav-pills navbar-right">
			<li><a href=""><span class="glyphicon glyphicon-user"></span><b><font size="4" color="#FFF" face="calibri light"> Update Profile</font></b></a></li>
			<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span><b><font size="4" color="#FFF" face="calibri light"> Logout</font></b></a></li>
		</ul>
			
		<form role="form" align="center" class="form-horizontal col-md-10 col-md-offset-1" data-toggle="validator" onSubmit="return validate();" id ="form2"action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		
			<p><h2><b>  Welcome!!!!</b></h2></p>
			<p><h4><b><legend>  Search for a compatible donor</legend></b></h4></p>
			
		<div class="row">
		
			<div class="jumbotron">
				<div class="form-group" align = "center">
				
							<label for="blood_type" class="col-md-4 control-label" >
								<font size="4" color="green">Enter your blood group </font>
							</label>
							<div class="controls">
                            <div class="col-md-6 control-group success">
								<select name="type" class="form-control">
									<option value="A+"><h5>A+</h5></option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>
								</select>
							</div>
							</div>
							<div class=" control-group success">
							   <div class="controls">
									<button type="submit" class="btn-lg btn-success" name="donor-search-submit">Search</button>
							   </div> 
							</div>

							<div class=" control-group success">
								<?php
		
		
		
		
		
		
								if(isset($_POST['donor-search-submit']))
								{
									//echo $_POST['type'];
									echo '<br>';
		
									switch ($_POST['type'])
									{
										case "A+":
											$blood_type = "'A+' OR 'A-' OR 'AB+' OR 'AB-'";
											break;
										case "A-":
											$blood_type = "'A-' OR 'AB-'";
											break;
										case "B+":
											$blood_type = "'B+' OR 'B-' OR 'AB+' OR 'AB-'";
											break;
										case "B-":
											$blood_type = "'B-' OR 'AB-'";
											break;
										case "AB+":
											$blood_type = "'A+' OR 'AB+' OR 'B+' OR 'O+' OR 'A-' OR 'AB-' OR 'B-' OR 'O-'";
											break;
										case "AB-":
											$blood_type = "'A-' OR 'AB-' OR 'B-' OR 'O-'";
											break;
										case "O+":
											$blood_type = "'O-' OR 'O+'";
											break;
										case "O-":
											$blood_type = "'O-'";
											break;
										default:
											$blood_type = "";
									}

		
		
		
									$sql = "SELECT * FROM tbl_donor WHERE blood=".$blood_type;
									$query = mysql_query($sql);
								?>
									
								<h3 class="h1Search"><div class="SubHeader1">Donor Details</div></h3>
	
						<table class="tftable" border="1" align=center >
							<tr>
								<th>Donor Name</th>
								<th>Donor Gender</th>
								<th>Blood Group</th>
								<th>Email</th>
								<th>Contact No 1</th>
								<th>Contact No 2</th>
								<th>Recorded Date</th>
							

							</tr>
							
		
    <?php
    while($result=mysql_fetch_array($query))
    {
    ?>
        <tr>
            <td><?php echo $result['fname']?> <?php echo $result['lname']?></td>
            <td><?php echo $result['gender']?></td>
            <td><?php echo($result['blood'])?></td>
            <td><?php echo $result['email']?></td>
			<td><?php echo $result['contact']?></td>
			 <td><?php echo $result['contact2']?></td>
            <td><?php echo $result['date']?></td>
			
            
        </tr>
								
		<?php 
		}
		?>

		</table>
							</div>
					
					
					
					
				</div>
			</div>
		</div>
		</form>
	</div>
	</div>
</body>
</html>

<?php
}
else
{
    /*echo 'failed';*/

}
?>	
				
