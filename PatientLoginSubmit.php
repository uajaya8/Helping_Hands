<?php
session_start();

$_REQUEST['email'];
$_REQUEST['pwd'];






include('dbcon.php');

$sql = "SELECT * FROM tbl_patient WHERE password='".$_REQUEST['pwd']."' AND email='".$_REQUEST['email']."'";
$query = mysql_query($sql);

if($query)
{

    $adminrows = mysql_num_rows($query);


    if($adminrows==1)
    {


        if(!isset($_SESSION['admindata']))
        {
            if(isset($_REQUEST['patientsignin']))
            {




                $_SESSION['admindata'] = array(
                    'is_login'=>true,

                );

                header('location:SearchForDonors.php');


            }
            else
            {

            }
        }
        else
        {
            header('location:SearchForDonors.php');
        }
    }
    else
    {
        header('location:PatientLogin.php');
    }
}
else
{
    $adminrows = 0;
    header('location:PatientLogin.php');

}
?>

