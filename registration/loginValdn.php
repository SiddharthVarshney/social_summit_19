<?php
session_start();
$userId=$_POST['userId'];
$pswd=$_POST['pswd'];

$conn=mysqli_connect('fdb24.atspace.me','2892612_mbook','mohit1234','2892612_mbook');

$q="select * from mbook where ( number='$userId' && pswd='$pswd')";

$result=mysqli_query($conn,$q);
$num=mysqli_num_rows($result);
if($num==0){
	header('location:http://mbook.ga/index.php');
}
else{
    $_SESSION['userId']=$userId;
	header('location:http://mbook.ga/profile.php');
}

?>