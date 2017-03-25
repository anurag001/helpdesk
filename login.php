<?php
	require 'connect.inc.php';

	if(!empty($_POST['userlog']) and !empty($_POST['passlog']))
	{
		$user=$_POST['userlog'];
		$pass=$_POST['passlog'];
		
		$query="SELECT `id` FROM `record` WHERE `username`='$user' AND `password`='$pass'";
		if($query_run=mysql_query($query))
		{
				$num_rows=mysql_num_rows($query_run);
				if($num_rows==0)
				{
					echo 'Invalid username/password,try again';
				}
				else if($num_rows==1)
				{
					$user_id=mysql_result($query_run,0,'id');
					$active1=mysql_query("UPDATE `record` SET `active`=1 WHERE `id`='$user_id'");
					
					$_SESSION['user_id']=$user_id;					
					header('Location:index.php');
				}
		}
	}
?>
