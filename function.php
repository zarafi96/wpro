<?php

function search(){

  <?php
    if(isset($_GET['search'])){
      $s = $_GET['search'];
      $q = mysql_query("SELECT * FROM product WHERE nama LIKE '%$s%'");
      echo "<center><h1>Menampilkan '$s'</h1></center><br/>";
    }else{
      $q = mysql_query("SELECT * FROM product");
      }
      echo"
      <div id='etalase'>
      <ul>";
          while($row = mysql_fetch_array($q)){
            if($row['stok']>0){$ket = "Tersedia(".$row['stok'].")";}else{$ket = "Habis";}
            echo"<li><center>
                <img src='".$row['gambar']."'/>
                <br/>
                  ".$row['nama']."
                  <br/>
                   Rp. ".number_format($row['harga'], 0 , ',' , '.').",-
                   <br/>
                   Stok : ".$ket."
                <br/>
                <hr/>
                   <a href='order.php?id=".$row['id']."'>Order</a>
                   <a href='detail.php?id=".$row['id']."'>Detail</a>
                   </center>";
    }
      echo"</ul>
      </div>";
  ?>
}

?>
