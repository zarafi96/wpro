<?php include 'head.php';?>
  <div id="content">
    <center>
      <h1>Products</h1>
      <hr/>
      <br/>
    </center>
<?php
$id = $_GET['id'];
$q = mysql_query("SELECT * FROM product WHERE id='$id'");
$row = mysql_fetch_array($q);
echo"
<div id='detail'>

<div id='pict'>
<img src='".$row['gambar']."'/>
<br/>
<h1>ID : ".$row['id']."</h1>
</div>

<div id='desc'>
<h1>".$row['nama']."</h1>
<hr/>
<p>
".$row['deskripsi']."
</p>
<hr/>
<h1>Harga : Rp. ".number_format($row['harga'], 0 , ',' , '.').",-</h1>
<h1>Stok : ".$row['stok']."</h1>
<center>
<a href='order.php?id=".$row['id']."'>Order</a>
</center>
</div>

</div>
";
?>
</div>
<?php include 'foot.php';?>
