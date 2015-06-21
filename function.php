<?php

function homeDisplay(){
  $q = mysql_query("SELECT * FROM product ORDER BY RAND() LIMIT 4");
  return $q;
}

function search(){
  $s = $_GET['search'];
  $q = mysql_query("SELECT * FROM product WHERE nama LIKE '%$s%'");
  echo "<center><h1>Menampilkan '$s'</h1></center><br/>";
  return $q;
}

function product(){
  $q = mysql_query("SELECT * FROM product");
  return $q;
}
?>
