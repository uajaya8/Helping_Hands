<?php
include ('dbcon.php');

//$_REQUEST['']

echo $_REQUEST['email'];
echo $_REQUEST['password'];

echo $_REQUEST['pname'];
echo $_REQUEST['pGender'];
echo $_REQUEST['pDOB'];
echo $_REQUEST['NIC'];
echo $_REQUEST['pBlood'];
echo $_REQUEST['pdetails'];


echo $_REQUEST['nephrologist'];
echo $_REQUEST['docemail'];
echo $_REQUEST['hospital'];
echo $_REQUEST['Contact'];
echo $_REQUEST['Contact2'];





$mydate=getdate(date("U"));
$date = $mydate['mday'].",".$mydate['month'].",".$mydate['year'];
$date = $mydate['year'].",".$mydate['month'].",".$mydate['mday'];





//Insert record into database
$sql = "INSERT INTO tbl_patient(          id,
                                        email,
                                        password,
                                        patient_name,
                                        patient_gender,
                                        patient_dob,
										NIC,
                                        patient_blood,
                                        patient_details,
                                        nephrologist,
                                        docemail,
                                        hospital,
                                        contact,
                                        contact2,
                                        date) VALUES('',
                                                        '".$_REQUEST['email']."',
                                                        '".$_REQUEST['password']."',
                                                        '".$_REQUEST['pname']."',
                                                        '".$_REQUEST['pGender']."',
                                                        '".$_REQUEST['pDOB']."',
														'".$_REQUEST['NIC']."',
                                                        '".$_REQUEST['pBlood']."',
                                                        '".$_REQUEST['pdetails']."',
                                                        '".$_REQUEST['nephrologist']."',
                                                        '".$_REQUEST['docemail']."',
                                                        '".$_REQUEST['hospital']."',
                                                        ".$_REQUEST['Contact'].",
                                                        ".$_REQUEST['Contact2'].",
                                                        '".$date."')";
/*echo $sql;*/
$result = mysql_query ($sql);

if($result==true)
{
    
	header('location:patientLogin.php?status=regsuccess');


}
else
{

    header('location:patientRegistration.php?status=regfailed');
}



?>





<!--<button type="submit" class="btn btn-success btn-md" > Submit</button>-->
