<?php
	require 'connect.inc.php';
	require 'core.fac.php';
	$id=$_SESSION['user_id'];
	
	$query=$_POST['query'];
	if(!empty($query))
	{
	$insert_query=mysql_query("insert into query(`stud_id`,`query`,`flag`) values('$id','$query',1)");
	
		if($insert_query)
		{
			echo 'Query has been submitted successfully.';
		}
		else
		{
			echo 'Problem occurs in submitting query.';
		}
	}
	else
	{
		echo 'Enter your query first.';
	}
?>