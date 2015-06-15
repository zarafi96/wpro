<?php include 'head.php';?>
  <div id="content">
    <div id="order">
    <?php
    $id = $_GET['id'];
    $q = mysql_query("SELECT * FROM product WHERE id='".$id."'");
    $row = mysql_fetch_array($q);

    if(!empty($_POST)){
      $qty = $_POST['qty'];
      $bayar = $row['harga']*$qty;
      $stok = $row['stok']-$qty;
      $nama = $_POST['nama'];
      $hp = $_POST['hp'];
      $email = $_POST['email'];
      $alamat = $_POST['alamat'];

      $ins = "INSERT INTO `order`(`no`, `id`, `qty`, `bayar`, `nama`, `hp`, `email`, `alamat`)
       VALUES (NULL,'$id',$qty,$bayar,'$nama','$hp','$email','$alamat')";
      $upd = "UPDATE `product` SET `stok`='$stok' WHERE id='$id'";

       mysql_query($ins);
       mysql_query($upd);
       header('Location:product.php');

    }else{
      ?>
      <center>
      <h1>Order</h1>
      <hr/>
      <br/>

    </center>
      <form method="post" target="">
      <table align="center">
        <tr>
          <td rowspan="10" align="center"><img src="<?php echo $row['gambar']; ?>" width="350px"/></td>
        </tr>
        <tr>
          <th>Product ID</th><td> : </td><td><?php echo $id; ?></td>
        </tr>
        <tr>
          <th>Nama Product</th><td> : </td><td><?php echo $row['nama']; ?></td>
        </tr>
        <tr>
          <th>Harga Product</th><td> : </td><td>Rp. <?php echo number_format($row['harga'], 0 , ',' , '.');?>,-</td>
        </tr>
        <tr>
          <th>Stok Product</th><td> : </td><td><?php echo $row['stok'];?></td>
        </tr>
        <tr>
          <th>Qty Order</th><td> : </td><td><input type="text" name="qty" placeholder="0" size="1" /> Pcs</td>
        </tr>
        <tr>
          <th>Nama Lengkap</th><td> : </td><td><input type="text" name="nama" placeholder="Nama Lengkap ..." size="24" /></td>
        </tr>
        <tr>
          <th>No. HP</th><td> : </td><td><input type="text" name="hp" placeholder="No. HP ..." size="24" /></td>
        </tr>
        <tr>
          <th>E-Mail</th><td> : </td><td><input type="text" name="email" placeholder="E-Mail ..." size="24" /></td>
        </tr>
        <tr>
          <th>Alamat Lengkap</th><td> : </td><td><textarea name="alamat" placeholder="Alamat Lengkap ..." rows="2" cols="20"></textarea></td>
        </tr>
        <tr>
          <td colspan="3" align="center"><input type="submit" value="Order !" name="submit" /></td>
        </tr>
      </table>
    </form>

      <?php } ?>
    </div>
  </div>
<?php include 'foot.php';?>
