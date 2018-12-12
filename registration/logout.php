<?php
session_start();
if(!isset($_SESSION['userId'])){
	header('location:http://www.nationalsocialsummit.org/registration/login2.php');
}

session_destroy();
            header('location:http://www.nationalsocialsummit.org/registration/login2.php');
?>