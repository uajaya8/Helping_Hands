<?php
session_start();


$_REQUEST['email'];
$_REQUEST['pwd'];


include('dbcon.php');

$sql = "SELECT * FROM tbl_donor WHERE password='".$_REQUEST['pwd']."' AND email='".$_REQUEST['email']."'";
$query = mysql_query($sql);

if($query)
{

	$adminrows = mysql_num_rows($query);


	if($adminrows==1)
	{


		if(!isset($_SESSION['admindata']))
		{
			if(isset($_REQUEST['signin']))
			{




					$_SESSION['admindata'] = array(
						'is_login'=>true,

					);

					header('location:SearchForPatients.php');


			}
			else
			{

			}
		}
		else
		{
			header('location:SearchForPatients.php');
		}
	}
	else
	{
		header('location:DonorLogin.php');
	}
}
else
{
	$adminrows = 0;
	header('location:DonorLogin.php');

}
?>

