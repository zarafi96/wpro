<?php

function product(){

  $q = mysql_query("SELECT * FROM product");
  return $q;
}

?>
