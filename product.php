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
    products();
  </div>
<?php include 'foot.php';?>
