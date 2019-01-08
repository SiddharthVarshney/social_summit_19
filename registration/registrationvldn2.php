<?php

session_start();

$name=$_POST['name'];
$number=$_POST['number'];
$emailId=$_POST['emailId'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$year=$_POST['year'];
$college=$_POST['college'];
$collegeState=$_POST['collegeState'];
$refcode=$_POST['refcode'];
$pswd=$_POST['pswd'];
$rePswd=$_POST['rePswd'];

if($pswd != $rePswd){
        header('location:http://nationalsocialsummit.org/registration/registration2.php');
}

$conn=mysqli_connect('fdb24.atspace.me','2904622_mbook','mohit1234','2904622_mbook');
// select database

$q1="select * from nss2 where (number=$number)";

$result=mysqli_query($conn,$q1);

$num=mysqli_num_rows($result);

if($num!=0){
	// pop up box
        
	header('location:http://nationalsocialsummit.org/registration/registration2.php');
}

// create a query
$q2="insert into nss2 (name,number,emailId,dob,gender,year,college,collegeState,refcode,pswd) values ('$name','$number','$emailId','$dob','$gender','$year','$college','$collegeState','$refcode','$pswd')";

mysqli_query($conn,$q2);


mysqli_close($conn);
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>National Social Summit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
             .round{
	padding:5px;
	font-size:22px;
	background-color:#f5de78;
	color:#0e666c;
        border-radius:30px;    }
        
    
    </style>
</head>
<body>
        <a href="http://nationalsocialsummit.org/index.html">
        <img alt="NSS Event Logo" src="event_logo.png" title="NSS Event Logo" width="270px" height="120px">
        </a>
        
        
        <div align="center" >
       <a href="http://nationalsocialsummit.org/index.html">
          <button class="round" >&nbsp;&nbsp;&nbsp; HOME &nbsp;&nbsp;&nbsp;</button>
       </a>
     </div> 
        
    <h1>Registration complete !</h1>
</body>
</html>

