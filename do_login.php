<?php
include "config.php";

if (isset($_POST['submit'])) {
$username=$_POST['user_text'];
$password=$_POST['password_text'];
$result=mysql_query("SELECT * FROM user WHERE username='$username' and password='$password'")or die (mysql_error());
		
$count=mysql_num_rows($result);
$row=mysql_fetch_array($result);
		
	if ($count > 0){
		session_start();
		$_SESSION['username']=$row['username'];
		header('location:home.php');
	}else{
		header('location:index.php');
		}
}
?>

