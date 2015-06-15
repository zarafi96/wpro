<?php include 'head.php';?>
  <div id="content">
    <center>
      <h1>Products</h1>
      <hr/>
      <br/>
    </center>
    <div id='search'>
    <form method='get' target=''>
    <center>
    <table>
      <tr>
        <td><input type='text' name='search' placeholder='Insert Keyword...'/></td>
        <td><input type='submit' value='Search...'</td>
      </tr>
    </table>
    </center>
    </form>
    </div>
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
  </div>
<?php include 'foot.php';?>
