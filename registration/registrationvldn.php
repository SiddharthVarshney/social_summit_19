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
	header('location:http://www.mbook.ga/index.php');
}

$conn=mysqli_connect('fdb24.atspace.me','2892612_mbook','mohit1234','2892612_mbook');
// select database
$q1="select * from mbook where (number=$number)";
$q2="select * from mbook where (emailId=$emailId)";

$result=mysqli_query($conn,$q1);

$num=mysqli_num_rows($result);

if($num!=0){
	header('location:http://www.mbook.ga/index.php');
}

// create a query
$q3="insert into mbook(name,number,emailId,dob,gender,year,college,collegeState,pswd,refcode) values('$name','$number','$emailId','$dob','$gender','$year','$college','$collegeState','$pswd','$refcode')";

mysqli_query($conn,$q3);
mysqli_close($conn);
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Registration complet !</h1>
</body>
</html>
