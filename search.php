<?php
include "config.php";
session_start();
if (!isset($_SESSION['username'])){
header('location:index.php');
}
?>
<a href="logout.php">Logout</a>
<hr>
<a href="my_shop.php">Keranjang Belanja</a>
<br/>
<br/>
<?php
include "search_page.php";
?>
    <table border="0" width="500px" align="center" >
      <thead bgcolor="#00CCFF">
      <td>Nomor</td><td>Produk</td><td>Harga</td><td>Pilih</td>
      </thead> 
<?php
if(isset($_POST['search'])){
  	$search=$_POST['search'];
  	$query="SELECT * FROM product WHERE product_name LIKE '%$search%' ";
}else{
	$query="SELECT * FROM product ";
}
$result=mysql_query($query) or die(mysql_error());
$no=1;
while($rows=mysql_fetch_object($result)){
      ?>
      <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $rows -> product_name;?></td>
        <td><?php echo $rows -> price;?></td>
        <td><a href="buy.php?product=<?php echo $rows -> product_id;?>">Buy</a></td>
      </tr>
      <?php
$no++;
}
?>
    </table> 