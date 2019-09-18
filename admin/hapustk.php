<?php
include "../koneksi.php";
	$id=addslashes($_GET['id']);
	$query="delete from jurusan where id='".$id."'";
	$exec=mysql_query($query);
	if(mysql_query($query))
		header("location:./?p=jurusan&code=3");
	else
		header("location:./?p=jurusan&code=2");

?>