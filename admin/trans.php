<?php
include 'head.php';
?>
<div id="content">

<h1>Kamu login sebagai <?php echo $_SESSION['user']; ?> ! <a href="dashboard.php?logout=1">Logout?</a></h1>

<center>
<table border='1'>
		<tr>
			<th colspan='7'>Daftar Transfer</th>
		</tr>
		<tr>
			<th>No</th>
			<th>Order ID</th>
			<th>Bank Asal</th>
			<th>Atas Nama</th>
			<th>Bank Tujuan</th>
			<th>Nominal</th>
			<th>Catatan</th>
		</tr>

		<?php
		$i = 1;
		$q = mysql_query("SELECT * FROM `transfer`");
		while($row = mysql_fetch_array($q)){

			echo "<tr>";
				echo "<td>$i</td>";
				echo "<td>".$row[1]."</td>";
				echo "<td>".$row[2]."</td>";
				echo "<td>".$row[3]."</td>";
				echo "<td>".$row[4]."</td>";
				echo "<td>".$row[5]."</td>";
				echo "<td>".$row[6]."</td>";
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
