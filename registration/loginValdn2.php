<?php
session_start();
$userId=$_POST['userId'];
$pswd=$_POST['pswd'];


$conn=mysqli_connect('fdb24.atspace.me','2904622_mbook','mohit1234','2904622_mbook');


$q="select * from nss2 where ( number='$userId' && pswd='$pswd')";


$result=mysqli_query($conn,$q);
$num=mysqli_num_rows($result);

if($num==0){  
        
        mysqli_close($conn);
	header('location:http://nationalsocialsummit.org/registration/registration2.php');
        }

else{    
    $_SESSION['userId']=$userId;
	header('location:http://nationalsocialsummit.org/registration/profile2.php');

}

?>