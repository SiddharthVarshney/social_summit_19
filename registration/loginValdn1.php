<?php
session_start();
$userId=$_POST['userId'];
$pswd=$_POST['pswd'];


$conn=mysqli_connect('fdb24.atspace.me','2904622_mbook','mohit1234','2904622_mbook');


$q="select * from nss1 where ( number='$userId' && pswd='$pswd')";

$result=mysqli_query($conn,$q);
$num=mysqli_num_rows($result);

if($num==0){

        mysqli_close($conn);
	header('location:http://www.nationalsocialsummit.org/registration/registration1.php');
        }

else{
         $_SESSION['userId']=$userId;
	header('location:http://www.nationalsocialsummit.org/registration/profile1.php');
        }

?>