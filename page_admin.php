<?php
session_start();
if(!$_SESSION['email'])
{
	header("Location: index.php");
}

include('cek_admin.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>SISTEM PENGURUSAN ASET SEKOLAH (KEW-PA) </title>
</head>
<body>
<centre>

<!-- SENARAI MENU PENTADBIR -->
<h2>SELAMAT DATANG KE DESKBOARD PENTADBIR ASET</h2>
  <h3>MENU UTAMA SISTEM</h3>
  <a href="daftar_asetbaru.php">Daftar Aset Baru</a> <br>
  <a href="update_jenis.php">Kemaskini Jenis Aset</a> <br>
  <a href="update_lokasi.php">Kemaskini Lokasi Aset</a> <br>
  <a href="senarai_aset.php">Hapus Maklumat Aset</a> <br>
</centre>
</body>
</html>