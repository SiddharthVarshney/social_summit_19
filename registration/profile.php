<?php
session_start();
if(!isset($_SESSION['userId'])){
    header('location:http://mbook.ga/index.php');
}


$number=$_SESSION['userId'];

$conn=mysqli_connect('fdb24.atspace.me','2892612_mbook','mohit1234','2892612_mbook');
// select database
$q1="select * from mbook where (number=$number)";

$result=mysqli_query($conn,$q1);


$row = mysqli_fetch_assoc($result);
        $_SESSION['name']=$row["name"];
	$_SESSION['number']=$row["number"];
	$_SESSION['emailId']=$row["emailId"];
	$_SESSION['dob']=$row["dob"];
	$_SESSION['gender']=$row["gender"];
	$_SESSION['year']=$row["year"];
	$_SESSION['college']=$row["college"];
	$_SESSION['collegeState']=$row["collegeState"];
	$_SESSION['refCode']=$row["refCode"];
	
	
	
mysqli_close($conn);


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />

<style>
        td{     border:1px solid black; padding:5px;    }
		body{	padding: 20px; background-image: url("contact-background-image.png");	}
</style>
</head>
<body >
	<img src="event_logo.png" alt="SoloLearn HTML" title="This is SoloLern HTML picture" />
	
        <div  align="center" style="background-color:white; padding:20px; margin:auto; width:700px;
		font-size:30px; border:2px solid black;">

<hr width="50%" size="5px" color="purpal"/>
National Social Summit Profile<br/>


<table cellspacing="0px" style=" background-color:#7CFCFF;padding:10px;margin-top:9px;width:100%;
		font-size:20px;border:1px solid black;">
	<tr><td>Name :</td><td><?php echo $_SESSION['name']; ?></td></tr>
	<tr><td>Number :</td><td><?php echo $_SESSION['number']; ?></td></tr>
	<tr><td>Email Id :</td><td><?php echo $_SESSION['emailId']; ?></td></tr>
	<tr><td>DOB :</td><td><?php echo $_SESSION['dob']; ?></td></tr>
	<tr><td>Gender :</td><td><?php echo $_SESSION['gender']; ?></td></tr>
	<tr><td>Year Of Graduation :</td><td><?php echo $_SESSION['year']; ?></td></tr>
	<tr><td>College :</td><td><?php echo $_SESSION['college']; ?></td></tr>
	<tr><td>College State :</td><td><?php echo $_SESSION['collegeState']; ?></td></tr>
	<tr><td>Referral Code :</td><td><?php echo $_SESSION['refCode']; ?></td></tr>
</table></div>
	<?php session_destroy(); ?>
    <button><a href="logout.php">LOGOUT</a></button>
</body>
</html>