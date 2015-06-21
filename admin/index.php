<?php
  include '../connect.php';
  if(!empty($_POST)){
	$u = $_POST['user'];
	$p = SHA1($_POST['pass']);

	$q = mysql_query("SELECT * FROM admin WHERE user='".$u."' AND pass='".$p."'");
	$row = mysql_num_rows($q);

	if($row>0){
		session_start();
		$_SESSION['user']=$u;
		header('Location: dashboard.php');
	}else{
		echo"<script type='text/javascript'>alert('Username/Password tidak cocok !!!')</script>";
	}
}
?>
<html>
<head>
  <title>Administrator | Zartoys</title>
  <link rel="shortcut icon" href="../favicon.ico"/>
  <link rel="stylesheet" href="style.css"/>
</head>

<body>
  <div id="head">
    <h1>Login Administrator</h1>
  </div>
  <div id="box">
      <div id="content">
        <div id="login">
        <form method="POST" target="">
          <center>
            -Username-
            <br/><input type="text" name="user" placeholder="Username..."/><br/>
            -Password-
            <br/><input type="password" name="pass" placeholder="Password..."/><br/>
            <br/>
            <input type="submit" name="submit" value="Login"/>
          </center>
        </form>
        <a href="../index.php">Back to home</a>
      </div>
      </div>

<?php
include 'foot.php';
?>
