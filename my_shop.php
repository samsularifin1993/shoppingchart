<?php
include "config.php";
session_start();
if (!isset($_SESSION['username'])){
header('location:index.php');
}
?>
<a href="logout.php">Logout</a>
<hr>
<a href="search.php">Search</a>
<br/>
<br/>
    <table border="0" width="500px" align="center" >
      <thead bgcolor="#00CCFF">
      <td>Nomor</td><td>Produk</td><td>Harga</td>
      </thead>    
<?php
$query=("SELECT * FROM my_shop INNER JOIN user ON my_shop.username = user.username INNER JOIN product ON my_shop.product_id = product.product_id");
//$query="SELECT * FROM my_shop WHERE username='$_SESSION[username]' ";
$result=mysql_query($query) or die(mysql_error());
$no=1;
$total=0;
while($rows=mysql_fetch_object($result)){
      ?>
      <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $rows -> product_name;?></td>
        <td align="right"><?php echo $rows -> price;?></td>
      </tr>
      <?php
$total=$total+$rows -> price;
$no++;
}
?>
	<tr>
        <td colspan="2">Total</td>
        <td bgcolor="#9999FF" align="right"><?php echo $total;?></td>
    </tr>
    </table> 