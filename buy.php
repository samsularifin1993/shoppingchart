<?php
include "config.php";
session_start();
if (!isset($_SESSION['username'])){
header('location:index.php');
}
?>
<a href="logout.php">Logout</a>
</br>
</br>
<?php
if(isset($_GET['product'])){
	$product=$_GET['product'];
	$query="INSERT INTO shoppingcart.my_shop (shop_id, username, product_id) VALUES ('', '$_SESSION[username]', '$product')";
	$result=mysql_query($query) or die(mysql_error());
	if($result==1){
		echo "Anda berhasil belanja produk, silakan lanjut kembali.<br/>";
		echo '<a href="search.php">Search</a>';
	}
}
?>
