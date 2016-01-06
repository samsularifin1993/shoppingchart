<?php
include "config.php";
session_start();
if (!isset($_SESSION['username'])){
header('location:index.php');
}
?>
<title>Home</title>
<a href="logout.php">logout</a>
</br>
</br>

<?php
$username=$_SESSION['username'];

$result=mysql_query("SELECT * FROM user WHERE username='$username'")or die(mysql_error());
$row=mysql_fetch_array($result);

$fullname=$row['fullname'];

echo "Selamat datang ".$fullname." !<br/>";
?>
<a href="search.php">Search</a>
