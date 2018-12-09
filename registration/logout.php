<?php
session_start();
if(!isset($_SESSION['userId'])){
	header('location:http://mbook.ga/login.php');
}

session_destroy();
        header('location:http://mbook.ga/login.php');
?>