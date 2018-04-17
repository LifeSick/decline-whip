<?php
include('connection.php');
session_start();
if(!$_SESSION['email'])
{
	header("Location: index.php");
}
if (isset($_POST["a1"]))
{
	$a1=$_POST["a1"];
	$a2=$_POST["a2"];
	$a3=$_POST["a3"];
	$a4=$_POST["a4"];
	$a5=$_POST["a5"];

$data=mysqli_query($connection, "INSERT into butiran
(kod_daftar,nama_aset,jenis,lokasi,status) values
('a1','a2','a3','a4','a5')") or die(mysqli_error());

echo "<script>alert ('Rekod telah disimpan'); window.location='page_admin.php'</script>";
}
else
{

?>

<html>
<head>
<title>DESKBOARD PENTADBIR</title>
<CENTER>
<h3>DAFTAR MURID</h3>
<form name="form1" action="daftar_asetbaru.php" mehod="POST">
<fieldset>
<table width="600" border="0" align="center">
<thead>
<tr>
<th></th>
    </tr>
    </thead>
    <tbody>
<tr>

<td><label>: </label>
<input type="text" name="a1" placeholder="NAMA MURID" required /></td>
</tr>
<tr>
<td>
<label>Nama Murid: </label>
<input type="text" name="a2" placeholder="UMUR" required/></td>
</tr>
<tr>
<td>
<label>Nama Murid: </label>
<input type="text" name="a2" placeholder="JANTINA" required/></td>
</tr>
<tr>
<td>
<label>Nama Murid: </label>
<input type="text" name="a2" placeholder="ALAMAT" required/></td>
</tr>
<tr>
<td>
<label>Nama Murid: </label>
<input type="text" name="a2" placeholder="ALAMAT" required/></td>
</tr>
<tr>
<td>
<label>Jenis Aset: </label>
<select name="a3"required>
	<?php
	$data1=mysqli_query($connection,"select * from jenis");
	while ($info1=mysqli_fetch_array($data1))
	{
    echo "<option hidden selected> --PILIH JENIS-- </option>";
    echo "<option value='info1[id]'>$info1[jenis]</option>";
	}
	?>


</select><!--- daftar jenis baru -->
<a href="#" onClick="window.open
('update_jenis.php','jenis','resizable,height=450,width=450'); return
false;">*Daftar Jenis Baru </a>
-->

