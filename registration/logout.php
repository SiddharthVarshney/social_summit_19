<?php
session_start();
if(!isset($_SESSION['userId'])){
	header('location:http://nationalsocialsummit.org/registration/login2.php');
}

session_destroy();
            header('location:http://nationalsocialsummit.org/registration/login2.php');
?>