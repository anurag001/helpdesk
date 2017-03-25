<?php
	include_once'connect.inc.php';
	$getid=$_GET['rid'];
	$link=$_SERVER['HTTP_REFERER'];
	
	
	$del_query=mysql_query("delete from `fachead` where `id`='$getid'");
	echo mysql_error();
	if($del_query)
	{
		header('location:'.$link);
	}
	
	
?>