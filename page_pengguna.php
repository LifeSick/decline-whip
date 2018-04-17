<?php
session_start();

if(!$_SESSION['email'])
{
	header("Location: index.php");
}
include('cek_pengguna.php');
?>

<html>
<head>
<title>DAFT-R 300</title>
</head>
<body>
<center>
<h2>SELAMAT DATANG KE DESKBOARD PENGGUNA Daft-R 3000</h2>
   <h3>MENU UTAMA SISTEM</h3>
   <h4>Selamat datang <?php echo $_SESSION['email']; ?></h4>
   <fieldset>
<!--User Menu-->
<a href="template.php">anything u want bb</a> <br>
<a href="template.php">anything u want bb</a> <br>
<a href="logout.php">Log Keluar</a> <br>
  </fieldset>
</center>
</body>
</html>