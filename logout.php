<?php
session_start();
if(isset($_SESSION['user_tchr'])){
	session_destroy();
	header("location:index.php");
}
if(isset($_SESSION['user_stdnt'])){
	session_destroy();
	header("location:index.php");
}
	header("location:index.php");

 ?>