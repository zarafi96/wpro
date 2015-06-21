<?php
include 'head.php';
?>
<div id="content">

<h1>Kamu login sebagai <?php echo $_SESSION['user']; ?> ! <a href="dashboard.php?logout=1">Logout?</a></h1>

<center>
<table border='1'>
		<tr>
			<th colspan='8'>Daftar Order</th>
		</tr>
		<tr>
			<th>No</th>
			<th>Product ID</th>
			<th>Qty</th>
			<th>Total Bayar</th>
			<th>Nama</th>
			<th>No HP</th>
			<th>E-mail</th>
			<th>Alamat</th>
		</tr>

		<?php
		$i = 1;
		$q = mysql_query("SELECT * FROM `order`");
		while($row = mysql_fetch_array($q)){

			echo "<tr>";
				echo "<td>$i</td>";
				echo "<td>".$row[1]."</td>";
				echo "<td>".$row[2]."</td>";
				echo "<td>".$row[3]."</td>";
				echo "<td>".$row[4]."</td>";
				echo "<td>".$row[5]."</td>";
				echo "<td><a href='mailto:".$row[6]."'>".$row[6]."</a></td>";
				echo "<td>".$row[7]."</td>";
			echo "</tr>";
			$i++;
		}

		?>
</table>
</center>
</div>
<?php
include 'foot.php';
?>
