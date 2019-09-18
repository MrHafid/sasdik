<?php
include "../koneksi.php";
	$id=addslashes($_POST['id']);
	$jurusan=addslashes($_POST['jurusan']);
	$query="select * from jurusan where id='".$id."'";
	$exec=mysql_query($query);
	$r=mysql_fetch_array($exec);
	$kdjabfield=$r[0];
	$nmjabfield=$r[1];
	if(mysql_num_rows($exec)==0)
		$query="insert into jurusan values('$id','$jurusan')";
	else
		$query="update jurusan set jurusan='$jurusan' where id='$id'";
	if(mysql_query($query))
		header("location:./?p=jurusan&code=1");
	else
		header("location:./?p=jurusan&code=2");

?>