<?php include 'head.php';?>
  <div id="content">
    <center>
      <img src="img/logo.png"/>
      <hr/>
      <h1>Toko Action Figure Online</h1>
      <br/>
    </center>

    <div id="etalase">
    <ul>
      <?php
        $q = homeDisplay();
        while($row = mysql_fetch_array($q)){
          echo"<li><center>
		          <img src='".$row['gambar']."'/>
              <br/>
		            ".$row['nama']."
                <br/>
		             Rp. ".number_format($row['harga'], 0 , ',' , '.').",-
                 <br/>
                 Stok : ".$row['stok']."
              <br/>
              <hr/>
		             <a href='order.php?id=".$row['id']."'>Order</a>
                 <a href='product.php?id=".$row['id']."'>Detail</a>
		             </center>";
        }
      ?>
    </ul>

    </div>
  </div>
<?php include 'foot.php';?>
