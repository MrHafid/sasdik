<?php
include "../koneksi.php";
$id= $_GET ['id'];

	mysql_query("update pendaftar set status='Diterima' where id='$id'");
		
if(mysql_query)
		header("location:./?p=seleksi&code=1");
else
	header("location:./?p=seleksi&code=2");

?>