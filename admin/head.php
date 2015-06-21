<?php
  include '../connect.php';
  session_start();
  if(empty($_SESSION['user'])){
  	header('Location: index.php');
  }
  if(!empty($_GET['logout'])){
  	unset($_SESSION['user']);
  	session_destroy();
  	header('Location: index.php');
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
  <div id="logo">
    <img src="../img/logo.png"/>
  </div>
  <div id="menu">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="product.php">Products</a></li>
      <li><a href="how.php">How To Buy</a></li>
      <li><a href="transfer.php">Payment</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </div>
</div>

<div id="box">
