<?php
$namahos = "localhost";
$pengguna_mysql = "root";
$katalaluan_mysql = "root"; 
$pdata_mysql = "aset";

$connection = mysqli_connect($namahos, $pengguna_mysql, $katalaluan_mysql) or die
("Maaf pangkalan data tidak bersabung");

mysli_select_db($connection, $pdata_mysql) or die("Tidak dapat pilih pangkalan data");
?>
