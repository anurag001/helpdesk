<?php
	require 'connect.inc.php';
	require 'core.fac.php';
	$qid=$_GET['qid'];
	$link=$_SERVER['HTTP_REFERER'];
	
	$approve_query=mysql_query("update `query` set `flag`=1 where `query_id`='$qid'");
	if($approve_query)
	{
		header('location:'.$link);
	}
	

?>