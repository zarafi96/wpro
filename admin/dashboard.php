<?php
include 'head.php';
?>
Kamu login sebagai <?php echo $_SESSION['user']; ?>
<br/>
<a href="dashboard.php?logout=1">Logout</a>

<?php
include 'foot.php';
?>
