<?php
include "../koneksi.php";
	$id=addslashes($_GET['id']);
	$query="delete from pendaftar where id='".$id."'";
	$exec=mysql_query($query);
	if(mysql_query($query))
		header("location:./?p=pendaftar&code=3");
	else
		header("location:./?p=pendaftar&code=2");

?>