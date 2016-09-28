<?php
include ('dbcon.php');

//$_REQUEST['']

echo $_REQUEST['email'];
echo $_REQUEST['password'];
echo $_REQUEST['Fname'];
echo $_REQUEST['Lname'];
echo $_REQUEST['Gender'];
echo $_REQUEST['DOB'];
echo $_REQUEST['NIC'];
/*echo $_REQUEST['Address'];*/
echo $_REQUEST['Contact'];
echo $_REQUEST['Contact2'];
echo $_REQUEST['Blood'];
echo $_REQUEST['health_issues'];



$mydate=getdate(date("U"));
$date = $mydate['mday'].",".$mydate['month'].",".$mydate['year'];
/*$date =  $mydate['weekday'].",". $mydate['month'].",".$mydate['mday'].",".$mydate['year'];*/




//Insert record into database
$sql = "INSERT INTO tbl_donor(          id,
                                        email,
                                        password,
                                        fname,
                                        lname,
                                        gender,
                                        dob,
                                        nic,
                                        contact,
                                        contact2,
                                        blood,
                                        health_issues,
                                        date) VALUES('',
                                                        '".$_REQUEST['email']."',
                                                        '".$_REQUEST['password']."',
                                                        '".$_REQUEST['Fname']."',
                                                        '".$_REQUEST['Lname']."',
                                                        '".$_REQUEST['Gender']."',
                                                        '".$_REQUEST['DOB']."',
                                                        '".$_REQUEST['NIC']."',
                                                        ".$_REQUEST['Contact'].",
                                                        ".$_REQUEST['Contact2'].",
                                                        '".$_REQUEST['Blood']."',
                                                        '".$_REQUEST['health_issues']."',
                                                        '".$date."')";
echo $sql;
$result = mysql_query ($sql);

if($result==true)
{
    header('location:DonorLogin.php?status=regsuccess');


}
else
{

    header('location:DonorRegistration.php?status=regfailed');
}



?>





<!--<button type="submit" class="btn btn-success btn-md" > Submit</button>-->
